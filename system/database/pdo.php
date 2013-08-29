<?php
abstract class DB_Driver
{
    protected $_hostname;
    protected $_username;
    protected $_password;
    protected $_database;
    protected $_PdoObject;
    
    private $_UID;
    
    protected function __construct($dbtype)
    {
        $dsn = $dbtype.":dbname=".$this->_database.";host=".$this->_hostname;
        $this->_PdoObject = new PDO($dsn,$this->_username,$this->_password);
    }
    
    public function __destruct()
    {
        $this->_PdoObject = null;
    }
    
    public function getDatabase()
    {
        return $this->_database;
    }
    
    public function setUID($UID)
    {
        $this->_UID = (string)$UID;
        return $this;
    }
    
    public function getUID()
    {
        return $this->_UID;
    }
    
    public function prepareStatement($sql,$arguments)
	{
		$stmn = $this->_PdoObject->prepare($sql);
		if(is_array($arguments))
		{			
			for($i = 0; $i < count($arguments);$i++)
			{
				$stmn->bindValue($i+1,$arguments[$i]);
			}
		}else{
			$stmn->bindValue(1,$arguments);
		}
		return $stmn;
	}
	
	public function query($sql)
	{
		try{
			$this->_PdoObject->beginTransaction();
            $result = $this->_PdoObject->exec($sql);
            $this->_PdoObject->commit();
            return $result;
		}
		catch(PDOException $error)
		{
			$this->_PdoObject->rollback();
			return FALSE;
		}
		
	}
    
    public function run($sql,$arguments)
    {
        if($arguments != NULL && is_array($arguments))
        {
            $stmn = $this->prepareStatement($sql,$this->_makeArgumentsSafe($arguments));
        }
        else
        {
            $stmn = $this->_PdoObject->prepare($sql);
        }
        $stmn->execute();
        return $stmn;    
    }
    
    public function fetch($stmn)
    {
        return $stmn->fetch(PDO::FETCH_LAZY);
    }
    
    public function fetchAll($stmn)
    {
        include_once(BASEPATH.'database/db_rowset'.EXT);
        return new DB_Rowset($stmn->fetchAll(PDO::FETCH_OBJ));
    }
    
    public function find($stmn,$field,$value)
    {
        include_once(BASEPATH.'database/db_rowset'.EXT);
        $result = $this->_fetch($stmn);
        $rowset = new DB_Rowset();
        foreach($result as $row)
        {
            if($row->$field == $value)
            {
                $rowset->add($row);
            }
        }
        return $rowset;
    }
    
    public function makeSafe($arguments)
    {
        return $this->_makeArgumentsSafe($arguments);
    }
    
    protected function _has_operator($str)
	{
		$str = trim($str);
		if (!preg_match("/(\s|<|>|!|=|is null|is not null)/i", $str))
		{
			return FALSE;
		}

		return TRUE;
	}
    
    private function _fetch($stmn)
	{
	   if(1 < $stmn->rowCount())
	   {
	       include_once(BASEPATH.'database/db_rowset'.EXT);
	       return new DB_Rowset($stmn->fetchAll(PDO::FETCH_OBJ));
	   }else{
	       return $stmn->fetch(PDO::FETCH_LAZY);			
	   }
	}
    
    private function _makeArgumentsSafe($arguments)
	{
		if(is_array($arguments))
		{
			$result = array();
			foreach($arguments as $argument)
			{
                if(is_string($argument))
                {
                    $result[] = $this->_PdoObject->quote($argument);
                }
                else
                {
                    $result[] = $argument;
                }
			}
		}else{
			if(is_string($arguments))
            {
                $result = $this->_PdoObject->quote($arguments);
            }
            else
            {
                $result = $arguments;
            }
		}
		return $result;
	}
}
?>
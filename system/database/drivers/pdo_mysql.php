<?php
class DB_Driver_Mysql extends DB_Active_Record
{
    protected $_count_string = 'SELECT COUNT(*) AS ';
	protected $_random_keyword = ' RAND()';
    
    public function __construct($params)
    {
        $this->_hostname = $params['hostname'];
        $this->_username = $params['username'];
        $this->_password = $params['password'];
        $this->_database = $params['database'];
        parent::__construct("mysql");
    }
    
    public function escape($str)
	{
		if (is_string($str))
		{
			$str = "'".$this->escape_str($str)."'";
		}
		elseif (is_bool($str))
		{
			$str = ($str === FALSE) ? 0 : 1;
		}
		elseif (is_null($str))
		{
			$str = 'NULL';
		}

		return $str;
	}
    
    public function escape_str($str, $like = FALSE)	
	{	
		if (is_array($str))
		{
			foreach($str as $key => $val)
	   		{
				$str[$key] = $this->escape_str($val, $like);
	   		}
   		
	   		return $str;
	   	}

		$str = $this->_PdoObject->quote($str);
		
		// escape LIKE condition wildcards
		if ($like === TRUE)
		{
			$str = str_replace(array('%', '_'), array('\\%', '\\_'), $str);
		}
		
		return $str;
	}

    public function escape_like_str($str)    
    {    
    	return $this->escape_str($str, TRUE);
	}
    
    protected function _from_tables($tables)
	{
		if(!is_array($tables))
		{
            $result = explode("'",$tables);
            return '`'.$result[1].'`';
		}
        else
		{
            $resultStr = "";
            for($i = 0; $i < count($tables);$i++)
            {
                $tableName = explode("'",$tables[$i]);
                if($i == 0 || ($i+1) == count($tables))
                {
                    $resultStr .= "`".$tableName[1]."` ";
                }
                else
                {
                    $resultStr .= "`".$tableName[1]."`, ";
                }
            }
            return $resultStr;
        }
	}
    
    protected function _limit($sql, $limit, $offset)
	{	
		if ($offset == 0)
		{
			$offset = '';
		}
		else
		{
			$offset .= ", ";
		}
		
		return $sql."LIMIT ".$offset.$limit;
	}
}
?>
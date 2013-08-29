<?php
class Realm
{
    private $_ID;
    private $_Name;
    //private $_Information;
    private $_Type;
    private $_Population;
    private $_Locale;
    private $_Online;
    /*private $_Honor;
    private $_Conquest;
    private $_Arena2;
    private $_Arena3;
    private $_Arena5;*/
    
    public function __construct($ID)
    {
        $this->_ID = (int)$ID;
    }
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function setName($name)
    {
        $this->_Name = (string)$name;
        return $this;
    }
    
    public function getName()
    {
        return $this->_Name;
    }
    
    /*public function setInforamtion($info)
    {
        $this->_Information = (string)$info;
        return $this;
    }
    
    public function getInformation()
    {
        return $this->_Information;
    }*/
    
    public function setType($type)
    {
        $this->_Type = (string)$type;
    }
    
    public function getType()
    {
        return $this->_Type;
    }
    
    public function setPopulation($pop)
    {
        $this->_Population = (int)$pop;
        return $this;
    }
    
    public function getPopulation()
    {
        return $this->_Population;
    }
    
    public function setLocale($locale)
    {
        $this->_Locale = (int)$locale;
        return $this;
    }
    
    public function getLocale()
    {
        return $this->_Locale;
    }
}

class Status extends Model
{
    public function __construct()
    {
        $this->tableName = "realmlist";
        parent::Model();
    }
    
    public function getAllRealms()
    {
        $this->db->select()->from('realmlist');
        $query = $this->db->get();
        $result = array();
        if($query->rowCount() > 0)
        {
            $rows = new DB_Rowset($this->db->fetchAll($query));
            do{
                $row = $rows->current();
                $realm = new Realm($row->id);
                $realm->setName($row->name)
                      ->setPopulation($row->population)
                      ->setLocale($row->timezone)
                      ->setType($row->icon);
                $result[] = $realm;
            }while($rows->next());
        }
        return $result;    
    } 
}
?>
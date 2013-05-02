<?php
class Realm
{
    private $_ID;
    private $_Name;
    private $_Information;
    private $_Type;
    private $_Population;
    private $_Locale;
    private $_Online;
    private $_Honor;
    private $_Conquest;
    private $_Arena2;
    private $_Arena3;
    private $_Arena5;
    
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
    
    public function setInforamtion($info)
    {
        $this->_Information = (string)$info;
        return $this;
    }
    
    public function getInformation()
    {
        return $this->_Information;
    }
    
    public function setType($type)
    {
        $this->_Type = (string)$type;
    }
    
    public function getType()
    {
        
    }
}
?>
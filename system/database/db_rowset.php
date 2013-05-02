<?php
class DB_Rowset
{
    private $_container = array();
    private $_counter = 0;
    
    public function __construct($initArray = null)
    {
        if(isset($initArray))
            $this->_container = $initArray;
    }
    
    public function add($element)
    {
        $this->_container[] = $element;
        return $this;
    }
    
    public function remove($pos)
    {
        $this->_container[$pos] = null;
    }
    
    public function current()
    {
        return $this->_container[$this->_counter];
    }
    
    public function next()
    {
        $this->_counter++;
        if($this->_counter < count($this->_container))
        {
            return $this;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function prev()
    {
        if($this->_counter > 0)
        {
            $this->_counter--;           
            return $this; 
        }
        else
        {
            return FALSE;
        }
    }
    
    public function setPosition($pos)
    {
        $this->_counter = (int) $pos;
        return $this;
    }
    
    public function getCount()
    {
        return count($this->_container);
    }
}
?>
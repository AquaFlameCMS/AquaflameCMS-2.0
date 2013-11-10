<?php

class Votelink
{
    private $_ID;
    private $_URL;
    private $_Reward;
    
    public function __construct($id)
    {
        $this->_ID = (int)$id;
    }
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function setURL($url)
    {
        $this->_URL = (string)$url;
        return $this;
    }
    
    public function getURL()
    {
        return $this->_URL;
    }
    
    public function setReward($count)
    {
        $this->_Reward = (int)$count;
        return $this;
    }
    
    public function getReward()
    {
        return $this->_Reward;
    }
}

class Voteshop extends Model
{
    
}

?>
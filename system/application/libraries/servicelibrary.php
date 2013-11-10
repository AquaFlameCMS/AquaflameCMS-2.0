<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ServiceLibrary
{
    private $_CI_Instance;
    private $_Buffer;
    
    public function __construct()
    {
        $this->_CI_Instance =& get_instance();
    }
    
    private function getCI()
    {
        return $this->_CI_Instance;
    }
    
    public function getBuffer()
    {
        return $this->_Buffer;
    }
}
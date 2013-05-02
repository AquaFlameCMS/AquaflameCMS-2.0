<?php
class Forum extends Controller 
{
    private $_viewData = array();
    
	public function __construct()
	{
	   parent::Controller();
       if($this->session->userdata("userId"))
       {
            $this->load->model('account');
            $this->_viewData['loggedIn'] = TRUE;
            $this->_viewData['username'] = $this->account->getUserById($this->session->userdata("userId"))->getUsername();
       }
       else
       {
            $this->_viewData['loggedIn'] = FALSE;
       }
       $this->_viewData['subviewData'] = array();
	}
	
	public function index()
	{	
		$this->load->library('forumlibrary');
		$this->_viewData['forums'] = $this->forumlibrary->fetchForums()->getBuffer();
        $this->load->view("layouts/forum",$this->_viewData);
	}
}

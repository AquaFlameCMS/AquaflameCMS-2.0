<?php
class Status extends Controller
{
    private $_viewData = array();
    
	public function __construct()
	{
	   parent::Controller();
       $this->load->model('account');
       if($this->session->userdata("userId"))
       {
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
        $this->_viewData['subview'] = "partitials/status";
        $this->load->view('layouts/main',$this->_viewData);
    }
}
?>
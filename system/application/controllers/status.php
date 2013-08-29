<?php
class Status extends Controller
{   
	public function __construct()
	{
	   parent::Controller();
       $this->addViewData("sidepanel","sidebars/main");
	}
    
    public function index()
    {
        $this->_viewData['subview'] = "partitials/status";
        $this->load->view('layouts/main',$this->_viewData);
    }
}
?>
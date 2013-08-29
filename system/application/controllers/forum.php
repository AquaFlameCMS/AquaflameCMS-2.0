<?php
class Forum extends Controller 
{   
	public function __construct()
	{
	   parent::Controller();
       $this->addViewData("sidepanel","sidebars/main");
	}
	
	public function index()
	{	
		$this->load->library('forumlibrary');
        $this->addViewData('subview', "partitials/forum");
		$this->addViewData('forums',$this->forumlibrary->fetchForums()->getBuffer());
        $this->load->view('layouts/main',$this->_viewData);
	}
}

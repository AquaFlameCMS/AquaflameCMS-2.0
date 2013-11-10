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
        $this->load->model("realmlist");
        $subviewData["realms"] = $this->realmlist->getAllRealms();
        $this->addViewData('subviewData', $subviewData);
        $this->addViewData('subview', "partitials/status");
        $this->load->view('layouts/main',$this->_viewData);
    }
}
?>
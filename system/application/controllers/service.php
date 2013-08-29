<?php
class Service extends Controller
{
    public function __construct()
    {
        parent::Controller();
        $this->addViewData("sidepanel","sidebars/service");
    }  
    
    public function index()
    {
        $this->addViewData("subview","partitials/service_main");
        $this->load->view('layouts/main',$this->_viewData);
    }
}

?>
<?php
class Admin extends Controller
{
    private $_viewData = array();
    private $_user;
    
    public function __construct()
    {
        parent::Controller();
        $this->load->model('account');
        if($this->session->userdata('userId')){
            $gmLevel = $this->account->getGmLevel($this->session->userdata('userId'));
            if(!$gmLevel || $gmLevel < 3){
                header("Location: ".base_url());
            }else{
                $this->_user = $this->account->getUserById($this->session->userdata('userId'));
                $this->_viewData['user'] = $this->_user;
            }
        }else{
            header("Location: ".base_url());
        }
    }
    
    public function index()
    {
        $this->_viewData['subview'] = "partitials/admin_home";
        $this->load->view("layouts/admin",$this->_viewData);
    }
}
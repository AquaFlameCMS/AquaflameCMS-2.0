<?php
class Ajax extends Controller
{
    public function takelogin()
    {
        if($this->input->post('username') && $this->input->post('password'))
        {
            $this->load->model('account');
            $userLogin = $this->account->checkLogin($this->input->post('username'),$this->input->post('password'));
            if(!$userLogin->getLastError())
            {
                $this->session->set_userdata(array("userId" => $userLogin->getID()));
            }
            echo $userLogin->getLastError();
        }
    }
    
    public function takelogout()
    {
        $this->session->unset_userdata("userId");
    }
    
    public function takeregister()
    {
        if($this->input->post('username') && $this->input->post('password') && $this->input->post('email'))
        {
            $this->load->model('account');
            $result = $this->account->createAccount($this->input->post('username'),$this->input->post('password'),$this->input->post('email'));
            if($result < 0x01)
            {
                $user = $this->account->getUserByUsername($this->input->post('username'));
                $this->session->set_userdata(array("userId" => $user->getID()));
            }
            echo $result;
        }
    }
    
    public function responseadminarticles()
    {
        if(!$this->input->post('page')){
            $page = 1;
        }else{
            $page = (int)$this->input->post('page');
        }
        $this->load->library('newslibrary');
        $articles = $this->newslibrary->fetchArticlesAdmin($page);
        echo $articles->getBuffer();
    }
}

?>
<?php
class Ajax extends Controller
{
    public function takelogin()
    {
        if($this->input->post('username') && $this->input->post('password'))
        {
            $this->load->model('account');
            $userLogin = $this->account->checkLogin($this->input->post('username'),$this->input->post('password'));
            if($userLogin->getLastError() == 0x01)
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
    
    public function submitcomment()
    {
        if($this->input->post('id') && $this->input->post('text') && $this->input->post('type') && $this->session->userdata("userId")){
              $this->load->model('comments');
              if($this->comments->addComment($this->session->userdata("characterID"),$this->input->post('id'),$this->input->post('type'),$this->input->post('text')))    
                echo 0x01;
              else  
                echo 0x02;
        }else{
            echo 0x03;
        }
    }
    
    public function realminfo()
    {
        $this->load->model("realmlist");
        $realmInfo = $this->realmlist->getRealmById($this->input->post('id'));
        if($realmInfo){
            if($realmInfo->getOnline()){
                echo '<div class="group">
                                    <a href="#">
                                    <span class="group-thumbnail-up"></span>
                                    <span class="group-name" style="color: #33FF00;">Online</span>
                                    <span class="clear"><!-- --></span>
                                    </a>
                                </div>';
            }else{
                echo '<div class="group">
                                    <a href="#">
                                    <span class="group-thumbnail-down"></span>
                                    <span class="group-name" style="color: #CC0000;">Offline</span>
                                    <span class="clear"><!-- --></span>
                                    </a>
                                </div>';
            }
        }else{
            header("HTTP/1.0 404 Not Found");
        }
    }
}

?>
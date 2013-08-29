 <?php

class AccountInfo
{
    private $_CI;
    
    function AccountInfo()
    {
        $this->_CI =& get_instance();
    }
    
    public function Load($params)
    {
       if($this->_CI->session->userdata("userId"))
       {
            $this->_CI->load->model('account');
            $this->_CI->load->model('characters');
            $this->_CI->addViewData('loggedIn',TRUE);
            $this->_CI->addViewData('username',$this->_CI->account->getUserById($this->_CI->session->userdata("userId"))->getUsername());
            $this->_CI->addViewData('numchars',$this->_CI->characters->getCharactersNum($this->_CI->session->userdata("userId")));
            if(!$this->_CI->session->userdata("characterID") && $this->_CI->getViewData('numchars') > 0)
            {
                $this->_CI->session->set_userdata(array("characterID" => $this->_CI->characters->getFirstCharacter($this->_CI->session->userdata("userId"))));
            }
            $this->_CI->addViewData('characterID',$this->_CI->session->userdata("characterID"));
            $this->_CI->addViewData('subviewData',array("activeChar" => $this->_CI->characters->getChararcterById($this->_CI->session->userdata("characterID"))));
       }else{
            $this->_CI->addViewData('loggedIn',FALSE);
            $this->_CI->addViewData('subviewData',array());
       }
    }
}
?>
<?php
class Account extends Model
{    
    private $_ID;
    private $_Username;
    private $_email;
    private $_gmLevel;
    private $_loginError = NULL;
    
    public function __construct()
    {
        $this->tableName = "account";
        parent::Model();
    }
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function getUsername()
    {
        return $this->_Username;
    }
    
    public function getEmail()
    {
        return $this->_email;
    }
    
    public function getLastError()
    {
        return $this->_loginError;
    }
    
    public function checkLogin($username,$password)
    {
        $this->db->select('id, username, sha_pass_hash, email')->where('username',strtoupper($username));
        $query = $this->db->get('account');
        if($query->rowCount() > 0){   
            $row = $this->db->fetch($query);
            $submitedHash = strtoupper(SHA1(strtoupper($username.":".$password)));
            if($row->sha_pass_hash === $submitedHash)
            {
                $this->_ID = $row->id;
                $this->_Username = $username;
                $this->_email = $row->email;
            }
            else
            {
                $this->_loginError = 0x02;
            }
        }
        else
        {
            $this->_loginError = 0x01;
        }
        return $this;
    }
    
    public function getUserById($userId)
    {
        $this->db->select('username, email')->where('id',$userId);
        $query = $this->db->get('account');
        if($query->rowCount() > 0){   
            $row = $this->db->fetch($query);
            $this->_ID = $userId;
            $this->_Username = $row->username;
            $this->_email = $row->email;
            return $this;
        }else{
            return FALSE;
        }
    }
    
    public function getUserByUsername($username)
    {
        $this->db->select('id, email')->where('username',$username);
        $query = $this->db->get('account');
        if($query->rowCount() > 0){   
            $row = $this->db->fetch($query);
            $this->_ID = $row->id;
            $this->_Username = $username;
            $this->_email = $row->email;
            return $this;
        }else{
            return FALSE;
        }
    }
    
    public function getGmLevel($id)
    {
        $this->db->select('gmlevel')->where('id',$id);
        $query = $this->db->get('account_access');
        if($query->rowCount() > 0){
            $row = $this->db->fetch($query);
            return $row->gmlevel;
        }else{
            return FALSE;
        }
    }
    
    public function createAccount($username,$password,$email)
    {
        $arguments = $this->db->makeSafe(array($username,$password,$email));
		
        $submitedHash = strtoupper(SHA1(strtoupper($username.":".$password)));
        $result = $this->db->query('INSERT INTO `account` (`username`, `sha_pass_hash`, `email`) VALUES ('.strtoupper($arguments[0]).', "'.$submitedHash.'", '.$arguments[2].')');
        if($result)
        {
            return 0x00;
        }
        else
        {
            $this->db->select('email')->where('email',$email);
            $result = $this->db->get('account');
            if($result->rowCount() > 0)
            {
                return 0x02;
            }
            else
            {
                return 0x01;
            }
        }
    }   
}
?>
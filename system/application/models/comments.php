<?php
class Comment
{
    const TYPE_ARTICLE = 1;
    const TYPE_MEDIA_RESOURCE = 2;
    const TYPE_GAMEGUIDE = 3;
    
    private $_Id;
    private $_CharacterId;
    private $_ObjectId;
    private $_ObjectType;
    private $_Content;
    private $_DatePosted;
    
    public function getID()
    {
        return $this->_Id;
    }
    
    public function setID($id)
    {
        $this->_Id = (int)$id;
        return $this;
    }
    
    public function getCharacterID()
    {
        return $this->_CharacterId;
    }
    
    public function setCharacterID($id)
    {
        $this->_CharacterId = (int)$id;
        return $this;
    }
    
    public function getObjectID()
    {
        return $this->_ObjectId;
    }
    
    public function setObjectID($id)
    {
        $this->_ObjectId = (int)$id;
        return $this;
    }
    
    public function getObjectType()
    {
        return $this->_ObjectType;
    }
    
    public function setObjectType($type)
    {
        $this->_ObjectType = (int)$type;
        return $this;
    }
    
    public function getContent()
    {
        return $this->_Content;
    }
    
    public function setContent($text)
    {
        $this->_Content = (string)$text;
        return $this;
    }
    
    public function getDatePosted()
    {
        return $this->_DatePosted;
    }
    
    public function setDatePosted($date)
    {
        $this->_DatePosted = (string)$date;
        return $this;
    }
}

class Comments extends Model
{
    public function __construct()
    {
        $this->tableName = "website_comments";
        parent::Model();
    }
    
    public function addComment($characterId,$objectId,$objectType,$text)
    {
        $this->db->set("character_id",$characterId);
        $this->db->set("object_id", $objectId);
        $this->db->set("object_type",$objectType);
        $this->db->set("content",$text);
        $result = $this->db->insert('website_comments');
        if($result > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function getComment($objectType, $objectId, $characterId = NULL)
    {
        if($characterId){
            
        }else if($objectId){
            return $this->_getCommentsToObject($objectType,$objectId);
        }
    }
    
    private function _getCommentsToObject($objectType, $objectId)
    {
        $this->db->select('id, character_id, date_posted, content')->where('object_id',$objectId)->where('object_type',$objectType);
        $query = $this->db->get('website_comments');
        if($query->rowCount() > 0)
        {
            $result = array();
            $rows = $this->db->fetchAll($query);
            do{
                $row = $rows->current();
                $comment = new Comment();
                $comment->setID($row->id)
                        ->setCharacterID($row->character_id)
                        ->setObjectID($objectId)
                        ->setObjectType($objectType)
                        ->setContent($row->content)
                        ->setDatePosted($row->date_posted);
                        
                $result[] = $comment;
            }while($rows->next());
            return $result;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function checkForComments($objectType,$objectId)
    {
        $result = $this->db->run("SELECT id FROM `website_comments` WHERE object_id = ? AND object_type = ? ",array((int)$objectId,$objectType));
        return $result->rowCount();
    }
}
?>
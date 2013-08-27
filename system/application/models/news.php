<?php
class Article
{
    private $_ID;
    private $_Title;
    private $_Content;
    private $_Thumbnail;
    private $_Image;
    private $_Date;
    private $_Author;
    private $_Visits;
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function setID($Id)
    {
        $this->_ID = $Id;
        return $this;
    }
    
    public function getTitle()
    {
        return $this->_Title;
    }
    
    public function setTitle($Title)
    {
        $this->_Title = (string)$Title;
        return $this;
    }
    
    public function getContent()
    {
        return $this->_Content;
    }
    
    public function setContent($Content)
    {
        $this->_Content = (string)$Content;
        return $this;
    }
    
    public function getDate()
    {
        return $this->_Date;
    }
    
    public function setDate($Date)
    {
        $this->_Date = (string)$Date;
        return $this;
    }
    
    public function getThumbnail()
    {
        return $this->_Thumbnail;
    }
    
    public function setThumbnail($Thumbnail)
    {
        $this->_Thumbnail = (string)$Thumbnail;
        return $this;
    }
    
    public function getImage()
    {
        return $this->_Image;
    }
    
    public function setImage($path)
    {
        $this->_Image = (string)$path;
        return $this;
    }
    
    public function getAuthor()
    {
        return $this->_Author;
    }
    
    public function setAuthor($author)
    {
        $this->_Author = (string)$author;
        return $this;
    }
    
    public function getVisits()
    {
        return $this->_Visits;
    }
    
    public function setVisits($visits)
    {
        $this->_Visits = (int)$visits;
        return $this;
    }
}

class News extends Model
{
    public function __construct()
    {
        $this->tableName = "website_news";
        parent::Model();
    }
    
    public function fetchAllNews($limit = 8, $offset = 0)
    {
        $this->db->select('id, name, content, thumbnailPath, datePosted, author')->order_by("datePosted","desc")->limit($limit,$offset);
        $query = $this->db->get('website_news');
        $result = array();
        if($query->rowCount() > 0)
        {
            $rows = $this->db->fetchAll($query);
            do
            {
                $row = $rows->current();
                $article = new Article();
                $article->setTitle($row->name)
                        ->setID($row->id)
                        ->setContent($row->content)
                        ->setThumbnail($row->thumbnailPath)
                        ->setDate($row->datePosted)
                        ->setAuthor($row->author);
                        
                $result[] = $article;
            }
            while($rows->next());
        }
        return $result;
    }
    
    public function fetchHottestNews()
    {
        $this->db->select('id, name, thumbnailPath')->order_by("visits","desc")->limit(4);
        $query = $this->db->get('website_news');
        $result = array();
        if($query->rowCount() > 0)
        {
            $rows = $this->db->fetchAll($query);
            do
            {
                $row = $rows->current();
                $article = new Article();
                $article->setTitle($row->name)
                        ->setThumbnail($row->thumbnailPath)
                        ->setID($row->id);
                        
                $result[] = $article;
            }
            while($rows->next());
        }
        return $result;
    }
    
    public function fetchArticleById($id)
    {
        $this->db->select('name, content, imagePath, datePosted, author, visits')->where('id',(int)$id);
        $query = $this->db->get('website_news');
        if($query->rowCount() > 0)
        {
            $row = $this->db->fetch($query);
            $article = new Article();
            $article->setTitle($row->name)
                    ->setID($id)
                    ->setContent($row->content)
                    ->setImage($row->imagePath)
                    ->setDate($row->datePosted)
                    ->setVisits($row->visits)
                    ->setAuthor($row->author);
                    
            return $article;
        }
    }
    
    public function addVisitToArticle($id)
    {
        $result = $this->db->query("UPDATE `website_news` SET visits = visits + 1 WHERE id = ".(int)$this->db->makeSafe($id));
        return $result;
    }
    
    public function deleteArticle($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('website_news');
    }
}
?>
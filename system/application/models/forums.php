<?php
class Category
{
    private $_ID;
    private $_Name;
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function setID($Id)
    {
        $this->_ID = $Id;
        return $this;
    }
    
    public function getName()
    {
        return $this->_Name;
    }
    
    public function setName($Name)
    {
        $this->_Name = (string)$Name;
        return $this;
    }
}

class CForum
{
    private $_ID;
    private $_Name;
	private $_Desc;
    
    public function getID()
    {
        return $this->_ID;
    }
    
    public function setID($Id)
    {
        $this->_ID = $Id;
        return $this;
    }
    
    public function getName()
    {
        return $this->_Name;
    }
    
    public function setName($Name)
    {
        $this->_Name = (string)$Name;
        return $this;
    }
	
	public function getDesc()
	{
		return $this->_Desc;
	}
	
	public function setDesc($Desc)
	{
		$this->_Desc = (string)$Desc;
		return $this;
	}
	
	public function getIcon()
	{
		return $this->_Icon;
	}
	
	public function setIcon($Icon)
	{
		$this->_Icon = (string)$Icon;
		return $this;
	}
}

class Forums extends Model
{
    public function __construct()
    {
        $this->tableName = "website_forum_categories";
        parent::Model();
    }
    
    public function fetchAllCategories()
    {
        $this->db->select('id,name')->order_by("id","asc");
        $query = $this->db->get('website_forum_categories');
        $result = array();
        if($query->rowCount() > 1)
        {
            $rows = $this->db->fetchAll($query);
            do
            {
                $row = $rows->current();
                $category = new Category();
                $category->setName($row->name)
                         ->setID($row->id);
                        
                $result[] = $category;
            }
            while($rows->next());
        }
        else if($query->rowCount() == 1)
        {
            $row = $this->db->fetch($query);
            $category = new Category();
            $category->setName($row->name)
                     ->setID($row->id);
                        
            $result[] = $category;
        }
		else
		{
			$category = new Category();
			$category->setName("error1");
			$category->setID(0);
			$result[] = $category;
		}
        return $result;
    }

	public function fetchAllForums($category)
    {
        $this->db->select('id,name,description,icon')->where('category',(int)$category)->order_by("id","asc");
        $query = $this->db->get('website_forum_forums');
        $result = array();
        if($query->rowCount() > 1)
        {
            $rows = $this->db->fetchAll($query);
            do
            {
                $row = $rows->current();
                $forum = new CForum();
                $forum->setName($row->name)
                        ->setID($row->id)
						->setDesc($row->description)
                        ->setIcon($row->icon);
                $result[] = $forum;
            }
            while($rows->next());
        }
        else if($query->rowCount() == 1)
        {
            $row = $this->db->fetch($query);
            $forum = new CForum();
            $forum->setName($row->name)
                  ->setID($row->id)
                  ->setDesc($row->description)
                  ->setIcon($row->icon);
            $result[] = $forum;
        }else
		{
			$forum = new CForum();
			$forum->setID(0);
			$forum->setDesc('There are no forums into this category');
            $result[] = $forum;
		}
        return $result;
    }
}
?>
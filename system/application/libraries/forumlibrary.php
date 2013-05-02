<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ForumLibrary
{
    private $_CI_Instance;
    private $_Buffer;
    
    public function __construct()
    {
        $this->_CI_Instance =& get_instance();
    }
    
    private function getCI()
    {
        return $this->_CI_Instance;
    }
    
    public function getBuffer()
    {
        return $this->_Buffer;
    }
	
    public function fetchForums()
    {
        $this->getCI()->load->model('forums');
        ob_start();
        foreach($this->getCI()->forums->fetchAllCategories() as $category)
        {
			if($category->getID() == 0) echo '<center><br /><br /><div class="coc" style="border:1px solid #71401F;">There are no forums</div></center>';
			else
			{
				echo '<a id="#" href="javascript:;" data-toggle="collapse" data-target="#child'.$category->getID().'" onclick="" class="forum-parent">'.$category->getName().'</a>';
				echo '<div class="child-forums in" id="child'.$category->getID().'" style="display: block;"><div class="forums-list">';
				
				foreach($this->getCI()->forums->fetchAllForums($category->getID()) as $forum)
				{
					if($forum->getID() == 0)
					{
						echo $forum->getDesc();
					}else{
						echo
						'<a href="#" class="forum-link">
							<span class="forum-icon">
									<img src="'.base_url().'assets/images/forum/icons/'.$forum->getIcon().'" alt="" />
							</span>

							<span class="int">
								<span class="int-padding">
									'.$forum->getName().'
									<span class="desc">'.$forum->getDesc().'</span>
								</span>
							</span>
						</a>';
					}
				}
				echo '</div></div>';
			}
        }
        $this->_Buffer = '';
        $this->_Buffer = ob_get_contents();
        ob_end_clean();
        return $this;
    }
    
    public function fetchHottestNews()
    {
        ob_start();
        $this->getCI()->load->model('news');
        foreach($this->getCI()->news->fetchHottestNews() as $article)
        {
            echo '<li>
                    <a href="index.php/index/viewarticle/'.$article->getID().'">
                        <img src="" alt="" style="background-image: url('.$article->getThumbnail().');" />
                        <span>'.$article->getTitle().'</span>
                    </a>
                  </li>';
        }
        $this->_Buffer = '';
        $this->_Buffer = ob_get_contents();
        ob_end_clean();
        return $this;
    }
    
    public function fetchArticlesAdmin($page)
    {
        $this->getCI()->load->model('news');
        ob_start();
        $this->_appendHeader();
        $this->_appendFooter($page);
        echo '<tbody>';
        foreach($this->getCI()->news->fetchAllNews(8,(($page - 1)* 8)) as $article)
        {
            echo '<tr><td><input type="checkbox" /></td>
				                    <td><a href="#" title="title">'.$article->getTitle().'</a></td>
                                    <td>'.$article->getAuthor().'</td>
                                    <td>'.$article->getContent().'</td>
                                    <td>'.$article->getThumbnail().'</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="'.base_url().'/assets/admin/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="'.base_url().'/assets/admin/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="'.base_url().'/assets/admin/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>';
        }
        echo '</tbody></table>';
        $this->_Buffer = '';
        $this->_Buffer = ob_get_contents();
        ob_end_clean();
        return $this;      
    }
    
    private function _appendHeader()
    {
        echo '<table><thead><tr><th><input class="check-all" type="checkbox" /></th><th>Title</th><th>Author</th><th>Content</th><th>Thubmnail</th><th>Date</th></tr></thead>';
    }
    
    private function _appendFooter($activePage)
    {
        define("NUM_PAGES_DISPLAY",4);
        echo '<tfoot><tr><td colspan="6"><div class="bulk-actions align-left"><select name="dropdown"><option value="option1">Choose an action...</option><option value="option2">Edit</option><option value="option3">Delete</option></select><a class="button" href="#">Apply to selected</a></div>	<div class="pagination"><a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>';
        if($activePage > 3){
            $offset = $activePage - 3;
        }else{
            define("NUM_PAGES_BEFORE",$activePage - 1);
            $offset = 0;
        }
        for($i = 0; $i < NUM_PAGES_DISPLAY; $i++)
        {
            if(defined("NUM_PAGES_BEFORE")){
                if($i == $activePage - 1){
                    echo '<a href="#" class="number current" title="'.($i+ 1).'">'.($i+ 1).'</a>';
                }else{
                    echo '<a href="#" class="number" title="'.($i+ 1).'">'.($i+ 1).'</a>';
                }
            }else{
                if($i == ($offset + 3)){
                    echo '<a href="#" class="number current" title="'.($i+ 1).'">'.($i+ 1).'</a>';
                }else{
                    echo '<a href="#" class="number" title="'.($i+ 1).'">'.($i+ 1).'</a>';
                }
            }
        }
        echo '<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a></div> <!-- End .pagination --><div class="clear"></div></td></tr></tfoot>';
    }
}

?>
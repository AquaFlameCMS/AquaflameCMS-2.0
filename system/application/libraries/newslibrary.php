<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewsLibrary
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
    
	private function _getTimeAgo($date)
	{
		//The elapsed amount of time in seconds (integers only please!)
		$elapsed = time() - strtotime($date);
		//Is there any real difference?
		if ($elapsed < 1) { return '0 seconds'; }
		//Setup an array of all possible time differences to check against
		$times = array (
			12 * 30 * 24 * 60 * 60  =>  'year',
			30 * 24 * 60 * 60       =>  'month',
			07 * 24 * 60 * 60       =>  'week',
			24 * 60 * 60            =>  'day',
			60 * 60                 =>  'hour',
			60                      =>  'minute',
			1                       =>  'second' );
		//Setup a return string
		$returned = '';
		//Loop through all of the time "constants"
		$i = 0;
		foreach ($times AS $seconds => $string)
		{
			if($i <= 2)
			{
				$difference = floor($elapsed / $seconds);
				if ($difference >= 1)
				{
					$i++;
					$returned .= " $difference $string" . ($difference > 1 ? 's' : '') . ',';
					$elapsed -= $difference * $seconds;
				}
			}
		}
		//Strip the first space and final comma from the string before returning it
		return substr($returned, 1, -1) . ' ago';
	}
	
    public function fetchLatestNews($maxArticles = 5)
    {
        $this->getCI()->load->model('news');
        ob_start();
        foreach($this->getCI()->news->fetchAllNews($maxArticles) as $article)
        {
		
			if(strlen($article->getContent()) > 200) 
                $text = substr($article->getContent(), 0, 390)."...";
			else 
                $text = $article->getContent();
		
            echo '<article>
                	<header>
                    	<h1><a href="'.base_url().'index.php/index/viewarticle/'.$article->getID().'">'.$article->getTitle().'</a></h1>
                        <p class="meta">by <a href="">'.$article->getAuthor().'</a> '.$this->_getTimeAgo($article->getDate()).' <a href="">0</a> <img src="'.base_url().'/assets/images/content-comments.png" alt="Comments" /></p>
                    </header>
                    <div class="content">
                    	<div class="thumb">
                        	<a href="'.base_url().'index.php/index/viewarticle/'.$article->getID().'"><img src="'.$article->getThumbnail().'" alt="" /></a>
                        </div>
                    	<p>'.$text.'</p>
						<div align="right"><a href="'.base_url().'index.php/index/viewarticle/'.$article->getID().'" class="login-btn">Read More</a></div>
                    </div>
                    <footer><!-- --></footer>
                </article>';
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
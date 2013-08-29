<?php
class Index extends Controller 
{	
    public function __construct()
    {
        parent::Controller();
        $this->addViewData("sidepanel","sidebars/main");
    }
    
	public function index()
	{
        $this->load->library('newslibrary');
        $this->_viewData['subview'] = "partitials/home";
        $latestNews = $this->newslibrary->fetchLatestNews();
        $this->_viewData['news'] = $latestNews->getBuffer();
        $hottestNews = $this->newslibrary->fetchHottestNews();
        $this->_viewData['hottest'] = $hottestNews->getBuffer();
        $this->load->view('layouts/main',$this->_viewData);
	}
    
    public function viewArticle($id)
    {
        $this->load->model('news');
        $this->load->model('comments');
        $this->load->model('characters');
        $id = (int)$id;
        if($id > 0)
        {
            $subviewData = $this->_viewData['subviewData'];
            $subviewData['article'] = $this->news->fetchArticleById($id);
            if($this->comments->checkForComments(Comment::TYPE_ARTICLE,$id) > 0){
                $charactersContainer = array();
                $subviewData['hasComments'] = TRUE;
                $subviewData['comments'] = $this->comments->getComment(Comment::TYPE_ARTICLE,$id);
                foreach($subviewData['comments'] as $comment)
                {
                    $charactersContainer[$comment->getCharacterID()] = $this->characters->getChararcterById($comment->getCharacterID());
                }
                $subviewData['characters'] = array_unique($charactersContainer);
            }else{
                $subviewData['hasComments'] = FALSE;
            }
            $this->_viewData['subviewData'] = $subviewData;
            $this->news->addVisitToArticle($id);
            $this->_viewData['subview'] = "partitials/article";
            $this->load->view('layouts/main',$this->_viewData);
        }
    }
}

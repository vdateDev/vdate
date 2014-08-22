<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_News extends Controller_Frontend {
    
    public $template = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            
        }   
    }
    
    public function action_index() {

                
        $limit = Kohana::$config->load('news')->get('frontend_per_page');
        
        $total = Model_News::count_by_status(1);
        
        $pagination = Pagination::factory(array(
            'items_per_page'    => $limit,
            'total_items'       => $total,
        ));
        
        $news = Model_News::get_news_frontend($this->language, $limit, $pagination->offset);

        $this->template->content = View::factory('frontend/news/index')
                                    ->bind('limit', $limit)
                                    ->bind('pagination', $pagination)
                                    ->bind('language', $this->language)
                                    ->bind('news', $news);
    }
    
    public function action_show() {
        
        $capthca_arr=array();
        $errors_review=array();
        
        $url = $this->request->param('url');
        
        $news = Model_News::get_one($url, $this->language);
        
        if (!$news->loaded()) {
            
            throw new HTTP_Exception_404;
        
        }
        
        if ($this->request->method()==HTTP_Request::POST) {
            $post=$this->request->post();
            
            $captcha=Arr::get($post, 'captcha');
            
            $review_validate=$news->reviews->validate($post);
            $check_review=$review_validate->check();
            
            $captcha_validate=  Captcha::valid($captcha);
            
            if (!$captcha_validate) {
                $captcha_arr['captcha'] = __('wrong_captcha_number');
            }
            
            if ($check_review AND empty($captcha_arr)) {
                $news->reviews->add_review($news->id,$post);
                                  
              //  $this->set_site_message('after_add_comment_news');
                    
                $this->redirect(strtolower(Route::url('news_show', array('language'=>$this->language ,'url'=>$url))));
                    
             } else  {
                
                 $errors_review = $review_validate->errors('validation');
 
             }
        }
        
        $this->page_name = $news->name;
        
        $this->page_title = $news->page_title;
        $this->page_description = $news->page_description;
        $this->page_keywords = $news->page_keywords;
        
        $reviews=  Model_Reviews::get_reviews_by_news($news->id, 1);
        $captcha=  Captcha::instance();

        $this->template->content = View::factory('frontend/news/show')
                                    ->bind('language', $this->language)
                                    ->bind('news', $news)
                                    ->bind('reviews', $reviews)
                                    ->bind('data',$post)
                                    ->bind('captcha', $captcha)
                                    ->bind('errors',$errors_review);
    }
}
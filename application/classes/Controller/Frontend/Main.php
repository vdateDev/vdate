<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Main extends Controller_Frontend {
    
    public $template   = 'frontend/layoutMain';
    public $pagesModel = NULL;
    
    public function before() {
        
        parent::before();
        
        $this->widgets['Slider']             = Widget::load('SliderMainPage');
        $this->widgets['OnlineInMainPage']   = Widget::load('Chat_OnlineInMainPage');
        $this->widgets['FreeVideoChat']      = Widget::load('Chat_FreeVideoChat');
        $this->widgets['NewGirlsOnMainPage'] = Widget::load('Girls_NewGirlsOnMainPage');
        if (!$this->auth->logged_in()) {
            $this->widgets['JoinForFreeMainPage']= Widget::load('JoinForFreeMainPage');
        }
        
        $page = Model_Page::get_page_by_url('main', $this->language);
        
        $this->page_title = $page->page_title;
        $this->page_description = $page->page_description;
        $this->page_keywords = $page->page_keywords;
        $this->page_name = $page->page_h1;
        
    }

    public function action_index() {     
      
        
    }
    
    public function action_captcha_check() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $num = Arr::get($post, 'num');
            
            $valid = Captcha::valid($num);
            
            $this->ajax = json_encode(array('success' => $valid ? TRUE : FALSE));
        }
    }   
}
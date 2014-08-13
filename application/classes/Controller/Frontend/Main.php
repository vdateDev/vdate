<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Main extends Controller_Frontend {
    
    public $template   = 'frontend/layoutMain';
    public $pagesModel = NULL;
    
    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');        
        $this->pagesModel = Model::factory('Pages');
    }

    public function action_index() {     
      
       $pages = $this->pagesModel->getPages();
       
       /*foreach($pages as $page) {
           echo $page->name;
       }
       /* $this->template->content = View::factory('frontend/main/index')                                    
                                    ->bind('content', $content);*/
        
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
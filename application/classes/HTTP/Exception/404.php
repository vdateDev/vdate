<?php defined('SYSPATH') OR die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
    
    public function get_response()
    {
        $widgets = array();
        
        $langauge = Request::initial()->param('language');
        $session = Session::instance();
        
        I18n::lang($langauge.'-'.$langauge);
        
        $page = Model_Page::get_page_by_url('404', $langauge);
        
        $settings = Kohana::$config->load('site');
        
        $widgets['HeadMenu'] = Widget::load('HeadMenu');
        $widgets['BottomBanners'] = Widget::load('BottomBanners');
        $widgets['TopHead'] = Widget::load('TopHead');
        $widgets['RightBlock'] = Widget::load('RightBlock');        
        $widgets['EnterBlock'] = Widget::load('EnterBlock');
        
        $footer = View::factory('frontend/templates/footer', array('session' => $session))  
                                            ->bind('language', $this->language)                                            
                                            ->bind('settings', $this->settings);
        
        if ($page->loaded()) {
        
            $page_title = $page->page_title;
            $page_description = $page->page_description;
            $page_keywords = $page->page_keywords;
            $page_name = $page->name;
            
            $content = $page->text;
        }
        
        $view = View::factory('frontend/errors/404')
                    ->bind('widgets', $widgets)
                    ->bind('page_title', $page_title)
                    ->bind('page_description', $page_description)
                    ->bind('page_keywords', $page_keywords)
                    ->bind('page_name', $page_name)
                    ->bind('content', $content)
                    ->bind('footer', $footer);
 
        // Remembering that `$this` is an instance of HTTP_Exception_404
        $view->message = $this->getMessage();
        
        $response = Response::factory()
            ->status(404)
            ->body($view->render());
 
        return $response;
    }
}

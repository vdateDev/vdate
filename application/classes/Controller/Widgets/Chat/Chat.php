<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Chat_Chat extends Controller_Widgets {
        
    public $template = 'widgets/Chat/Chat';

    public function action_index() {
        
      /*  $pages = ORM::factory('Pages')->getPages();
        
        $this->template->bind('pages', $pages)
                       ->bind('language', $this->language);*/
    }
    
    public function action_onlineInMainPage() {
      die;
        $this->template = 'widgets/Chat/onlineInMainPage';
      /*  $pages = ORM::factory('Pages')->getPages();
        
        $this->template->bind('pages', $pages)
                       ->bind('language', $this->language);*/
    }
}
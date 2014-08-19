<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Auth extends Controller_Widgets {
        
    public $template = 'widgets/Auth';

    public function action_index() {
        
      /*  $pages = ORM::factory('Pages')->getPages();
        
        $this->template->bind('pages', $pages)
                       ->bind('language', $this->language);*/
    }
}
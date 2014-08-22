<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu_BottomMenu extends Controller_Widgets {
        
    public $template = 'widgets/Menu/BottomMenu';

    public function action_index() {
        
        $pages = ORM::factory('Pages')->getPagesBottom($this->language);
        
        $this->template->bind('pages', $pages)
                       ->bind('language', $this->language);
        
    }
}
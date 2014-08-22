<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu_LeftProfileMenu extends Controller_Widgets {
        
    public $template = 'widgets/Menu/LeftProfileMenu';

    public function action_index() {
        
        $controller = strtolower(Request::initial()->controller());
        $action = strtolower(Request::initial()->action());
        
        $this->template->bind('role', $this->user_role)
                       ->bind('language', $this->language)
                       ->bind('controller',$controller)
                       ->bind('action',$action);
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu_MainMenu extends Controller_Widgets {
        
    public $template = 'widgets/Menu/MainMenu';

    public function action_index() {
        
        $controller = strtolower(Request::initial()->controller());
        $action = strtolower(Request::initial()->action());
        
        $this->template->bind('language', $this->language)
                       ->bind('controller',$controller)
                       ->bind('action',$action);

      
  
    }
}
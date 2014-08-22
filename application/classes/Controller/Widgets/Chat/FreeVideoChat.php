<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Chat_FreeVideoChat extends Controller_Widgets {
        
    public $template = 'widgets/Chat/FreeVideoChat';

    public function action_index() {
        
        
        $this->template->bind('language', $this->language);
    }
    
}
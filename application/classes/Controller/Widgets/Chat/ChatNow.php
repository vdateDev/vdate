<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Chat_ChatNow extends Controller_Widgets {
        
    public $template = 'widgets/Chat/ChatNow';

    public function action_index() {
        
        
        $this->template->bind('language', $this->language)
                       ->bind('user_role',$this->user_role);
    }
}
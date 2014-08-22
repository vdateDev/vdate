<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_JoinForFreeMainPage extends Controller_Widgets {
        
    public $template = 'widgets/JoinForFreeMainPage';

    public function action_index() {
        
        $this->template->bind('language', $this->language);
    }
}
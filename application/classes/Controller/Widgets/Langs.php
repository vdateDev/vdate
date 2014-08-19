<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Langs extends Controller_Widgets {
        
    public $template = 'widgets/Langs';

    public function action_index() {
         
        $langsModel = ORM::factory('Language');
        $langs      = $langsModel->get_languages();
      
        
        $this->template->bind('langs', $langs)
                       ->bind('language', $this->language);
    }
}
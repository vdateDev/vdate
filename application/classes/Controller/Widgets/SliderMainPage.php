<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_SliderMainPage extends Controller_Widgets {
        
    public $template = 'widgets/SliderMainPage';

    public function action_index() {
        
        $slides=  Model_SlideShow::get_frontend_slides($this->language);
      
        
        $this->template->bind('slides', $slides)
                       ->bind('language', $this->language);
    }
}
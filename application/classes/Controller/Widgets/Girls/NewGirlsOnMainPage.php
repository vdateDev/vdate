<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Girls_NewGirlsOnMainPage extends Controller_Widgets {
        
    public $template = 'widgets/Girls/NewGirlsOnMainPage';

    public function action_index() {
        
        $limit = Kohana::$config->load('girls')->get('count_new_girls_on_main_page');
        $new_time_diff = Kohana::$config->load('girls')->get('new_time_diff');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$new_time_diff;
        $time_online=time()-$online_time_diff;
        $girls=  Model_Girls::get_new_girls($time, $time_online, $limit);
        
        
        $this->template->bind('girls', $girls)
                       ->bind('language', $this->language);
    }
}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Chat_OnlineInMainPage extends Controller_Widgets {
        
    public $template = 'widgets/Chat/OnlineInMainPage';

    public function action_index() {
        
        $limit = Kohana::$config->load('girls')->get('count_girls_chat_on_main_page');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        
        $girls=  Model_Girls::get_online($time,$limit*6);
        $cnt_all=count($girls);
        $cnt_in_slider=ceil(count($girls)/6);
        if ($cnt_in_slider<1) $cnt_in_slider=1;
        
        $this->template->bind('girls',$girls)
                       ->bind('cnt_in_slider',$cnt_in_slider)
                       ->bind('cnt_all',$cnt_all);
        
    }
    
}
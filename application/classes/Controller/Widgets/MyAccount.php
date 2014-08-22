<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_MyAccount extends Controller_Widgets {
        
    public $template = 'widgets/MyAccount';

    public function action_index() {
        
       if ($this->user_role->name=='girls') {
           
         $avatar=Model_Photos::get_def_photo_user($this->user->id);
         
       }  
       
       
        $this->template->bind('language', $this->language)
                       ->bind('role',$this->user_role)
                       ->bind('user',$this->user)
                       ->bind('avatar',$avatar);
    }
}
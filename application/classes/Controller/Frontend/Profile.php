<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Profile extends Controller_Frontend {
    
    public $template   = 'frontend/layoutProfile';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            
        }     
    }
    
    public function action_girl() {
        

        $id=$this->request->param('id');

        $girl=  Model_Girls::get_girl_frontend($id);
        $age= floor((time()-$girl->birthday)/(60*60*24*365.25));
        $def_photo =  Model_Photos::get_def_photo_user($id);
        $photos = Model_Photos::get_photos_by_user($id);
        
        $sprav=  Model_Sprav::get_sprav_frontend($this->language);
        $sprav=$sprav->as_array('id');
                
        $this->template->content = View::factory('frontend/profile/girl')  
                                    ->bind('lang',$this->language)
                                    ->bind('girl', $girl)
                                    ->bind('photos', $photos)
                                    ->bind('def_photo',$def_photo)
                                    ->bind('age',$age)
                                    ->bind('sprav', $sprav);
    }
    
    public function action_man() {
        
        $id=$this->request->param('id');

        $man=  Model_Men::get_man_frontend($id);
        $age= floor((time()-$man->birthday)/(60*60*24*365.25));
        $def_photo =  Model_Photos::get_def_photo_user($id);
        $photos = Model_Photos::get_photos_by_user($id);
        
        $sprav=  Model_Sprav::get_sprav_frontend($this->language);
        $sprav=$sprav->as_array('id');
                
        $this->template->content = View::factory('frontend/profile/man')  
                                    ->bind('lang',$this->language)
                                    ->bind('man', $man)
                                    ->bind('def_photo',$def_photo)
                                    ->bind('photos', $photos)
                                    ->bind('age',$age)
                                    ->bind('sprav', $sprav);
        
    }
    
    public function action_addToFavorite() {
        
        
        
    }
    
}


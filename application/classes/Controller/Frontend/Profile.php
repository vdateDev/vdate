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
                                    ->bind('language',$this->language)
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
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id_favorit = Arr::get($post, 'id');

            $favorite=ORM::factory('Favorites');
            
            if (!$favorite->is_favorite($id_favorit,$this->user->id)) {
            
                $favorite->add_favorit($this->user->id,$id_favorit);
                if ($this->user_role->name=="man") 
                {
                    $href=strtolower(Route::url('default',array('language'=>$this->language,'controller'=>'manaccount', 'action'=> 'myfavorites', 'id'=>$id_favorit)));
                } else {
                    $href=strtolower(Route::url('default',array('language'=>$this->language,'controller'=>'girlaccount', 'action'=> 'myfavorites', 'id'=>$id_favorit)));
                }

                $this->ajax = json_encode(array('success' => TRUE,'href'=>$href));
            
            } else {
                $message=Model_Info::get_info_by_key('user_in_favorites', $this->language)->as_array();
                $this->ajax = json_encode(array('success' => FALSE, 'message'=>$message));
                
            }
            
        }
        
    }
    
}


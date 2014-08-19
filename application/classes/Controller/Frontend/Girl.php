<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Girl extends Controller_Frontend {
    
    public $template   = 'frontend/layoutProfile';
    
    public function before() {
        
        parent::before();
        
        $this->widgets['MainMenu'] = Widget::load('MainMenu');        
    }
    
    public function action_profile() {
        
        
        $groups=  Model_GiftGroups::get_groups_frontend_by_parent($this->language,0);
        $id=$this->request->param('id');

        $girl=  Model_Girls::get_girl_frontend($id);
        $age=floor((time()-$girl->birthday)/(60*60*24*365.25));
        $def_photo =  Model_Photos::get_def_photo_user($id);
        $photos = Model_Photos::get_photos_by_user($id);
        
        $sprav=  Model_Sprav::get_sprav_frontend($this->language);
        $sprav=$sprav->as_array('id');
        
        $weight_ibs=  Model_Weight::kg_to_ibs($girl->weight_zna);
        $height_feet = Model_Height::cm_to_feet($girl->height_zna);
                
        $this->template->content = View::factory('frontend/girl/profile')  
                                    ->bind('lang',$this->language)
                                    ->bind('girl', $girl)
                                    ->bind('def_photo',$def_photo)
                                    ->bind('photos', $photos)
                                    ->bind('age',$age)
                                    ->bind('sprav', $sprav)
                                    ->bind('weight_ibs', $weight_ibs)
                                    ->bind('height_feet',$height_feet);
    }
    
}


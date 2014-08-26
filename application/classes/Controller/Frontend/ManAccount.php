<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_ManAccount extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            $this->widgets['LeftProfileMenu']=Widget::load('Menu_LeftProfileMenu');
            
        }
    }
    
    public function action_index() {
        
    }
    
    public function action_settings() {
        
        if ($this->request->method()== HTTP_Request::POST)    {
            
            $post=$this->request->post();
            
            if (isset($post['pass'])) {
            
                $old_password = Arr::get($post, 'old_password');
                $password = Arr::get($post, 'password');
                $password_confirm = Arr::get($post, 'password_confirm');

                $old_hash = $this->auth->hash_password($old_password);

                if ($old_hash == $this->user->password) { 

                    if ($password==$password_confirm and $password!='')  {

                        $this->user->update_user($post, array('password'));

                        $this->set_site_message('success_password_change');


                    } else {

                         $this->set_site_message('new_password_error');

                    }

                 } else {

                     $this->set_site_message('old_password_error');

                 }
             
            } else if (isset($post['profile']))
            {
                try{
                $post['status']=$this->user->status;
                $post['role']=5;
                $this->user->edit_user($post);
                $this->user->men->edit_man($post);
                $this->set_site_message('data_saved');
                } catch (ORM_Validation_Exception $e) {
                      $errors = $e->errors();
                 }
            }
            $this->redirect(strtolower(Route::url('default', array('language' => $this->language, 'controller' => 'manaccount', 'action' => 'settings'))));

            
        }
        
        $eyes=Model_Sprav::get_list_by_category('eyes', $this->language);
        $hair=Model_Sprav::get_list_by_category('hair', $this->language);
        $education=Model_Sprav::get_list_by_category('education', $this->language);
        $religion=Model_Sprav::get_list_by_category('religion', $this->language);
        $marital_status=Model_Sprav::get_list_by_category('marital', $this->language,2);
        $smoking=Model_Sprav::get_list_by_category('smoking', $this->language);
        $drinking=Model_Sprav::get_list_by_category('drinking', $this->language);
        $height=  Model_Height::get_height_frontend();
        $weight=  Model_Weight::get_weight_frontend();
        $country=array();
        $region=array();
        
        $this->template->content= View::factory('frontend/manaccount/settings')
                                ->bind('user',$this->user)
                                ->bind('man',$this->user->men)
                                ->bind('language',$this->language)
                                ->bind('eyes',$eyes)
                                ->bind('hair',$hair)
                                ->bind('education',$education)
                                ->bind('religion',$religion)
                                ->bind('marital_status',$marital_status)
                                ->bind('smoking',$smoking)
                                ->bind('drinking',$drinking)
                                ->bind('height',$height)
                                ->bind('weight',$weight)
                                ->bind('country',$country)
                                ->bind('region',$region);
        
        
    }
    
    public function action_womenOnline () {
        
        $limit = Kohana::$config->load('girls')->get('frontend_per_page');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'frontend/pagination/floating',
            'total_items' => Model_Girls::count_girl_online($time),
        ))->route_params(array(
            'language' => $this->language,
            'controller' => $this->controller,   
            'action' => $this->action,
        ));
        
        $get=$this->request->query();
        
        if (isset($get['sort'])) {
            
            $sort=$get['sort'];
            
        } else {
            $sort='activity';
        }
        
        $girls=  Model_Girls::get_online($time, $limit,$sort,$pagination->offset);
        
         $this->template->content= View::factory('frontend/manaccount/womenonline')
                                ->bind('language',$this->language)
                                ->bind('girls',$girls)
                                ->bind('pagination',$pagination)
                                ->bind('sort',$sort);
        
    }
    
    public function action_myFavorites() {
        
        if ($this->request->method()==HTTP_Request::POST) {
             
             $post=$this->request->post();
             
             if (isset($post['DeleteItem'])) {
                 foreach ($post['DeleteItem'] as $key=>$val) {
                     $favorite=ORM::factory('Favorites',$key);
                     $favorite->delete();
                 }
                 
                 $this->set_site_message('delete_girl_from_favorites');
                 $this->redirect(Route::url('default', array('language'=>$this->language,'controller'=>'manaccount','action'=>'myfavorites')));
             }
         }
        
        $limit = Kohana::$config->load('girls')->get('frontend_per_page');
        $count=Model_Favorites::count_favorites($this->user->id);
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'frontend/pagination/floating',
            'total_items' => $count,
        ))->route_params(array(
            'language' => $this->language,
            'controller' => $this->controller,   
            'action' => $this->action,
        ));
        
        $get=$this->request->query();
        
        if (isset($get['sort'])) {
            
            $sort=$get['sort'];
            
        } else {
            $sort='last';
        }
        
        
        $girls=  Model_Favorites::get_man_favorites($this->user->id, $limit, $sort, $pagination->offset);
        
        $id=$this->request->param('id');
        if ($id>0) {
            $new=  Model_Girls::get_girl_frontend($id);
        }
        
        $this->template->content= View::factory('frontend/manaccount/myfavorites')
                       ->bind('language',$this->language)
                       ->bind('girls',$girls)
                       ->bind('pagination',$pagination)
                       ->bind('sort',$sort)
                       ->bind('count',$count)
                       ->bind('new',$new);
        
    }
    
    public function action_delfavorite() {
        
        $id=$this->request->param('id');
        
        $favorite=ORM::factory('Favorites',$id);
        $favorite->delete();
        
        $this->set_site_message('delete_girl_from_favorites');
        
        $this->redirect(Route::url('default',array('language'=>$this->language,'controller'=>'manaccount','action'=>'myfavorites')));
        
    }
    
}
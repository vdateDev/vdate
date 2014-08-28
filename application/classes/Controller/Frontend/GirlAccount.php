<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_GirlAccount extends Controller_Frontend {
    
    public $template   = 'frontend/layout';
    
    public function before() {
        
        parent::before();
        
        if ($this->auth->logged_in()) {
            
            $this->widgets['ChatNow']=Widget::load('Chat_ChatNow');
            $this->widgets['LeftProfileMenu']=Widget::load('Menu_LeftProfileMenu');
            
        }
    }
    
    public function action_index() {
        
            $attention=  Model_Page::get_page_by_url('attention-for-girl-account', $this->language);
            $cnt_favorites=  Model_Favorites::count_favorites($this->user->id);
            $cnt_admires = Model_Favorites::count_admires($this->user->id);
            $cnt_new_admires=  Model_Favorites::count_new_admires($this->user->id);
            $cnt_matches=  Model_Favorites::count_matches($this->user->id);
            $cnt_virtual_gifts=  Model_OrderVirtualGifts::cnt_gifts_by_user($this->user->id);
            $cnt_new_virtual_gifts= Model_OrderVirtualGifts::cnt_gifts_by_user($this->user->id,0);;
            
        
            $this->template->content= View::factory('frontend/girlaccount/profile')
                               ->bind('user',$this->user)
                               ->bind('attention',$attention)
                               ->bind('language',$this->language)
                               ->bind('cnt_favorites', $cnt_favorites)
                               ->bind('cnt_admires',$cnt_admires)
                               ->bind('cnt_new_admires',$cnt_new_admires)
                               ->bind('cnt_matches',$cnt_matches)
                               ->bind('cnt_virtual_gifts',$cnt_virtual_gifts)
                               ->bind('cnt_new_virtual_gifts',$cnt_new_virtual_gifts);
        
    }
    
    public function action_settings() {
        
        if ($this->request->method()== HTTP_Request::POST)    {
            
            $post=$this->request->post();
            
            $old_password = Arr::get($post, 'old_password');
            $password = Arr::get($post, 'password');
            $password_confirm = Arr::get($post, 'password_confirm');
            
            $old_hash = $this->auth->hash_password($old_password);
            
            if ($old_hash == $this->user->password) { 
                 
                if ($password==$password_confirm and $password!='')  {
                    
                    $this->user->update_user($post, array('password'));
                    
                    $this->set_site_message('success_password_change');
                    
                    $this->redirect(strtolower(Route::url('default', array('language' => $this->language, 'controller' => 'girlaccount', 'action' => 'settings'))));
                    
                } else {
                    
                     $this->set_site_message('new_password_error');
                     
                }
                
             } else {
                 
                 $this->set_site_message('old_password_error');
                 
             }

            
        }
        
        $this->template->content= View::factory('frontend/girlaccount/settings')
                                ->bind('language',$this->language);
        
        
    }
    
    public function action_menOnline () {
        
        $limit = Kohana::$config->load('men')->get('frontend_per_page');
        $online_time_diff = Kohana::$config->load('users')->get('online_diff_time');
        $time=time()-$online_time_diff;
        
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'frontend/pagination/floating',
            'total_items' => Model_Men::count_men_online($time),
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
        
        $men=  Model_Men::get_online($time, $limit,$sort,$pagination->offset);
        
         $this->template->content= View::factory('frontend/girlaccount/manonline')
                                ->bind('language',$this->language)
                                ->bind('men',$men)
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
                 
                 $this->set_site_message('delete_man_from_favorites');
             }
         }
        
        $limit = Kohana::$config->load('men')->get('frontend_per_page');
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
        
        
        $men=  Model_Favorites::get_girl_favorites($this->user->id, $limit, $sort, $pagination->offset);
        
        $id=$this->request->param('id');
        if ($id>0) {
            $new=  Model_Men::get_man_frontend($id);
        }
        
        $this->template->content= View::factory('frontend/girlaccount/myfavorites')
                       ->bind('language',$this->language)
                       ->bind('men',$men)
                       ->bind('pagination',$pagination)
                       ->bind('sort',$sort)
                       ->bind('count',$count)
                       ->bind('new',$new);
        
    }
    
    public function action_delfavorite() {
        
        $id=$this->request->param('id');
        
        $favorite=ORM::factory('Favorites',$id);
        $favorite->delete();
        
        $this->set_site_message('delete_man_from_favorites');
        
        $this->redirect(Route::url('default',array('language'=>$this->language,'controller'=>'girlaccount','action'=>'myfavorites')));
        
    }
    
    public function action_myAdmires() {
        
        Model_Favorites::upadte_new($this->user->id);
        $limit = Kohana::$config->load('men')->get('frontend_per_page');
        $count=Model_Favorites::count_admires($this->user->id);
        
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
        
        
        $men=  Model_Favorites::get_girl_admires($this->user->id, $limit, $sort, $pagination->offset);
        
        $this->template->content= View::factory('frontend/girlaccount/myadmires')
                       ->bind('language',$this->language)
                       ->bind('men',$men)
                       ->bind('pagination',$pagination)
                       ->bind('sort',$sort)
                       ->bind('count',$count);
        
    }
    
    public function action_myMatches() {
        
        $limit = Kohana::$config->load('men')->get('frontend_per_page');
        $count=Model_Favorites::count_matches($this->user->id);
        
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
        
        
        $men=  Model_Favorites::get_girl_matches($this->user->id, $limit, $sort, $pagination->offset);
        
        $this->template->content= View::factory('frontend/girlaccount/mymatches')
                       ->bind('language',$this->language)
                       ->bind('men',$men)
                       ->bind('pagination',$pagination)
                       ->bind('sort',$sort)
                       ->bind('count',$count);
        
    }
    
    public function action_myVirtualGifts() {
        
        Model_OrderVirtualGifts::update_status($this->user->id);
        
    }
    
  
    
}
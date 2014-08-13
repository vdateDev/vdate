<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Sprav extends Controller_Backend {
    
    public function action_index() {
  
        $category=$this->request->param('category');
        $data =Model_Sprav::get_sprav_backend($category);
        $this->template->content = View::factory('backend/sprav/'.$category.'/index')
                                        ->set('data', $data)
                                        ->set('category', $category);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $sprav = Model::factory('Sprav');
        
        $category=$this->request->param('category');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $sprav->add_sprav($post, $languages, $category);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect_sprav($post, $sprav->id);
        }
        
        $this->template->content = View::factory('backend/sprav/'.$category.'/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
         
        
    }
    
    public function action_edit() {
       
        $id = $this->request->param('id');
        $category = $this->request->param('category');

        $sprav = ORM::factory('Sprav', $id);
        
        if (!$sprav->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'sprav','category'=>$category, 'action'=>'index'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $sprav->edit_sprav($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect_sprav($post, $sprav->id);
        }
        
        $tmp_sprav = $sprav->as_array();
        $sprav_languages = $sprav->languages->find_all();
        
        $tmp = array();
        foreach($sprav_languages AS $sprav_lang) {
            
            $tmp[$sprav_lang->language] = $sprav_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_sprav);
        
        $this->template->content = View::factory('backend/sprav/'.$category.'/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $groups = ORM::factory('Sprav', $id);
        
        if ($groups->loaded()) {
            
            $groups->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend_sprav', array('controller' => 'Sprav','category'=>$this->request->param('category'), 'action'=>'index'))));
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $groups = ORM::factory('Sprav', $id);
                
                if ($groups->loaded()) {
                    
                    $groups->status = $status;
                    $groups->update();
                }
            }
            
            $this->ajax = json_encode($status == 0 ? 'Unpublished' : 'Published');
        }
    }
    
    public function action_sort() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $list = Arr::get($post, 'listItem');
            
            if (!empty($list)) {
            
                foreach ($list AS $key => $value) {

                    $group = ORM::factory('Sprav', $value);
                    
                    if ($group->loaded()) {
                        
                        $group->sort = $key + 1;
                        $group->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
    }
    

}
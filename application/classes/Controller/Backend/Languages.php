<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Languages extends Controller_Backend {
    
    public function action_index() {
        
        $languages = Model_Language::get_languages();
        
        $this->template->content = View::factory('backend/languages/index')
                                    ->set('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $language = ORM::factory('Language', $id);
        
        if (!$language->loaded()) {
            
            $this->redirect(Route::url('backend', array('controller' => 'languages')));
                    
        }
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            try {
                
                $language->edit($post);
                
                $this->session->set('backend_success_message', 'Data saved successfully!');
                $this->other_redirect($post, $language->id);
                
            } catch (ORM_Validation_Exception $e) {
                
                $errors = $e->errors();
                
            }
        }
        
        $this->template->content = View::factory('backend/languages/edit')
                                    ->set('object', $language);
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $language = ORM::factory('Language', $id);
                
                if ($language->loaded()) {
                    
                    $language->status = $status;
                    $language->update();
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

                    $language = ORM::factory('Language', $value);
                    
                    if ($language->loaded()) {
                        
                        $language->sort = $key + 1;
                        $language->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
        }
    }
    
    public function action_add() {
        
       
        $lang = Model::factory('Language');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
                      
            $lang->add_lang($post);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $lang->id);
        }
        
        $this->template->content = View::factory('backend/languages/add')
                                    ->bind('data', $post);
         
        
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $lang = ORM::factory('Language', $id);
        
        if ($lang->loaded()) {
            
            $lang->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'languages'))));
    }
}
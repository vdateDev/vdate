<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Pages extends Controller_Backend {
    
    public function action_index() {
        
        $pages = Model_Page::get_backend_pages();
        
        $this->template->content = View::factory('backend/pages/index')
                                    ->bind('pages', $pages);
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mPages = Model::factory('Page');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $mPages->add_page($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mPages->id);
        }
        
        $this->template->content = View::factory('backend/pages/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');
        
        $page = ORM::factory('Page', $id);
        
        if (!$page->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'pages'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
         
            $page->edit_page($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $page->id);
        }
        
        $tmp_page = $page->as_array();
        $page_languages = $page->languages->find_all();
        
        $tmp = array();
        foreach($page_languages AS $page_lang) {
            
            $tmp[$page_lang->language] = $page_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_page);
        
        $this->template->content = View::factory('backend/pages/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $page = ORM::factory('Page', $id);
        
        if ($page->loaded()) {
            
            $page->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'pages'))));
    }
    
    public function action_sort() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $list = Arr::get($post, 'listItem');
            
            if (!empty($list)) {
            
                foreach ($list AS $key => $value) {

                    $page = ORM::factory('Page', $value);
                    
                    if ($page->loaded()) {
                        
                        $page->sort = $key + 1;
                        $page->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
    }
    
    public function action_status() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $id = Arr::get($post, 'id');
            $status = Arr::get($post, 'status');
            
            if (!empty($id)) {
                
                $page = ORM::factory('Page', $id);
                
                if ($page->loaded()) {
                    
                    $page->status = $status;
                    $page->update();
                }
            }
            
            $this->ajax = json_encode($status == 0 ? 'Unpublished' : 'Published');
        }
    }
}
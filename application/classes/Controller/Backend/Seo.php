<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Seo extends Controller_Backend {
    
    public function action_index() {
        
        $seo = Model_Seo::get_seo_backend();
        $this->template->content = View::factory('backend/seo/index')
                                    ->set('seo', $seo);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mSeo = Model::factory('Seo');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
                                    
            $mSeo->add_seo($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mSeo->id);
        }
        
        $this->template->content = View::factory('backend/seo/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $seo = ORM::factory('Seo', $id);
        
        if (!$seo->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'seo'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();

            $seo->edit_seo($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $seo->id);
        }
        
        $tmp_seo = $seo->as_array();
        $seo_languages = $seo->languages->find_all();
        
        $tmp = array();
        foreach($seo_languages AS $seo_lang) {
            
            $tmp[$seo_lang->language] = $seo_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_seo);
        
        $this->template->content = View::factory('backend/seo/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $seo = ORM::factory('Seo', $id);
        
        if ($seo->loaded()) {
            
            $seo->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'seo'))));
    }
}
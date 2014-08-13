<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Infos extends Controller_Backend {
    
    public function action_index() {
        
        
        $infos = Model_Info::get_infos_backend();
        $this->template->content = View::factory('backend/infos/index')
                                    ->set('infos', $infos);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mInfos = Model::factory('Info');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $mInfos->add_info($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mInfos->id);
        }
        
        $this->template->content = View::factory('backend/infos/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $info = ORM::factory('Info', $id);
        
        if (!$info->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'infos'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $info->edit_info($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $info->id);
        }
        
        $tmp_info = $info->as_array();
        $info_languages = $info->languages->find_all();
        
        $tmp = array();
        foreach($info_languages AS $info_lang) {
            
            $tmp[$info_lang->language] = $info_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_info);
        
        $this->template->content = View::factory('backend/infos/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $info = ORM::factory('Info', $id);
        
        if ($info->loaded()) {
            
            $info->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'infos'))));
    }

}
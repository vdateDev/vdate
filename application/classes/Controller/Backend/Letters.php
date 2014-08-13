<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Letters extends Controller_Backend {
    
    public function action_index() {
        
        $letters = Model_Letter::get_letters_backend();
        $this->template->content = View::factory('backend/letters/index')
                                    ->set('letters', $letters);
        
    }
    
    public function action_add() {
        
        $languages = Model_Language::get_languages_frontend();
        
        $mLetter = Model::factory('Letter');
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $mLetter->add_letter($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $mLetter->id);
        }
        
        $this->template->content = View::factory('backend/letters/add')
                                    ->bind('data', $post)
                                    ->bind('languages', $languages);
        
    }
    
    public function action_edit() {
        
        $id = $this->request->param('id');

        $letter = ORM::factory('Letter', $id);
        
        if (!$letter->loaded()) {
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'letters'))));
            
        }
        
        $languages = Model_Language::get_languages_frontend();
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            
            $letter->edit_letter($post, $languages);
            
            $this->session->set('backend_success_message', 'Data saved successfully!');
            $this->other_redirect($post, $letter->id);
        }
        
        $tmp_letter = $letter->as_array();
        $letter_languages = $letter->languages->find_all();
        
        $tmp = array();
        foreach($letter_languages AS $letter_lang) {
            
            $tmp[$letter_lang->language] = $letter_lang->as_array();
            
        }
        
        $data = Arr::merge($tmp, $tmp_letter);
        
        $this->template->content = View::factory('backend/letters/edit')
                                    ->bind('data', $data)
                                    ->bind('languages', $languages);
    }
    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $letter = ORM::factory('Letter', $id);
        
        if ($letter->loaded()) {
            
            $letter->delete();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'letters'))));
    }

}
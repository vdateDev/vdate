<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_AdminLetters extends Controller_Backend {
    
    public function action_inbox() {
        
        $limit = Kohana::$config->load('adminletters')->get('backend_per_page');
        
        $get=$this->request->query();
        
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => Model_AdminLetters::count_letters(2,$status),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        
        $letters = Model_AdminLetters::get_letters_type(2,$status,$limit, $pagination->offset);
        
        $this->template->content = View::factory('backend/adminletters/inbox')
                                    ->set('pagination', $pagination)
                                    ->bind('letters', $letters)
                                    ->bind('status', $status);
    }
    
    public function action_outbox() {
        
        $limit = Kohana::$config->load('adminletters')->get('backend_per_page');
        
        $get=$this->request->query();
        
        if (!isset($get['status'])) $status=2; else   $status= Arr::get($get, 'status');
        
        $pagination = Pagination::factory(array(
            'items_per_page' => $limit,
            'view' => 'backend/pagination/basic',
            'total_items' => Model_AdminLetters::count_letters(1,$status),
        ))->route_params(array(
            'controller' => $this->controller,            
        ));
        
        
        $letters = Model_AdminLetters::get_letters_type(1,$status,$limit, $pagination->offset);
        
        $this->template->content = View::factory('backend/adminletters/outbox')
                                    ->set('pagination', $pagination)
                                    ->bind('letters', $letters)
                                    ->bind('status', $status);
    }
    
    public function action_show() {
        $id=$this->request->param('id');
        $letter=  Model_AdminLetters::show_letter($id);
        
        if ($letter->type==2) {
            $letter->status=1;
            $letter->update();
        }
        
        $this->template->content = View::factory('backend/adminletters/show')
                            ->bind('letter', $letter);
    }
    

    

    
    public function action_delete() {
        
        $id = (int) $this->request->param('id');
        
        $letter = ORM::factory('AdminLetters', $id);
        
        if ($letter->loaded()) {
            
            $letter->status_del_admin=1;
            $letter->update();
            
        }
        
        $this->redirect(strtolower(Route::url('backend', array('controller' => 'adminletters', 'action'=>'inbox'))));
    }
    
    public function action_new() {
        
        $id=(int) $this->request->param('id');
        $user=ORM::factory('User',$id);
        $man=$user->men;
        $letter=ORM::factory('AdminLetters');
        
        if ($this->request->method()== HTTP_Request::POST) {
            
            $post=$this->request->post();
            $letter->add_letter(1,$man->user_id,$post);
            $letter->send_letter_from_admin($man->id, $man->email,$post);
            $this->session->set('backend_success_message', 'Letter is sended!');
            
            $this->redirect(strtolower(Route::url('backend', array('controller' => 'adminletters','action'=>'inbox'))));
        }
        
            $this->template->content = View::factory('backend/adminletters/new')
                                    ->bind('user',$man)
                                    ->bind('data', $post);
        
    }
}
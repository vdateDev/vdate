<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_Photos extends Controller_Backend {
    
    public function action_index() {
        
       /* $admins = Model_User::get_admins();
        
        $this->template->content = View::factory('backend/admins/index')
                                    ->bind('admins', $admins);*/
    }
    
    public function action_load() {

        if (empty($_FILES['file'])) $this->ajax='No File!';
        else {
            $arr = explode('/',$_SERVER['HTTP_REFERER']);
            $id_user = intval(end($arr));	
            $photo=ORM::factory('Photos');
            $photo->add_photo($id_user,$_FILES['file']);
            $confirm = true;
            $this->ajax=json_encode(array('confirm' => $confirm));
        }
    }
    
    public function action_list() {
        
        $id=$this->request->post('user_id');
        
       
        $photos=  Model_Photos::get_photos_by_user($id);
        $images=  View::factory('backend/photos/list')
                    ->bind('photos', $photos)
                    ->render();
        
        $this->ajax=json_encode(array('images' => $images));

    }
    
    public function action_delete() {
        
        $id=$this->request->post('id');
        $photo=ORM::factory('Photos',$id);
        
        if (!$photo->loaded()) {$this->ajax='Error!';}
        else {

            $photo->delete_image();

            $this->ajax=json_encode(array('status' => TRUE));
        }

    }
    
    public function action_defaultimage() {
        
        $id=$this->request->post('id');
        if (!empty($id)) {
                
            $photo = ORM::factory('Photos', $id);

            if ($photo->loaded()) {
                
                $photo->change_default($photo->user_id);

                $photo->default_image = 1;
                $photo->update();
            }
        }
        
    }
    
    public function action_sort() {
        
        if ($this->request->method() === HTTP_Request::POST) {
            
            $post = $this->request->post();
            $list = Arr::get($post, 'order');
            
            if (!empty($list)) {
            
                foreach ($list AS $key => $value) {

                    $photos = ORM::factory('Photos', $value);
                    
                    if ($photos->loaded()) {
                        
                        $photos->sort = $key + 1;
                        $photos->update();
                        
                    }
                }
            }
            
            $this->ajax = json_encode(array('success' => TRUE));
            
        }
        
    }

}
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Photos extends ORM {
    
    protected $_table_name = 'user_photos';

    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
          
        );
    }
    
    
    public function add_photo($id,$photo) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values=array();
        
        $values['user_id']=$id;
        
        if (!empty($photo)) {
            $values['created_at']=time();
            $values['photo'] = $this->upload_image($photo);
            $this->values($values);
            $this->save();
        }   
        return $this;
    }

    
    public function upload_image($image) {
        
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            
            return;
            
        }
        
        $settings = Kohana::$config->load('photos')->as_array();
        
        $original = $image['name'];
        $tmp = explode('.', $original);
        $ext = end($tmp);
        
        $filename = strtolower(Text::random('alnum', 32)).'.'.$ext;
        
        $dir = DOCROOT.'upload/photos/';
        
        if ($file = Upload::save($image, NULL, $dir)) {
            
            $im = Image::factory($file);
            $master = Image::WIDTH;
            
            if ($im->width < $im->height) {
                
                $master = Image::HEIGHT;
                
            }
            
            $im->resize($settings['small_image_width'], $settings['small_image_height'], $master)
              ->crop($settings['small_image_width'], $settings['small_image_height'])
              ->save($dir.'/small/'.$filename);
            
            Image::factory($file)
                ->resize($settings['medium_image_width'], $settings['medium_image_height'], $master)
                ->crop($settings['medium_image_width'], $settings['medium_image_height'], $master)
                ->save($dir.'/medium/'.$filename);
            
            if ($im->width>$settings['big_image_width'] or $im->height>$settings['big_image_height']){
            
                Image::factory($file)
                    ->resize($settings['big_image_width'], $settings['big_image_height'], $master)
                ->save($dir.'/big/'.$filename); 
            
            } else {
                 Image::factory($file)->save($dir.'/big/'.$filename); 
            }
            
            unlink($file);
            
            return $filename;
        }
        
        return FALSE;
    }
    
    
    public function delete_image() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/photos/big/'.$this->photo)) {
            unlink(DOCROOT.'upload/photos/big/'.$this->photo);
        }
        
        if (HTML::isset_img('upload/photos/medium/'.$this->photo)) {
            unlink(DOCROOT.'upload/photos/medium/'.$this->photo);
        }
        
        if (HTML::isset_img('upload/photos/small/'.$this->photo)) {
            unlink(DOCROOT.'upload/photos/small/'.$this->photo);
        }
        
        $this->delete();
    }
    
    public static function get_photos_by_user($user_id) {
        
        $photos = ORM::factory('Photos')
                    ->where('user_id', '=', $user_id)
                    ->order_by('sort', 'ASC');
        
        $photos = $photos->find_all();
        
        return $photos;
    }
    
    public function change_default($user_id) {
        
        $photos = self::factory('Photos')
                ->where('user_id', '=', $user_id)
                ->where('default_image', '=', '1')
                ->find_all();
        
        foreach ($photos AS $photo) {
            
            if ($photo->default_image == 1) {
                
                $photo->default_image = 0;
                $photo->update();
            }
        }
    }
    
    public static function get_def_photo_user($user_id) {
        
        $photo=self::factory('Photos')
                    ->where('user_id', '=', $user_id)
                    ->where('default_image', '=', '1')
                    ->find();
       
        if ($photo->id=='') {
            $photo=self::factory('Photos')
                        ->where('user_id', '=', $user_id)
                        ->order_by('sort','ASC')
                        ->limit(1)
                        ->find();
        }
        
        return $photo;
        
    }


}
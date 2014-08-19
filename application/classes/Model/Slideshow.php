<?php defined('SYSPATH') or die('No direct script access.');

class Model_SlideShow extends ORM {
    
    protected $_table_name = 'slideshow';
    
    public function rules() {
        
        return array(
            'name' => array(
                array('not_empty'),
                array('max_length', array(':value', 255)),
            ),
            'image' => array(
                array('max_length', array(':value', 255)),
            ),
        );
        
    }
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
                array('strip_tags'),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
    }
    
    public function add_slide($data, $file) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'status', 'created_at'));
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        
        $this->values($values);
        $this->save();
        
        return $this;
        
    }
    
    public function edit_slide($data, $file) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'status', 'updated_at'));
        if (!empty($file)) {
            
            $values['image'] = $this->upload_image($file);
            
        }
        $this->values($values);
        $this->update();
        
        
        return $this;
    }
    
    public function upload_image($image) {
        
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            
            return;
            
        }
        
        $settings = Kohana::$config->load('slideshow');
        
        $original = $image['name'];
        $tmp = explode('.', $original);
        $ext = end($tmp);
        
        $filename = strtolower(Text::random('alnum', 32)).'.'.$ext;
        
        $dir = DOCROOT.'upload/slideshow/';
        
        if ($file = Upload::save($image, NULL, $dir)) {
            
            $im = Image::factory($file);
            $master = Image::WIDTH;
            
            if ($im->width < $im->height) {
                
                $master = Image::HEIGHT;
                
            }
            
            $im->resize($settings['image_width'], $settings['image_height'], $master)
               ->crop($settings['image_width'], $settings['image_height'])
               ->save($dir.$filename);
            
            unlink($file);
            
            return $filename;
        }
        
        return FALSE;
        
    }
    
    public function delete_image($update = FALSE) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        if (HTML::isset_img('upload/slideshow/'.$this->image)) {
            
            unlink(DOCROOT.'upload/slideshow/'.$this->image);
            
        }
        
        if ($update) {
            
            $this->image = NULL;
            $this->update();
            
        }
        
    }
    
    public function getSliderMain($lang,$status = NULL) {
        
        $slides = ORM::factory('SlideShow')
                  ->where('lang','=',$lang);
         
        if($status <> NULL) {
           $slides = $slides->where('status','=',$status);
        }         
        
        return $slides->find_all();
    }
    
    public static function get_frontend_slides($limit = NULL) {
        
        $slides = self::factory('Slideshow')
                    ->where('status', '=', 1)
                    ->order_by('sort', 'ASC');
        
        if (isset($limit)) {
            
            $slides->limit($limit);
            
        }
        
        $slides = $slides->find_all();
        
        return $slides;
    }

    public static function get_backend_slides($limit = NULL, $offset = NULL) {
        
        $slides = self::factory('Slideshow');
        
        if (isset($limit)) {
            
            $slides->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $slides->offset($offset);
            
        }
        
        $slides = $slides->order_by('sort', 'ASC')->find_all();
        
        return $slides;
    }
}
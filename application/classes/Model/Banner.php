<?php defined('SYSPATH') or die('No direct script access.');

class Model_Banner extends ORM {
    
    protected $_table_name = 'banners';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'BannerLanguage',
            'foreign_key' => 'banner_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
            ),
            'url' => array(
                array('trim'),
            ),
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
        );
        
    }
    

    public function add_banner($data, $languages, $files) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'url', 'position', 'type', 'status', 'created_at'));
        
        $this->values($values);
        $this->save();
        
        foreach ($languages AS $lang) {
            
            $this->languages->add_language($this->id, $lang->key, $data, $files['file_'.$lang->key]);
            
        }
        
        return $this;
        
    }
    
    public function delete_file($key) {
        
        $lang = $this->languages->where('language', '=', $key)->find();
        
        if ($lang->loaded()) {
            
            if (HTML::isset_file('upload/banners/'.$lang->file)) {
                
                unlink(DOCROOT.'upload/banners/'.$lang->file);
                
                $lang->file = NULL;
                $lang->update();
            }
            
        }
        
    }
    
    public function delete_banner() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $languages = $this->languages->find_all();
        
        if (sizeof($languages) > 0) {
            
            foreach ($languages AS $lang) {
                
                if (HTML::isset_file('upload/banners/'.$lang->file)) {

                    unlink(DOCROOT.'upload/banners/'.$lang->file);

                }
                
                $lang->delete();
            }
        }
        
        $this->delete();
    }
    
    public function edit_banner($data, $files) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('name', 'url', 'position', 'type', 'status', 'updated_at'));
        $this->values($values);
        $this->update();
        
        $banner_languages = $this->languages->find_all();
        
        foreach ($banner_languages AS $banner_lang) {
            
            $file = isset($files['file_'.$banner_lang->language]) ? $files['file_'.$banner_lang->language] : NULL;
            
            $banner_lang->edit_language($data, $file);
            
        }
        
        return $this;
        
    }
    
    public static function get_backend_banners($limit = NULL, $offset = NULL) {
        
        $banners = self::factory('Banner');
        
        if (isset($limit)) {
            
            $banners->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $banners->offset($offset);
            
        }
        
        $banners = $banners->order_by('sort', 'ASC')->find_all();
        
        return $banners;
        
    }
    
    public static function get_banners_for_frontend($language, $position, $limit) {
        
        $banners = self::factory('Banner')
                    ->join('banners_languages')
                    ->on('banner.id', '=', 'banners_languages.banner_id')
                    ->select(
                        array('banners_languages.file', 'file')                            
                    )->where('banner.status', '=', 1)
                    ->where('banner.position', '=', $position)
                    ->where('banners_languages.language', '=', $language)
                    ->order_by('sort', 'ASC')
                    ->limit($limit)
                    ->find_all();
        
        return $banners;
    }
 }
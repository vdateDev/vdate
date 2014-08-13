<?php defined('SYSPATH') or die('No direct script access.');

class Model_Seo extends ORM {
    
    protected $_table_name = 'seo';
    
    protected $_has_many = array(
        'languages' => array(
            'model' => 'SeoLanguage',
            'foreign_key' => 'seo_id',
        ),
    );
    
    public function filters() {
        
        return array(
            'name' => array(
                array('trim'),
            ),
            'controller' => array(
                array('trim'),                
            ),
            'action' => array(
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
    
    public function add_seo($data, $languages) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'name', 'controller', 'action', 'created_at'));
        
        $this->values($values);
        $this->save();
        
        foreach($languages AS $lang) {
         
            $this->languages->add_language($this->id, $lang->key, $data[$lang->key]);
            
        }
        
        return $this;
    }
    
    
    public function edit_seo($data, $languages) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'name', 'controller', 'action', 'updated_at'));
        $this->values($values);
        $this->update();
           
        $seo_languages = $this->languages->find_all();
        
        foreach ($seo_languages AS $seo_lang) {
            
            $seo_lang->edit_language($data[$seo_lang->language]);
            
        }
        
        return $this;
    }
    
    public static function get_seo_backend() {
        
        $seo = self::factory('Seo')->order_by('name', 'ASC')->find_all();
        
        return $seo;
   }
   
   public static function get_seo_frontend($language, $controller, $action) {
       
       $seo = self::factory('Seo')
               ->join('seo_languages')
               ->on('seo.id', '=', 'seo_languages.seo_id')
               ->select(
                    array('seo_languages.page_title', 'page_title'),
                    array('seo_languages.page_h1', 'page_h1'),
                    array('seo_languages.page_keywords', 'page_keywords'),
                    array('seo_languages.page_description', 'page_description')
                )
                ->where('seo_languages.language', '=', $language)
                ->where('seo.controller', '=', $controller)
                ->where('seo.action', '=', $action)
                ->where('seo.status', '=', 1)
                ->find();
       
       return $seo;
       
   }
}
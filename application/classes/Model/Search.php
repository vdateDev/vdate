<?php defined('SYSPATH') or die('No direct script access.');

class Model_Search {
    
    public static function change($user,$data) {
        
        $role = $user->get_user_role();
        
       
        if($role->name == 'man') {
            
            $gModel = Model::factory('Girls');
            
            return $gModel->search($data);
        }
        
        if($role->name == 'girls') {
            $mModel = Model::factory('Men');
            
            return $mModel->search($data);
        }     
        
        return;
       
    }
}
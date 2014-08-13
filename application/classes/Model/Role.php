<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends Model_Auth_Role {
    
    
    public static function get_roles() {
        
        $role = self::factory('Role')->where('name', '=', 'login')->find();
        $role_girl = self::factory('Role')->where('name', '=', 'girls')->find();
        $role_agency = self::factory('Role')->where('name', '=', 'agency')->find();
        $res=self::factory('Role')
                ->where('id', '!=', $role->id)
                ->where('id', '!=', $role_girl)
                ->where('id', '!=', $role_agency)
                ->find_all();
        
        return $res;
        
    }
}   

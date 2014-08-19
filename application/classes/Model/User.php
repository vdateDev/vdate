<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
    
    protected $_has_many = array(
        'user_tokens'   => array('model' => 'User_Token'),
        'roles'         => array('model' => 'Role', 'through' => 'roles_users'),
    );
    
    protected $_has_one = array(
        'girl' => array('model' => 'Girls', 'foreign_key' => 'user_id'),
        'agency' => array('model' => 'Agency', 'foreign_key' => 'user_id'),
        'men' => array('model' => 'Men', 'foreign_key' => 'user_id'),
    );

    
    public function validate($post) {
        
        $validation = Validation::factory($post)            
            ->bind(':params', $post)
            ->rule('username', 'not_empty')
            ->rule('username', array($this, 'unique'), array('username', ':value'))
            ->rule('email', 'not_empty')
            ->rule('email', 'email')
            ->rule('email', array($this, 'unique'), array('email', ':value'))
            ->rule('password', 'not_empty')
            ->rule('password', 'min_length', array(':value', 8))
            ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'))
            ->labels(array(
                'username' => 'login',
                'email' => 'E-mail',
                'passowrd' => 'password',
                'password_confirm' => 'password confirn',
            ));
            
        return $validation;
        
    }
    
    public function add_user($data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
     
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm','role'));
        
        $this->create_user($values, array('username', 'password', 'email'));
        $role = ORM::factory('Role')->where('name', '=', 'login')->find();
        $roles = array();
        $roles[] = $role->id;
        $roles[] = $values['role'];        
        $this->add('roles', $roles);
        
        return $this->id;
    }
    
    public function edit_user($data) {
        
        if (!$this->loaded()) {

            return;
            
        }
      
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'role'));
        
        if (empty($values['passowrd'])) {
            
            unset($values['passowrd']);
            unset($values['password_confirm']);
            $this->update_user($values, array('username', 'email'));        
            
        } else {
            
            $this->update_user($values, array('username', 'password', 'email'));        
            
        }
        
        
        $this->remove('roles');
        
        $role = ORM::factory('Role')->where('name', '=', 'login')->find();
        $roles = array();
        $roles[] = $role->id;
        $roles[] = $values['role'];        
        $this->add('roles', $roles);
        
        return $this;
        
    }
    
    public static function get_admins() {
        
        return self::factory('User')
                    ->join('roles_users')
                    ->on('roles_users.user_id', '=', 'user.id')
                    ->join('roles')
                    ->on('roles.id', '=', 'roles_users.role_id')
                    ->where('roles.name', '!=', 'login')
                    ->where('admin', '=', 1)                    
                    ->find_all();
    }
    
    public function add_admin($data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'admin', 'role'));
        $values['admin'] = 1;
        
        $this->create_user($values, array('username', 'password', 'email', 'admin'));
        $role = ORM::factory('Role')->where('name', '=', 'login')->find();
        $roles = array();
        $roles[] = $role->id;
        $roles[] = $values['role'];        
        $this->add('roles', $roles);
        
        return $this;
    }
    
    public function update_admin($data) {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'admin', 'role'));
        $values['admin'] = 1;
        
        if (empty($values['passowrd'])) {
            
            unset($values['passowrd']);
            unset($values['password_confirm']);
            $this->update_user($values, array('username', 'email', 'admin'));        
            
        } else {
            
            $this->update_user($values, array('username', 'password', 'email', 'admin'));        
            
        }
        
        
        $this->remove('roles');
        
        $role = ORM::factory('Role')->where('name', '=', 'login')->find();
        $roles = array();
        $roles[] = $role->id;
        $roles[] = $values['role'];        
        $this->add('roles', $roles);
        
        return $this;
        
    }
    
    public function get_admin_role() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $login = ORM::factory('Role')->where('name', '=', 'login')->find();
        $role = $this->roles->where('id', '!=', $login->id)->find();
        
        return $role;
        
    }
    
    
    

}
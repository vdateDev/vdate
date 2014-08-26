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
     
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm','role', 'status'));
        
        $this->create_user($values, array('username', 'password', 'email', 'status'));
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
      
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'role','status'));
        
        if (empty($values['passowrd'])) {
            
            unset($values['passowrd']);
            unset($values['password_confirm']);
            $this->update_user($values, array('username', 'email','status'));  
            
        } else {
            
            $this->update_user($values, array('username', 'password', 'email','status'));        
            
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
        
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'admin', 'role','status'));
        $values['admin'] = 1;
        
        $this->create_user($values, array('username', 'password', 'email', 'admin','status'));
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
        
        $values = Arr::extract($data, array('username', 'password', 'email', 'password_confirm', 'admin', 'role','status'));
        $values['admin'] = 1;
        
        if (empty($values['passowrd'])) {
            
            unset($values['passowrd']);
            unset($values['password_confirm']);
            $this->update_user($values, array('username', 'email', 'admin','status'));        
            
        } else {
            
            $this->update_user($values, array('username', 'password', 'email', 'admin','status'));        
            
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
    
    public function  get_age(){
        
        $age=floor((time()-$this->birthday)/(60*60*24*365.25));
        return $age;
        
    }
    
    public function is_online() {
        
        $diff_time = Kohana::$config->load('users')->get('online_diff_time');
        
        if ($this->last_activity>=(time()-$diff_time))  return TRUE;
        else return FALSE;
        
    }
    
    public static function get_user_by_login($login, $admin = FALSE) {
        
        $admin = $admin ? 1 : 0;
        
        return self::factory('User')
                ->where('admin', '=', $admin)                
                ->and_where_open()
                    ->where('username', '=', $login)
                    ->or_where('email', '=', $login)
                ->and_where_close()
                ->find();
        return 1;
    }
    
    
    public function get_user_role() {
        
        if (!$this->loaded()) {
            
            return;
            
        }
        
        $login = ORM::factory('Role')->where('name', '=', 'login')->find();
        $role = $this->roles->where('id', '!=', $login->id)->find();
        
        return $role;
        
    }
    
    public function get_weight() {
        
        $weight=ORM::factory('weight',$this->weight);
        return $weight->get_weight_kg_ibs();
    }
    
    public function get_height() {
        
        $height=ORM::factory('height',$this->height);
        return $height->get_height_cm_feet();
        
    }
    
    public static function get_profile($user_id) {
        $user=self::factory('User',$user_id);
        $role=$user->get_user_role();
        if ($role->name=='man') $profile=$user->men;
        if ($role->name=='girls') $profile=$user->girl;
        return $profile;
    }
    
    
    
    
    

}
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Favorites extends ORM {
    
    protected $_table_name = 'favorits';
    
    public function add_favorit($id_who,$id_favorit) {
        
        if ($this->loaded()) {
            
            return;
            
        }
             
        $values['id_who']=$id_who;
        $values['id_favorit']=$id_favorit;
        $values['created_at']=time();
        $valuse['status']=0;
        $this->values($values);
        $this->save();
        $this->send_letter();
        
        return $this;
    }


    
    public function send_letter() {
        
        $settings = Kohana::$config->load('site');
        $favorit=ORM::factory('User',$this->id_favorit);
        
        $favorite_name=Model_User::get_profile($favorit->id)->firstname;
        $sender_name=Model_User::get_profile($this->id_who)->firstname;


        /*------------------Letter to favorite--------------*/
        $letter = Model_Letter::get_letter_by_key('mail_adding_to_favorite', $favorit->user_language);
        $subject = str_replace('{{site}}', $settings['site_name'], $letter->subject);
        $search = array('{{site}}','{{favorite_name}}','{{sender_name}}');
        
        $data = array();
        $data['site'] = $settings['site_name'];
        $data['favorite_name'] = $favorite_name;        
        $data['sender_name']=$sender_name;
        
        $message = str_replace($search, $data, $letter->text);
        
        //add to admin letters
        $adminletter=Model::factory('AdminLetters');
        $data=array('subject'=>$subject,'text'=>$message);
        $adminletter->add_letter(3,$favorit->id,$data);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($favorit->email)
                        ->send();
        

    }
    
    public function is_favorite($id_favorite,$id_who) {
        $user=ORM::factory('Favorites')
                    ->where('id_favorit', '=', $id_favorite)
                    ->where('id_who', '=', $id_who)
                    ->count_all();
        
        if ($user>0) return true; else return false;
    }
    
    public static function get_man_favorites($id_man,$limit=NULL,$sort=NULL,$offset=NULL) {
        
        $girls=ORM::factory('User')
                        ->join('favorits')
                        ->on('user.id','=','favorits.id_favorit')
                        ->select(
                                array('favorits.id','id_record'),
                                 array('favorits.id_who','id_who')
                                )
                        ->where('favorits.id_who','=',$id_man)
                        ->join('girls')
                        ->on('girls.user_id','=','user.id')
                        ->select(
                            array('girls.firstname','firstname'),    
                            array('girls.birthday','birthday'),
                            array('girls.city','city'),
                            array('girls.country','country'),
                            array('girls.weight','weight'),
                            array('girls.height','height')
                        )
                        ->join('user_photos','LEFT')
                        ->on('user_photos.user_id','=','user.id')
                        ->on('user_photos.default_image','=',DB::expr('1'))
                        ->select(
                             array('user_photos.photo','photo'),
                             array('user_photos.default_image','default_image')
                             );
         if (isset($sort)) {
            
            if($sort=='activity')  $girls->order_by('user.last_activity','DESC');
            if($sort=='age')  $girls->order_by('girls.birthday','DESC');
            if($sort=='name')  $girls->order_by('girls.firstname','ASC');
            if($sort=='city')  $girls->order_by('girls.city','ASC');
            if($sort=='last')  $girls->order_by('favorits.id','DESC');
            
        } else {
            $girls->order_by( DB::expr('RAND()'));
        }
        
        if (isset($limit)) {
            $girls->limit($limit);
        }
        
        if (isset($offset)) {
            
            $girls->offset($offset);

        }
        
        return $girls->find_all();
        
    }
    
    public static function get_girl_favorites($id_girl,$limit=NULL,$sort=NULL,$offset=NULL) {
        
        $men=ORM::factory('User')
                        ->join('favorits')
                        ->on('user.id','=','favorits.id_favorit')
                        ->select(
                                array('favorits.id','id_record'),
                                 array('favorits.id_who','id_who')
                                )
                        ->where('favorits.id_who','=',$id_girl)
                        ->join('men')
                        ->on('men.user_id','=','user.id')
                        ->select(
                            array('men.firstname','firstname'),    
                            array('men.birthday','birthday'),
                            array('men.city','city'),
                            array('men.country','country'),
                            array('men.weight','weight'),
                            array('men.height','height')
                        )
                        ->join('user_photos','LEFT')
                        ->on('user_photos.user_id','=','user.id')
                        ->on('user_photos.default_image','=',DB::expr('1'))
                        ->select(
                             array('user_photos.photo','photo'),
                             array('user_photos.default_image','default_image')
                             );
         if (isset($sort)) {
            
            if($sort=='activity')  $men->order_by('user.last_activity','DESC');
            if($sort=='age')  $men->order_by('men.birthday','DESC');
            if($sort=='name')  $men->order_by('men.firstname','ASC');
            if($sort=='city')  $men->order_by('men.city','ASC');
            if($sort=='last')  $men->order_by('favorits.id','DESC');
            
        } else {
            $men->order_by( DB::expr('RAND()'));
        }
        
        if (isset($limit)) {
            $men->limit($limit);
        }
        
        if (isset($offset)) {
            
            $men->offset($offset);

        }
        
        return $men->find_all();
        
    }
    
    public static function count_favorites($user_id) {
        $favorites=ORM::factory('Favorites')
                        ->where('id_who','=',$user_id);
        return $favorites->count_all();
    }
    
    public static function count_admires($user_id) {
        $favorites=ORM::factory('Favorites')
                        ->where('id_favorit','=',$user_id);
        return $favorites->count_all();
    }
    
    public static function get_girl_admires($id_girl,$limit=NULL,$sort=NULL,$offset=NULL) {
        
        $men=ORM::factory('User')
                        ->join('favorits')
                        ->on('user.id','=','favorits.id_who')
                        ->select(
                                array('favorits.id','id_record'),
                                 array('favorits.id_who','id_who')
                                )
                        ->where('favorits.id_favorit','=',$id_girl)
                        ->join('men')
                        ->on('men.user_id','=','user.id')
                        ->select(
                            array('men.firstname','firstname'),    
                            array('men.birthday','birthday'),
                            array('men.city','city'),
                            array('men.country','country'),
                            array('men.weight','weight'),
                            array('men.height','height')
                        )
                        ->join('user_photos','LEFT')
                        ->on('user_photos.user_id','=','user.id')
                        ->on('user_photos.default_image','=',DB::expr('1'))
                        ->select(
                             array('user_photos.photo','photo'),
                             array('user_photos.default_image','default_image')
                             );
         if (isset($sort)) {
            
            if($sort=='activity')  $men->order_by('user.last_activity','DESC');
            if($sort=='age')  $men->order_by('men.birthday','DESC');
            if($sort=='name')  $men->order_by('men.firstname','ASC');
            if($sort=='city')  $men->order_by('men.city','ASC');
            if($sort=='last')  $men->order_by('favorits.id','DESC');
            
        } else {
            $men->order_by( DB::expr('RAND()'));
        }
        
        if (isset($limit)) {
            $men->limit($limit);
        }
        
        if (isset($offset)) {
            
            $men->offset($offset);

        }
        
        return $men->find_all();
        
    }
    
    static public function  count_new_admires($girl_id) {
        
        $girl=ORM::factory('Favorites')
                    ->where('status', '=', '0')
                    ->where('id_favorit', '=', $girl_id);
        return $girl->count_all();
        
    }
    
    public static function upadte_new($user_id) {
        
        $new=ORM::factory('Favorites')
                    ->where('status', '=', '0')
                    ->where('id_favorit','=',$user_id)
                    ->find_all();
        
        foreach ($new AS $item) {
            $item->status=1;
            $item->update();
        }
        
    }
    
     public static function get_girl_matches($id_girl,$limit=NULL,$sort=NULL,$offset=NULL) {
         
        $favorites=ORM::factory('Favorites')
                    ->where('id_who','=',$id_girl)
                    ->find_all();
        
        if (count($favorites)>0) {
            
            $arr_fav='(';
            foreach ($favorites as $item) {
                $arr_fav.=$item->id_favorit.', ';
            }
            $arr_fav=  UTF8::substr($arr_fav, 0,-2);
            $arr_fav.=')';
            
        
        
            $men=ORM::factory('User')
                            ->join('favorits')
                            ->on('favorits.id_who','=','user.id')
                            ->where('favorits.id_favorit', '=', $id_girl)
                            ->where('favorits.id_who','in',DB::expr($arr_fav))
                            ->join('men')
                            ->on('men.user_id','=','user.id')
                            ->select(
                                array('men.firstname','firstname'),    
                                array('men.birthday','birthday'),
                                array('men.city','city'),
                                array('men.country','country'),
                                array('men.weight','weight'),
                                array('men.height','height')
                            )
                            ->join('user_photos','LEFT')
                            ->on('user_photos.user_id','=','user.id')
                            ->on('user_photos.default_image','=',DB::expr('1'))
                            ->select(
                                 array('user_photos.photo','photo'),
                                 array('user_photos.default_image','default_image')
                                 );
             if (isset($sort)) {

                if($sort=='activity')  $men->order_by('user.last_activity','DESC');
                if($sort=='age')  $men->order_by('men.birthday','DESC');
                if($sort=='name')  $men->order_by('men.firstname','ASC');
                if($sort=='city')  $men->order_by('men.city','ASC');

            } else {
                $men->order_by( DB::expr('RAND()'));
            }

            if (isset($limit)) {
                $men->limit($limit);
            }

            if (isset($offset)) {

                $men->offset($offset);

            }

            return $men->find_all();
        
        } else return False;
        
    }
    
    public static function count_matches($user_id) {

        $favorites=ORM::factory('Favorites')
                ->where('id_who','=',$user_id)
                ->find_all();
        
        if (count($favorites)>0) {
            
            $arr_fav='(';
            foreach ($favorites as $item) {
                $arr_fav.=$item->id_favorit.', ';
            }
            $arr_fav=  UTF8::substr($arr_fav,0, -2);
            $arr_fav.=')';
            
            $cnt=ORM::factory('Favorites')
                    ->where('id_favorit','=',$user_id)
                    ->where('id_who','in',DB::expr($arr_fav));
            return $cnt->count_all();
        } else return 0;
        
    }

}
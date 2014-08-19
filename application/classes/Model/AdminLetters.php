<?php defined('SYSPATH') or die('No direct script access.');

class Model_AdminLetters extends ORM {
    
    protected $_table_name = 'user_admin_letters';
    
    public function filters() {
        
        return array(
            'created_at' => array(
                array('time'),
            ),
            'updated_at' => array(
                array('time'),
            ),
            'subject' => array(
                array('trim'),
                array('strip_tags'),
            ),
        );
    }
    
    //type: 1-from admin; 2 - from user
    public function add_letter($type,$user_id, $data) {
        
        if ($this->loaded()) {
            
            return;
            
        }
        
        $values = Arr::extract($data, array('status', 'created_at', 'subject', 'type', 'user_id','text'));
        
        $values['user_id']=$user_id;
        $values['type']=$type;
        
        $this->values($values);
        $this->save();
        
        return $this;
    }
    
    public static function count_letters($type,$status) {
        
          $letters=self::factory('AdminLetters')
                    ->where('type', '=', $type)
                    ->where('status_del_admin','=','0');
        if (isset($status) and $status<2) {
            $letters->where('status', '=', $status);
        }
        
        $letters=$letters->count_all();
        
        return $letters;
        
    }
    
    public static function get_letters_type($type,$status=NULL,$limit = NULL, $offset = NULL) {
        $letters=self::factory('AdminLetters')
                    ->join('men')
                    ->on('men.user_id','=','adminletters.user_id')
                    ->select(
                        array('men.firstname','firstname'),
                        array('men.lastname','lastname')
                    )
                    ->where('type', '=', $type)
                    ->where('status_del_admin','=','0')
                    ->order_by('created_at','DESC');
        if (isset($status) and $status<2) {
            $letters->where('adminletters.status', '=', $status);
        }
        
        if (isset($limit)) {
            
            $letters->limit($limit);
            
        }
        
        if (isset($offset)) {
            
            $letters->offset($offset);

        }
        
        $letters=$letters->find_all();
        
        return $letters;

    }
    
    public static function show_letter($id) {
        
        $letter=ORM::factory('AdminLetters')
                    ->join('men')
                    ->on('men.user_id','=','adminletters.user_id')
                    ->select(
                        array('men.firstname','firstname'),
                        array('men.lastname','lastname')
                    )
                    ->where('adminletters.id', '=', $id)
                    ->find();
        
        return $letter;
        
    }
    
        
    public function send_letter_from_admin($user_id, $user_email, $post) {
        
        /*------------------Letter to man -------------------*/
        $settings = Kohana::$config->load('site');
        $letter = Model_Letter::get_letter_by_key('mail_man_letter_from_admin', 'en');
        $subject = str_replace(array('{{site}}', '{{subject}}'), array($settings['site_name'],$post['subject']),$letter->subject);
        $search = array('{{site}}','{{text}}', '{{subject}}');
        
        $data=array();
        $data['site'] = $settings['site_name'];
        $data['text'] = $post['text'];
        $data['subject'] = $post['subject'];
        
        $message = str_replace($search, $data, $letter->text);
        
        Email::factory($subject, $message)
                        ->from($settings['admin_email'])
                        ->to($user_email)
                        ->send();
        
    }
    
  
}
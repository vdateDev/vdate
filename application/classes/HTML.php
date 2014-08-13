<?php defined('SYSPATH') or die('No direct script access.');

class HTML extends Kohana_HTML {
    
    public static function access($controller, $arr) {
        
       /* $controller = strtolower($controller);
        
        if ($controller == 'main' OR in_array('all', $arr) OR in_array($controller, $arr)) {
            
            return TRUE;
            
        }
        
        return FALSE;*/
        return TRUE;
    }

    public static function isset_file($file) {
        
        if (file_exists(DOCROOT.$file) AND !is_dir(DOCROOT.$file)) {
            return '/'.$file;
        }
        
        return FALSE;
    }
    
    public static function isset_img($image) {
        
        if (file_exists(DOCROOT.$image) AND !is_dir(DOCROOT.$image)) {
            return '/'.$image;
        }
        
        return FALSE;
    }
    
    public static function cut_text($str, $length = 200, $end = '...') {
        
        $str = strip_tags($str);
        
        if (strlen($str) <= $length) {
        
            return $str;
            
        }
        
        $new_str = substr($str, 0, $length - strlen($end)).$end;
                
        return $new_str;
    }
    
    public static function translit($str) {
        
        $string = UTF8::strtolower($str);
        
        $chars = array(
            'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 
            'ё'=>'jo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'jj', 'к'=>'k',
            'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r',
            'с'=>'s', 'т'=>'t', 'у'=>'y', 'ф'=>'f', 'х'=>'kh', 'ц'=>'c',
            'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shh', 'ы'=>'y', 'э'=>'eh', 'ю'=>'ju',
            'я'=>'ja', 'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E',
            'Ё'=>'Jo', 'Ж'=>'Zh', 'З'=>'Z', 'И'=>'I', 'Й'=>'Jj', 'К'=>'K', 'Л'=>'L',
            'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S', 'Т'=>'T',
            'У'=>'Y', 'Ф'=>'F', 'Х'=>'Kh', 'Ц'=>'C', 'Ч'=>'Ch', 'Ш'=>'Sh', 'Щ'=>'Shh',
            'Ы'=>'Y', 'Э'=>'Eh', 'Ю'=>'Ju', 'Я'=>'Ja', 'ь'=>'', 'Ь'=>'', 'ъ'=>'', 'Ъ'=>'',
        );

       return preg_replace('/[^a-z0-9]{1,}/iu','_',strtr($str, $chars));
        
    }
}

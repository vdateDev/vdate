<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
        'enabled' => FALSE,
        'gz' => TRUE,
        'path' => array(
            'js' => '', 
            // дополнительный путь к js. Например, все js храняться в папке /assets/ или на другом сайте
            //http://site.com/assets/ тогда можно при добавлении файла не указывать этот путь
            'css' => '', // дополнительный путь к css
            'media' => 'media/cache/', // куда будут размещены готовые скрипты
        ),
    'url' => array(
            'js' => '/', //  
            'css' => '/', // url добавляется к относительным путям в свойствах url()
            'media' => '/', // url к сгенерированным скриптам.
        ),
);
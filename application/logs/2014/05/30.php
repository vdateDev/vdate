<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-30 17:34:38 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend\Users.php [ 86 ] in Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php:86
2014-05-30 17:34:38 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php(86): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\ebg\www...', 86, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Users->action_questionary()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Users))
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ebg\www\application\classes\Controller\Frontend\Users.php:86
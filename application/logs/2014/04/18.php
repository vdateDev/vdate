<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-18 09:42:29 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend.php [ 45 ] in Z:\home\ebg\www\application\classes\Controller\Frontend.php:45
2014-04-18 09:42:29 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Frontend.php(45): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\ebg\www...', 45, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(6): Controller_Frontend->before()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Auth->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Controller\Frontend.php:45
2014-04-18 09:42:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend.php [ 45 ] in Z:\home\ebg\www\application\classes\Controller\Frontend.php:45
2014-04-18 09:42:54 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Frontend.php(45): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\ebg\www...', 45, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(6): Controller_Frontend->before()
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Auth->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Controller\Frontend.php:45
2014-04-18 11:04:58 --- CRITICAL: Kohana_Exception [ 0 ]: The h1 property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-18 11:04:58 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('h1')
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(29): Kohana_ORM->__get('h1')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:603
2014-04-18 15:46:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\Captcha.php [ 70 ] in file:line
2014-04-18 15:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 15:46:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\Captcha.php [ 70 ] in file:line
2014-04-18 15:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 15:47:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Captcha_' not found ~ MODPATH\captcha\classes\Captcha.php [ 70 ] in file:line
2014-04-18 15:47:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-18 15:47:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: style ~ MODPATH\captcha\classes\Captcha.php [ 67 ] in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:15 --- DEBUG: #0 Z:\home\ebg\www\modules\captcha\classes\Captcha.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 67, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php(67): Captcha::instance('riddles')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: style ~ MODPATH\captcha\classes\Captcha.php [ 67 ] in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:34 --- DEBUG: #0 Z:\home\ebg\www\modules\captcha\classes\Captcha.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 67, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php(67): Captcha::instance('words')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: style ~ MODPATH\captcha\classes\Captcha.php [ 67 ] in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:47 --- DEBUG: #0 Z:\home\ebg\www\modules\captcha\classes\Captcha.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 67, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php(67): Captcha::instance('riddles')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: style ~ MODPATH\captcha\classes\Captcha.php [ 67 ] in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:47:49 --- DEBUG: #0 Z:\home\ebg\www\modules\captcha\classes\Captcha.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 67, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php(67): Captcha::instance('riddles')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:49:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: style ~ MODPATH\captcha\classes\Captcha.php [ 67 ] in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
2014-04-18 15:49:03 --- DEBUG: #0 Z:\home\ebg\www\modules\captcha\classes\Captcha.php(67): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 67, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php(67): Captcha::instance('riddles')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\modules\captcha\classes\Captcha.php:67
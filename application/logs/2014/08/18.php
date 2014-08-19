<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-18 08:29:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:29:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:29:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:29:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:33:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:33:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:33:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:33:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:34:13 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:34:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:34:22 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:34:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:34:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:35:16 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:35:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:36:17 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:36:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:48:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:50:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_h1 ~ APPPATH\views\frontend\layoutMain.php [ 90 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:50:53 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 90, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:51:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_h1 ~ APPPATH\views\frontend\layoutMain.php [ 90 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:51:01 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 90, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:51:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page_h1 ~ APPPATH\views\frontend\layoutMain.php [ 90 ] in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:51:08 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\layoutMain.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 90, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\application\views\frontend\layoutMain.php:90
2014-08-18 08:52:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:52:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:53:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:54:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:54:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:54:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 08:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 08:54:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 08:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:05:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:05:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:35:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:35:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:35:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:36:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:36:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:36:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:36:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH\classes\Controller\Frontend\Auth.php [ 28 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:28
2014-08-18 09:36:20 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 28, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:28
2014-08-18 09:36:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\views\frontend\auth\registration.php [ 127 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:127
2014-08-18 09:36:45 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(127): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 127, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:127
2014-08-18 09:37:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:37:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:37:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:37:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:38:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:43:57 --- CRITICAL: Kohana_Exception [ 0 ]: The man property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 09:43:57 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('man')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(28): Kohana_ORM->__get('man')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 09:46:00 --- CRITICAL: Kohana_Exception [ 0 ]: The man property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 09:46:00 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('man')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(29): Kohana_ORM->__get('man')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 09:46:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errrors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:46:17 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:46:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:51:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:51:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:52:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:52:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:54:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:54:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:54:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 09:57:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:57:20 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:58:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:58:16 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:58:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:58:19 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:59:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH\views\frontend\auth\registration.php [ 155 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:155
2014-08-18 09:59:07 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(155): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 155, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:155
2014-08-18 09:59:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:59:28 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 09:59:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 09:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:00:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:00:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:00:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:00:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:00:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:01:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:01:21 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:01:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:01:51 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:02:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:02:01 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:04:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:04:33 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:04:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_man ~ APPPATH\classes\Controller\Frontend\Auth.php [ 57 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:04:46 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:57
2014-08-18 10:04:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:04:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:04:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:05:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:08:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:08:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:18:31 --- CRITICAL: Kohana_Exception [ 0 ]: The man property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:18:31 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('man')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(43): Kohana_ORM->__get('man')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:19:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:19:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:21:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Men::add_man() ~ APPPATH\classes\Controller\Frontend\Auth.php [ 42 ] in file:line
2014-08-18 10:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:22:53 --- CRITICAL: Kohana_Exception [ 0 ]: The man property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:22:53 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('man')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(43): Kohana_ORM->__get('man')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:23:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:24:21 --- CRITICAL: Kohana_Exception [ 0 ]: The man property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:24:21 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('man')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(43): Kohana_ORM->__get('man')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 10:25:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:25:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:25:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 10:25:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 10:26:06 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIG1hbiBhdCBzaXRlIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:187
2014-08-18 10:26:06 --- DEBUG: Email to email3man@email.com with subject '=?UTF-8?B?UmVnaXN0cmF0aW9uIGF0IHNpdGUgdmRhdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:204
2014-08-18 11:30:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 11:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 11:30:20 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 11:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 11:30:45 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 11:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 11:31:08 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 11:31:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 11:48:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 11:48:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 11:49:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 11:49:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 12:43:42 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-18 12:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 15:15:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH\classes\Controller\Frontend\News.php [ 53 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\News.php:53
2014-08-18 15:15:28 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\News.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 53, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_News->action_show()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_News))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\News.php:53
2014-08-18 15:18:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: widgets ~ APPPATH\views\frontend\auth\registration.php [ 1 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:1
2014-08-18 15:18:14 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 1, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutMain.php(93): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:1
2014-08-18 15:18:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-18 15:18:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 17:00:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: receiver ~ APPPATH\views\backend\men\letter.php [ 2 ] in Z:\home\vdate\www\application\views\backend\men\letter.php:2
2014-08-18 17:00:26 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\men\letter.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 2, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(268): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\men\letter.php:2
2014-08-18 17:01:52 --- CRITICAL: Kohana_Exception [ 0 ]: The last_name property does not exist in the Model_Men class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 17:01:52 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('last_name')
#1 Z:\home\vdate\www\application\views\backend\men\letter.php(2): Kohana_ORM->__get('last_name')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(268): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-18 17:05:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_AdminLetters' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-18 17:05:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 17:05:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Men::send_letter_from_admin() ~ APPPATH\classes\Controller\Backend\Men.php [ 173 ] in file:line
2014-08-18 17:05:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-18 17:07:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: settings ~ APPPATH\classes\Model\Men.php [ 217 ] in Z:\home\vdate\www\application\classes\Model\Men.php:217
2014-08-18 17:07:05 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(217): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 217, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(173): Model_Men->send_letter_from_admin('1', 'emailman1@email...', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_letter()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:217
2014-08-18 17:07:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\classes\Model\Men.php [ 227 ] in Z:\home\vdate\www\application\classes\Model\Men.php:227
2014-08-18 17:07:26 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 227, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(173): Model_Men->send_letter_from_admin('1', 'emailman1@email...', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_letter()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:227
2014-08-18 17:07:45 --- DEBUG: Email to emailman1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBzdWJqZWN0?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:228
2014-08-18 17:10:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\Men.php [ 218 ] in Z:\home\vdate\www\application\classes\Model\Men.php:218
2014-08-18 17:10:12 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 218, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(173): Model_Men->send_letter_from_admin('1', 'emailman1@email...', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_letter()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:218
2014-08-18 17:10:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Model\Men.php [ 218 ] in Z:\home\vdate\www\application\classes\Model\Men.php:218
2014-08-18 17:10:27 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(218): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 218, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Men.php(173): Model_Men->send_letter_from_admin('1', 'emailman1@email...', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Men->action_letter()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Men))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:218
2014-08-18 17:10:49 --- DEBUG: Email to emailman1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBzdWJqZWN0?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:231
2014-08-18 17:11:33 --- DEBUG: Email to email2man@email.com with subject '=?UTF-8?B?dmRhdGUgLSBzdWJqZWN0?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Men.php:231
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-22 07:53:03 --- CRITICAL: Kohana_Exception [ 0 ]: The page_title property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 07:53:03 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('page_title')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(22): Kohana_ORM->__get('page_title')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 07:53:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 07:53:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 07:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 07:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 07:53:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 07:53:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:02:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\frontend\profile\girl.php [ 111 ] in file:line
2014-08-22 08:02:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:02:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:02:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:02:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:02:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:02:40 --- CRITICAL: Kohana_Exception [ 0 ]: The mirital_status property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 08:02:40 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('mirital_status')
#1 Z:\home\vdate\www\application\views\frontend\profile\girl.php(58): Kohana_ORM->__get('mirital_status')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(87): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 08:03:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:03:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:35:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\widgets\Menu\MainMenuLogged.php [ 15 ] in Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php:15
2014-08-22 08:35:56 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 15, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_MainMenuLogged))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend.php(53): Widget::load('Menu_MainMenuLo...')
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(9): Controller_Frontend->before()
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Profile->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php:15
2014-08-22 08:36:53 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\widgets\Menu\MainMenuLogged.php [ 15 ] in Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php:15
2014-08-22 08:36:53 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 15, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_MainMenuLogged))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend.php(53): Widget::load('Menu_MainMenuLo...')
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(9): Controller_Frontend->before()
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Profile->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php:15
2014-08-22 08:38:36 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: girl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:38:36 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('girl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\MainMenuLogged.php(16): Kohana_Route::url('girl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_MainMenuLogged))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend.php(53): Widget::load('Menu_MainMenuLo...')
#13 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(9): Controller_Frontend->before()
#14 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Profile->before()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#17 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#20 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:41:14 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 08:41:14 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(31): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 08:44:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:44:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:44:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:44:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:44:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\views\widgets\Chat\OnlineInMainPage.php [ 48 ] in file:line
2014-08-22 08:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:44:58 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: profile ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:44:58 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('profile')
#1 Z:\home\vdate\www\application\views\widgets\Chat\OnlineInMainPage.php(15): Kohana_Route::url('profile', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Chat_OnlineInMainPage))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Main.php(13): Widget::load('Chat_OnlineInMa...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Main))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:47:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 08:47:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:47:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:47:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:47:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:50:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:50:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:51:57 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defautl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:51:57 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defautl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(28): Kohana_Route::url('defautl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(14): Widget::load('Menu_LeftProfil...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Man->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:51:58 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 08:51:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:52:09 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defautl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:52:09 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defautl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(28): Kohana_Route::url('defautl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(14): Widget::load('Menu_LeftProfil...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Man->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:52:09 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/man/settings could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 08:52:09 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/man/se...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/man/se...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(60): Kohana_View::factory('frontend/man/se...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Man->action_settings()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 08:52:53 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defautl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:52:53 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defautl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(28): Kohana_Route::url('defautl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(14): Widget::load('Menu_LeftProfil...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Man->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:52:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:53:40 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defautl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:53:40 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defautl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(28): Kohana_Route::url('defautl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(14): Widget::load('Menu_LeftProfil...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Man->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:53:51 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: defautl ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:53:51 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('defautl')
#1 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(28): Kohana_Route::url('defautl', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#11 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#12 Z:\home\vdate\www\application\classes\Controller\Frontend\Man.php(14): Widget::load('Menu_LeftProfil...')
#13 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Man->before()
#14 [internal function]: Kohana_Controller->execute()
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Man))
#16 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#19 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-22 08:53:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:53:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:54:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:54:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:54:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:55:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:55:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:57:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\widgets\Menu\LeftProfileMenu.php [ 46 ] in file:line
2014-08-22 08:57:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 08:57:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: controller ~ APPPATH\views\widgets\Menu\LeftProfileMenu.php [ 10 ] in Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php:10
2014-08-22 08:57:47 --- DEBUG: #0 Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu_LeftProfileMenu))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\application\classes\Widget.php(72): Kohana_Request->execute()
#10 Z:\home\vdate\www\application\classes\Widget.php(33): Widget->render()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(14): Widget::load('Menu_LeftProfil...')
#12 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Girl->before()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\vdate\www\application\views\widgets\Menu\LeftProfileMenu.php:10
2014-08-22 08:59:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 08:59:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 10:16:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'pages.url' in 'where clause' [ SELECT `pages_languages`.`name` AS `name`, `pages_languages`.`page_h1` AS `page_h1`, `pages_languages`.`page_title` AS `page_title`, `pages_languages`.`page_keywords` AS `page_keywords`, `pages_languages`.`page_description` AS `page_description`, `pages_languages`.`text` AS `text`, `page`.`id` AS `id`, `page`.`status` AS `status`, `page`.`url` AS `url`, `page`.`sort` AS `sort`, `page`.`menu` AS `menu`, `page`.`link_only` AS `link_only`, `page`.`seo_only` AS `seo_only`, `page`.`created_at` AS `created_at`, `page`.`updated_at` AS `updated_at`, `page`.`show_footer` AS `show_footer` FROM `pages` AS `page` JOIN `pages_languages` ON (`pages`.`id` = `pages_languages`.`page_id`) WHERE `pages_languages`.`language` = 'en' AND `pages`.`url` = 'attention-for-girl-account' AND `pages`.`status` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 10:16:55 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pages_l...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Pages.php(136): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(21): Model_Pages::get_page_by_url('attention-for-g...', 'en')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 10:17:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'pages.url' in 'where clause' [ SELECT `pages_languages`.`name` AS `name`, `pages_languages`.`page_h1` AS `page_h1`, `pages_languages`.`page_title` AS `page_title`, `pages_languages`.`page_keywords` AS `page_keywords`, `pages_languages`.`page_description` AS `page_description`, `pages_languages`.`text` AS `text`, `page`.`id` AS `id`, `page`.`status` AS `status`, `page`.`url` AS `url`, `page`.`sort` AS `sort`, `page`.`menu` AS `menu`, `page`.`link_only` AS `link_only`, `page`.`seo_only` AS `seo_only`, `page`.`created_at` AS `created_at`, `page`.`updated_at` AS `updated_at`, `page`.`show_footer` AS `show_footer` FROM `pages` AS `page` JOIN `pages_languages` ON (`pages`.`id` = `pages_languages`.`page_id`) WHERE `pages_languages`.`language` = 'en' AND `pages`.`url` = 'attention-for-girl-account' AND `pages`.`status` = 1 LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 10:17:28 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pages_l...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Pages.php(136): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(21): Model_Pages::get_page_by_url('attention-for-g...', 'en')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 10:21:50 --- CRITICAL: Kohana_Exception [ 0 ]: The girls property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 10:21:50 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('girls')
#1 Z:\home\vdate\www\application\views\frontend\girl\profile.php(5): Kohana_ORM->__get('girls')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 10:29:59 --- CRITICAL: Kohana_Exception [ 0 ]: The h1 property does not exist in the Model_Page class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 10:29:59 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('h1')
#1 Z:\home\vdate\www\application\views\frontend\girl\profile.php(26): Kohana_ORM->__get('h1')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 11:13:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:13:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:15:05 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 11:15:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:17:54 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 11:17:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:17:56 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 11:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:18:22 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 11:18:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:18:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: time ~ APPPATH\classes\Controller\Frontend\GirlAccount.php [ 77 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:77
2014-08-22 11:18:40 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(77): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 77, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:77
2014-08-22 11:18:49 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/manonline/settings could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 11:18:49 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/manonl...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/manonl...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(79): Kohana_View::factory('frontend/manonl...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 11:19:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:19:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:19:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:20:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:20:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:20:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:20:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:21:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:21:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:21:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:29:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sort ~ APPPATH\classes\Controller\Frontend\GirlAccount.php [ 89 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:89
2014-08-22 11:29:40 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 89, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php:89
2014-08-22 11:30:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:30:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:30:04 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:30:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:30:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:30:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:30:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:31:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:31:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:32:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:32:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:32:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:32:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:32:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:32:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:32:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:34:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:35:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:35:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:36:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:36:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:36:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:40:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:40:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:48:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:48:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:48:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:50:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:50:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:50:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:51:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:51:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:51:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:52:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:52:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:52:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:54:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:55:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:57:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:57:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:57:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:57:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 11:59:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 11:59:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:00:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:00:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:00:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:10:02 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo`, `photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:10:02 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(275): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698302, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:11 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users_photos.default_photo' in 'field list' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `users_photos`.`default_photo` AS `default_photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:11 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698371, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_photos.default_photo' in 'field list' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_photo` AS `default_photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:22 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698382, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_photos.default_photo' in 'field list' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_photo` AS `default_photo`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_photo` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:11:44 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698404, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:12:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:12:15 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698435, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:12:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:12:40 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698460, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:13:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = `1`) WHERE `user`.`status` = '1' ORDER BY RAND() LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:13:45 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(278): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(92): Model_Men::get_online(1408698525, '1', NULL)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 12:14:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:16:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 12:16:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 12:16:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:18:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: imet ~ APPPATH\views\frontend\girlaccount\manonline.php [ 29 ] in Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php:29
2014-08-22 13:18:53 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 29, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php:29
2014-08-22 13:19:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:19:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:19:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:19:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:19:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:19:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:24:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:30:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: wight ~ APPPATH\classes\Model\Men.php [ 294 ] in Z:\home\vdate\www\application\classes\Model\Men.php:294
2014-08-22 13:30:55 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Men.php(294): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 294, Array)
#1 Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php(34): Model_Men->get_weight()
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\application\classes\Model\Men.php:294
2014-08-22 13:31:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:32:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:32:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:33:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:33:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:34:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:34:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:37:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:43:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: weight ~ APPPATH\classes\Model\Weight.php [ 88 ] in Z:\home\vdate\www\application\classes\Model\Weight.php:88
2014-08-22 13:43:18 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Weight.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 88, Array)
#1 Z:\home\vdate\www\application\classes\Model\Girls.php(492): Model_Weight->get_weight_kg_ibs()
#2 Z:\home\vdate\www\application\views\frontend\profile\girl.php(49): Model_Girls->get_weight()
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(56): Kohana_View->__toString()
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#8 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#9 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#11 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#12 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#13 [internal function]: Kohana_Controller->execute()
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#15 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#17 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#18 {main} in Z:\home\vdate\www\application\classes\Model\Weight.php:88
2014-08-22 13:45:41 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Model_Height::cm_to_feet() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Model\Girls.php [ 498 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:498
2014-08-22 13:45:41 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(498): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\vdate\w...', 498, Array)
#1 Z:\home\vdate\www\application\views\frontend\profile\girl.php(48): Model_Girls->get_height()
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(56): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:498
2014-08-22 13:46:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:46:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:47:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:47:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:47:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:47:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:47:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:47:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:47:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:47:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:48:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:48:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 13:53:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 13:53:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:02:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:02:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:03:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:05:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:06:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:06:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:06:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:06:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:06:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:06:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:06:30 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.firstname' in 'order clause' [ SELECT `men`.`firstname` AS `firstname`, `men`.`city` AS `city`, `men`.`country` AS `country`, `men`.`birthday` AS `birthday`, `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` JOIN `men` ON (`men`.`user_id` = `user`.`id`) LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `user`.`status` = '1' ORDER BY `user`.`firstname` ASC LIMIT 2 OFFSET 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:06:30 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`f...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(295): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\GirlAccount.php(100): Model_Men::get_online(1408705290, '2', 'name', 2)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_GirlAccount->action_manOnline()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:07:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:07:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:08:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:08:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:08:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:08:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:08:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:08:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:09:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:25:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:25:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:27:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:27:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:31:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:31:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:31:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 14:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 14:43:30 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:419
2014-08-22 14:43:30 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(419): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(23): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:419
2014-08-22 14:43:51 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` WHERE `user_id` = '6' AND `users`.`status` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:43:51 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(420): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(23): Model_Girls::get_girl_frontend('6')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:44:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.status' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` WHERE `id` = '6' AND `users`.`status` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:44:12 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(420): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(23): Model_Girls::get_girl_frontend('6')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:44:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.status' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` WHERE `id` = '6' AND `users`.`status` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:44:13 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(420): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(23): Model_Girls::get_girl_frontend('6')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:44:22 --- CRITICAL: Kohana_Exception [ 0 ]: The birthday property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:44:22 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('birthday')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(24): Kohana_ORM->__get('birthday')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:46:58 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `user_photos`.`photo` AS `photo`, `user_photos`.`default_image` AS `default_image`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status` FROM `users` AS `user` LEFT JOIN `user_photos` ON (`user_photos`.`user_id` = `user`.`id` AND `user_photos`.`default_image` = 1) WHERE `id` = '6' AND `user`.`status` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:46:58 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user_ph...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Girls.php(427): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(23): Model_Girls::get_girl_frontend('6')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 14:47:29 --- CRITICAL: Kohana_Exception [ 0 ]: The birthday property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:47:29 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('birthday')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(24): Kohana_ORM->__get('birthday')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:49:17 --- CRITICAL: Kohana_Exception [ 0 ]: The birthday property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:49:17 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('birthday')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(24): Kohana_ORM->__get('birthday')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:49:19 --- CRITICAL: Kohana_Exception [ 0 ]: The birthday property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 14:49:19 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('birthday')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(24): Kohana_ORM->__get('birthday')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:06:50 --- CRITICAL: Kohana_Exception [ 0 ]: The birthday property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:06:50 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('birthday')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(24): Kohana_ORM->__get('birthday')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_girl()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:06:59 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:06:59 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 Z:\home\vdate\www\application\views\frontend\profile\girl.php(5): Kohana_ORM->__get('photo')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(56): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:07:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:07:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:08:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Girls::get_age() ~ APPPATH\views\frontend\profile\girl.php [ 31 ] in file:line
2014-08-22 15:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:08:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:09:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:09:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:16:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: man ~ APPPATH\views\frontend\girlaccount\manonline.php [ 32 ] in Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php:32
2014-08-22 15:16:03 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 32, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php:32
2014-08-22 15:16:25 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:16:25 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user_id')
#1 Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php(32): Kohana_ORM->__get('user_id')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:17:12 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:17:12 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user_id')
#1 Z:\home\vdate\www\application\views\frontend\girlaccount\manonline.php(32): Kohana_ORM->__get('user_id')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_GirlAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:17:39 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 15:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:17:59 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-22 15:17:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:18:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'girls.user_id' in 'on clause' [ SELECT `men`.`id` AS `id`, `men`.`user_id` AS `user_id`, `men`.`firstname` AS `firstname`, `men`.`lastname` AS `lastname`, `men`.`email` AS `email`, `men`.`bank_card` AS `bank_card`, `men`.`birthday` AS `birthday`, `men`.`country` AS `country`, `men`.`region` AS `region`, `men`.`city` AS `city`, `men`.`height` AS `height`, `men`.`weight` AS `weight`, `men`.`eyes` AS `eyes`, `men`.`hair` AS `hair`, `men`.`place_work` AS `place_work`, `men`.`education` AS `education`, `men`.`religion` AS `religion`, `men`.`marital_status` AS `marital_status`, `men`.`smoking` AS `smoking`, `men`.`drinking` AS `drinking`, `men`.`children` AS `children`, `men`.`phone` AS `phone`, `men`.`hobbies` AS `hobbies`, `men`.`about` AS `about`, `men`.`relationships` AS `relationships`, `men`.`created_at` AS `created_at`, `men`.`updated_at` AS `updated_at`, `men`.`balance` AS `balance` FROM `men` AS `men` JOIN `users` ON (`users`.`id` = `girls`.`user_id`) WHERE `user_id` = '14' AND `users`.`status` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 15:18:18 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `men`.`i...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 Z:\home\vdate\www\application\classes\Model\Men.php(314): Kohana_ORM->find()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(44): Model_Men::get_man_frontend('14')
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_man()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-22 15:18:31 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\frontend\profile\man.php [ 5 ] in Z:\home\vdate\www\application\views\frontend\profile\man.php:5
2014-08-22 15:18:31 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\profile\man.php(5): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 5, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(56): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\profile\man.php:5
2014-08-22 15:18:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:18:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:19:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: girl ~ APPPATH\classes\Controller\Frontend\Profile.php [ 45 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:45
2014-08-22 15:19:18 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 45, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_man()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:45
2014-08-22 15:26:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:26:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:26:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:27:14 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 93 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:93
2014-08-22 15:27:14 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(93): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\vdate\w...', 93, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_manOnline()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:93
2014-08-22 15:27:51 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Frontend\Profile.php [ 64 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:64
2014-08-22 15:27:51 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(64): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\vdate\w...', 64, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_manOnline()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:64
2014-08-22 15:28:07 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 93 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:93
2014-08-22 15:28:07 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(93): Kohana_Core::error_handler(2, 'Attempt to assi...', 'Z:\home\vdate\w...', 93, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_manOnline()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:93
2014-08-22 15:31:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:31:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:31:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:31:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:31:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:31:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:43:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:43:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:43:16 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/manaccount/girlonline could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 15:43:16 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/manacc...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/manacc...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(95): Kohana_View::factory('frontend/manacc...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_womenOnline()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 15:45:25 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/manaccount/girlonline could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 15:45:25 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/manacc...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/manacc...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(95): Kohana_View::factory('frontend/manacc...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_womenOnline()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-22 15:47:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: men ~ APPPATH\views\frontend\manaccount\womenonline.php [ 1 ] in Z:\home\vdate\www\application\views\frontend\manaccount\womenonline.php:1
2014-08-22 15:47:54 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\manaccount\womenonline.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 1, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\manaccount\womenonline.php:1
2014-08-22 15:47:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:47:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:48:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:48:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:48:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:48:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:50:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:52:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:52:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:56:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:57:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:57:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:59:04 --- CRITICAL: Kohana_Exception [ 0 ]: The girls property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:59:04 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('girls')
#1 Z:\home\vdate\www\application\views\frontend\manaccount\womenonline.php(37): Kohana_ORM->__get('girls')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layout.php(63): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(89): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-22 15:59:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:59:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:59:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:59:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 15:59:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 15:59:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:03:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:03:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:03:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:04:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:04:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:05:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:05:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:09:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:09:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:09:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:11:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:11:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:12:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:12:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:12:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:13:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:13:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:22:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:22:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:23:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:23:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:23:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:23:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:23:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:23:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:23:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:25:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:25:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:25:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:25:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:26:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:26:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:26:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:26:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:26:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:27:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:27:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:44:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:45:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:45:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:45:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-22 16:45:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-22 16:45:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
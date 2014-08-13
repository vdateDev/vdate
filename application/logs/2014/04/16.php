<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-16 02:17:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_PageLanguage::add_language() ~ APPPATH\classes\Model\Page.php [ 44 ] in file:line
2014-04-16 02:17:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 02:30:41 --- CRITICAL: ReflectionException [ 0 ]: Function page_h1() does not exist ~ MODPATH\orm\classes\Kohana\ORM.php [ 1215 ] in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:1215
2014-04-16 02:30:41 --- DEBUG: #0 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(1215): ReflectionFunction->__construct('page_h1')
#1 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(732): Kohana_ORM->run_filter('page_h1', 'Search h1 EN')
#2 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('page_h1', 'Search h1 EN')
#3 Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('page_h1', 'Search h1 EN')
#4 Z:\home\ebg\www\application\classes\Model\PageLanguage.php(49): Kohana_ORM->values(Array)
#5 Z:\home\ebg\www\application\classes\Model\Page.php(44): Model_PageLanguage->add_language(3, 'en', Array)
#6 Z:\home\ebg\www\application\classes\Controller\Backend\Pages.php(23): Model_Page->add_page(Array, Object(Database_MySQL_Result))
#7 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Pages->action_add()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Pages))
#10 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\ebg\www\modules\orm\classes\Kohana\ORM.php:1215
2014-04-16 02:31:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\classes\Controller\Backend\Pages.php [ 56 ] in Z:\home\ebg\www\application\classes\Controller\Backend\Pages.php:56
2014-04-16 02:31:16 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Backend\Pages.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 56, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Pages->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Pages))
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ebg\www\application\classes\Controller\Backend\Pages.php:56
2014-04-16 03:57:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Infos' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-04-16 03:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 04:06:37 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/info/edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-04-16 04:06:37 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/info/ed...')
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/info/ed...', NULL)
#2 Z:\home\ebg\www\application\classes\Controller\Backend\Infos.php(72): Kohana_View::factory('backend/info/ed...')
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Infos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Infos))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-04-16 04:09:54 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/info/edit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-04-16 04:09:54 --- DEBUG: #0 Z:\home\ebg\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/info/ed...')
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/info/ed...', NULL)
#2 Z:\home\ebg\www\application\classes\Controller\Backend\Infos.php(72): Kohana_View::factory('backend/info/ed...')
#3 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Infos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Infos))
#6 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\ebg\www\system\classes\Kohana\View.php:137
2014-04-16 04:13:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Backend\Infos.php [ 54 ] in Z:\home\ebg\www\application\classes\Controller\Backend\Infos.php:54
2014-04-16 04:13:09 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Backend\Infos.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 54, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Infos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Infos))
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\ebg\www\application\classes\Controller\Backend\Infos.php:54
2014-04-16 05:47:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Letter::get_letters_backend() ~ APPPATH\classes\Controller\Backend\Letters.php [ 8 ] in file:line
2014-04-16 05:47:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:38:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_LetterLanguage' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-04-16 06:38:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:45:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileds_list ~ APPPATH\views\backend\letters\edit.php [ 35 ] in Z:\home\ebg\www\application\views\backend\letters\edit.php:35
2014-04-16 06:45:13 --- DEBUG: #0 Z:\home\ebg\www\application\views\backend\letters\edit.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 35, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\backend\layout.php(131): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(42): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Letters))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ebg\www\application\views\backend\letters\edit.php:35
2014-04-16 06:46:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: fileds_list ~ APPPATH\views\backend\letters\edit.php [ 35 ] in Z:\home\ebg\www\application\views\backend\letters\edit.php:35
2014-04-16 06:46:39 --- DEBUG: #0 Z:\home\ebg\www\application\views\backend\letters\edit.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\ebg\www...', 35, Array)
#1 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#2 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#3 Z:\home\ebg\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\ebg\www\application\views\backend\layout.php(131): Kohana_View->__toString()
#5 Z:\home\ebg\www\system\classes\Kohana\View.php(61): include('Z:\home\ebg\www...')
#6 Z:\home\ebg\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\ebg\www...', Array)
#7 Z:\home\ebg\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\ebg\www\application\classes\Controller\Base.php(42): Kohana_Controller_Template->after()
#9 Z:\home\ebg\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Letters))
#12 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\ebg\www\application\views\backend\letters\edit.php:35
2014-04-16 06:48:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Letter::edit_info() ~ APPPATH\classes\Controller\Backend\Letters.php [ 54 ] in file:line
2014-04-16 06:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
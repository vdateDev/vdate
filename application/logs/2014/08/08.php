<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-08 07:48:45 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 07:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 07:49:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 07:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 07:50:00 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 07:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 07:50:06 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 07:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 07:54:31 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 07:54:31 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 07:55:10 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 07:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 07:57:28 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 07:57:28 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:02:31 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:02:31 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:04:53 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:04:53 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:05:11 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:05:11 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:09:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categoty ~ APPPATH\classes\Controller\Backend\Sprav.php [ 11 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:09:13 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:09:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categoty ~ APPPATH\classes\Controller\Backend\Sprav.php [ 11 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:09:27 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:09:34 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:09:34 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:09:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: categoty ~ APPPATH\classes\Controller\Backend\Sprav.php [ 11 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:09:40 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php:11
2014-08-08 08:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\backend\sprav\eyes\edit.php [ 37 ] in Z:\home\vdate\www\application\views\backend\sprav\eyes\edit.php:37
2014-08-08 08:16:24 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\sprav\eyes\edit.php(37): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 37, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(233): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\sprav\eyes\edit.php:37
2014-08-08 08:16:54 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 08:16:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 08:18:49 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/sprav//index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:18:49 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/sprav//...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/sprav//...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Sprav.php(9): Kohana_View::factory('backend/sprav//...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Sprav->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 08:31:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\backend\layout.php [ 114 ] in Z:\home\vdate\www\application\views\backend\layout.php:114
2014-08-08 08:31:35 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\layout.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 114, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\application\views\backend\layout.php:114
2014-08-08 08:32:56 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: category ~ SYSPATH\classes\Kohana\Route.php [ 572 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-08 08:32:56 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(581): {closure}('<directory>/<co...', true)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(221): Kohana_Route->uri(Array)
#2 Z:\home\vdate\www\application\views\backend\layout.php(110): Kohana_Route::url('backend_sprav', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#7 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#10 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:581
2014-08-08 09:34:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Height' not found ~ APPPATH\classes\Controller\Backend\Height.php [ 7 ] in file:line
2014-08-08 09:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:34:45 --- CRITICAL: Database_Exception [ 1146 ]: Table 'vdate.height' doesn't exist [ SHOW FULL COLUMNS FROM `height` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-08 09:34:45 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('height')
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\vdate\www\application\classes\Model\Height.php(49): Kohana_ORM::factory('Height')
#7 Z:\home\vdate\www\application\classes\Controller\Backend\Height.php(7): Model_Height::get_height()
#8 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Height->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Height))
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-08 09:35:06 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/heihgt/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 09:35:06 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/heihgt/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/heihgt/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Height.php(9): Kohana_View::factory('backend/heihgt/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Height->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Height))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 09:41:03 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: backend_sprav ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-08 09:41:03 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('backend_sprav')
#1 Z:\home\vdate\www\application\views\backend\layout.php(110): Kohana_Route::url('backend_sprav', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Height))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-08 09:41:34 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 09:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:44:37 --- CRITICAL: Kohana_Exception [ 0 ]: The default property does not exist in the Model_Height class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-08 09:44:37 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('default')
#1 Z:\home\vdate\www\application\views\backend\height\index.php(32): Kohana_ORM->__get('default')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(257): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Height))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-08 09:45:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: groups ~ APPPATH\views\backend\height\edit.php [ 26 ] in Z:\home\vdate\www\application\views\backend\height\edit.php:26
2014-08-08 09:45:47 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\height\edit.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 26, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(257): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Height))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\height\edit.php:26
2014-08-08 09:57:39 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 09:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:57:40 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 09:57:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:57:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Width' not found ~ APPPATH\classes\Controller\Backend\Width.php [ 7 ] in file:line
2014-08-08 09:57:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:58:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Width::get_width() ~ APPPATH\classes\Controller\Backend\Width.php [ 7 ] in file:line
2014-08-08 09:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 09:58:21 --- CRITICAL: Database_Exception [ 1146 ]: Table 'vdate.width' doesn't exist [ SHOW FULL COLUMNS FROM `width` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-08 09:58:21 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('width')
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 Z:\home\vdate\www\application\classes\Model\Width.php(49): Kohana_ORM::factory('Width')
#7 Z:\home\vdate\www\application\classes\Controller\Backend\Width.php(7): Model_Width::get_width()
#8 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Width->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Width))
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\MySQL.php:359
2014-08-08 10:01:12 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:01:19 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/weight/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:01:19 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/weight/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/weight/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php(9): Kohana_View::factory('backend/weight/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Weight->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:01:41 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/weight/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:01:41 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/weight/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/weight/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php(9): Kohana_View::factory('backend/weight/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Weight->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:01:59 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/weight/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:01:59 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/weight/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/weight/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php(9): Kohana_View::factory('backend/weight/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Weight->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:02:00 --- CRITICAL: View_Exception [ 0 ]: The requested view backend/weight/index could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:02:00 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('backend/weight/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('backend/weight/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php(9): Kohana_View::factory('backend/weight/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Weight->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-08 10:02:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: weight ~ APPPATH\classes\Controller\Backend\Weight.php [ 10 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php:10
2014-08-08 10:02:24 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 10, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Weight->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Weight.php:10
2014-08-08 10:03:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: height ~ APPPATH\views\backend\weight\index.php [ 11 ] in Z:\home\vdate\www\application\views\backend\weight\index.php:11
2014-08-08 10:03:00 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\weight\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 11, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(269): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Weight))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\weight\index.php:11
2014-08-08 10:03:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Width' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-08-08 10:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:05:05 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:07:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:08:32 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:08:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:08:53 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:08:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:11:15 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 79 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-08-08 10:11:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\vdate\w...', 423, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(423): preg_match('#^(?P<directory...', 'backend/giftgro...', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\vdate\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-08-08 10:11:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 79 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-08-08 10:11:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\vdate\w...', 423, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(423): preg_match('#^(?P<directory...', 'backend/giftgro...', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\vdate\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-08-08 10:11:17 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 79 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2014-08-08 10:11:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\vdate\w...', 423, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Route.php(423): preg_match('#^(?P<directory...', 'backend/giftgro...', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 Z:\home\vdate\www\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-08-08 10:14:16 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:14:27 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: backend ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-08 10:14:27 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(215): Kohana_Route::get('backend')
#1 Z:\home\vdate\www\application\views\backend\layout.php(51): Kohana_Route::url('backend', Array)
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:215
2014-08-08 10:14:39 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:14:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:15:12 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:15:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:16:24 --- CRITICAL: Kohana_Exception [ 0 ]: Required route parameter not passed: category ~ SYSPATH\classes\Kohana\Route.php [ 572 ] in Z:\home\vdate\www\system\classes\Kohana\Route.php:554
2014-08-08 10:16:24 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\Route.php(554): {closure}('<category>(/<ac...', false)
#1 [internal function]: {closure}(Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Route.php(568): preg_replace_callback('#(?:<([a-zA-Z0-...', Object(Closure), '<directory>/<co...')
#3 Z:\home\vdate\www\system\classes\Kohana\Route.php(581): {closure}('<directory>/<co...', true)
#4 Z:\home\vdate\www\system\classes\Kohana\Route.php(221): Kohana_Route->uri(Array)
#5 Z:\home\vdate\www\application\views\backend\layout.php(114): Kohana_Route::url('backend_sprav', Array)
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Sprav))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\system\classes\Kohana\Route.php:554
2014-08-08 10:17:43 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:17:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:17:46 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:17:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:18:08 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:18:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:18:12 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:18:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:18:22 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:18:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:18:33 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:19:01 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:19:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:20:04 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:20:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:23:29 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:23:31 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:23:44 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:28:43 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:28:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:29:23 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:29:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:29:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:30:36 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:30:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:30:37 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:30:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:30:47 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:30:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:10 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 10:31:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:31:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:31:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:37:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:37:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:37:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:37:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:37:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:37:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:37:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 10:37:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 10:55:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\Controller\Backend\Gifts.php [ 19 ] in Z:\home\vdate\www\application\classes\Controller\Backend\Gifts.php:19
2014-08-08 10:55:56 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Backend\Gifts.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 19, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Gifts->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Gifts))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Backend\Gifts.php:19
2014-08-08 11:02:09 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 11:02:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 11:02:36 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 11:02:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 11:56:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 11:56:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 11:56:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 11:56:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 11:56:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_VirtualGiftGroups' not found ~ APPPATH\classes\Controller\Backend\VirtualGiftGroups.php [ 7 ] in file:line
2014-08-08 11:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 12:10:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_VirualGiftGroups' not found ~ APPPATH\views\backend\virtualGiftGroups\tree.php [ 33 ] in file:line
2014-08-08 12:10:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 12:11:53 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 12:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 12:12:38 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 12:12:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 12:13:15 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 12:13:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 12:52:09 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-08 12:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 13:10:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_VirtuakGiftsLanguage' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 13:10:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 13:15:07 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'gifts.group_id' in 'where clause' [ SELECT COUNT(`virtualgifts`.`id`) AS `records_found` FROM `virtualgifts` AS `virtualgifts` WHERE `gifts`.`group_id` = '2' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-08 13:15:07 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`v...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\VirtualGifts.php(242): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Backend\VirtualGifts.php(19): Model_VirtualGifts::count_backend('2', '2', '', '')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_VirtualGifts->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_VirtualGifts))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-08 13:58:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 13:58:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 14:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 14:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 14:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 14:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Agency' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-08 14:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:08:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\views\backend\agency\index.php [ 12 ] in Z:\home\vdate\www\application\views\backend\agency\index.php:12
2014-08-08 14:08:39 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 12, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\index.php:12
2014-08-08 14:11:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 14:11:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:11:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 14:11:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:11:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 14:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:11:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 14:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 14:17:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\views\backend\agency\add.php [ 32 ] in Z:\home\vdate\www\application\views\backend\agency\add.php:32
2014-08-08 14:17:29 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\add.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 32, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\add.php:32
2014-08-08 14:19:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\backend\agency\add.php [ 24 ] in Z:\home\vdate\www\application\views\backend\agency\add.php:24
2014-08-08 14:19:47 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\add.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 24, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\add.php:24
2014-08-08 14:20:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\backend\agency\add.php [ 33 ] in Z:\home\vdate\www\application\views\backend\agency\add.php:33
2014-08-08 14:20:23 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\add.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 33, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\add.php:33
2014-08-08 15:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 15:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 15:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 15:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 15:52:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 15:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 15:52:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 15:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:03:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\backend\agency\add.php [ 23 ] in Z:\home\vdate\www\application\views\backend\agency\add.php:23
2014-08-08 16:03:43 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\add.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 23, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\add.php:23
2014-08-08 16:29:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Agency::add_news() ~ APPPATH\classes\Controller\Backend\Agency.php [ 37 ] in file:line
2014-08-08 16:29:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:29:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\Model\Agency.php [ 39 ] in Z:\home\vdate\www\application\classes\Model\Agency.php:39
2014-08-08 16:29:24 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Agency.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 39, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Agency.php(37): Model_Agency->add_agency(Array, Array, Array, Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Agency->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Agency.php:39
2014-08-08 16:29:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: languages ~ APPPATH\classes\Model\Agency.php [ 57 ] in Z:\home\vdate\www\application\classes\Model\Agency.php:57
2014-08-08 16:29:45 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Agency.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 57, Array)
#1 Z:\home\vdate\www\application\classes\Controller\Backend\Agency.php(37): Model_Agency->add_agency(Array, Array, Array, Array)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Backend_Agency->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Agency.php:57
2014-08-08 16:35:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:35:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-08 16:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 16:38:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: banaficiary_name ~ APPPATH\views\backend\agency\edit.php [ 87 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:87
2014-08-08 16:38:58 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(87): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 87, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:87
2014-08-08 16:40:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: beneficiary_adress ~ APPPATH\views\backend\agency\edit.php [ 95 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:95
2014-08-08 16:40:03 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(95): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 95, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:95
2014-08-08 16:40:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: aba_swift-national_id ~ APPPATH\views\backend\agency\edit.php [ 107 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:107
2014-08-08 16:40:22 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(107): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 107, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:107
2014-08-08 16:40:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: beneficiary_bank_address ~ APPPATH\views\backend\agency\edit.php [ 111 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:111
2014-08-08 16:40:37 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 111, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:111
2014-08-08 16:41:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: bank_address ~ APPPATH\views\backend\agency\edit.php [ 124 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:124
2014-08-08 16:41:18 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(124): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 124, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:124
2014-08-08 16:44:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Agency::edit_agency() ~ APPPATH\classes\Controller\Backend\Agency.php [ 74 ] in file:line
2014-08-08 16:44:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-08 17:00:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: sertificate ~ APPPATH\views\backend\agency\edit.php [ 87 ] in Z:\home\vdate\www\application\views\backend\agency\edit.php:87
2014-08-08 17:00:08 --- DEBUG: #0 Z:\home\vdate\www\application\views\backend\agency\edit.php(87): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\vdate\w...', 87, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\backend\layout.php(305): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_Agency))
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\vdate\www\application\views\backend\agency\edit.php:87
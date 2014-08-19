<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-16 11:20:11 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 11:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 11:20:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 11:20:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 12:19:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: zna ~ APPPATH\classes\Model\Weight.php [ 81 ] in Z:\home\vdate\www\application\classes\Model\Weight.php:81
2014-08-16 12:19:55 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Weight.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 81, Array)
#1 Z:\home\vdate\www\application\views\frontend\girl\profile.php(49): Model_Weight::kg_to_ibs('55')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(87): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#11 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#14 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\vdate\www\application\classes\Model\Weight.php:81
2014-08-16 12:27:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: weight_ibs ~ APPPATH\views\frontend\girl\profile.php [ 49 ] in Z:\home\vdate\www\application\views\frontend\girl\profile.php:49
2014-08-16 12:27:18 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\girl\profile.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 49, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(87): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\girl\profile.php:49
2014-08-16 12:28:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: weight_ibs ~ APPPATH\views\frontend\girl\profile.php [ 49 ] in Z:\home\vdate\www\application\views\frontend\girl\profile.php:49
2014-08-16 12:28:02 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\girl\profile.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 49, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\vdate\www\application\views\frontend\layoutProfile.php(87): Kohana_View->__toString()
#5 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#7 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\vdate\www\application\classes\Controller\Base.php(49): Kohana_Controller_Template->after()
#9 Z:\home\vdate\www\application\classes\Controller\Frontend.php(69): Controller_Base->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\application\views\frontend\girl\profile.php:49
2014-08-16 15:29:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:29:19 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:31:12 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:31:12 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:31:13 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:31:13 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:31:43 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:31:43 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:32:32 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:32:32 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:32:33 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:32:33 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:34:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:34:39 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:35:01 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:35:01 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:37:04 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:37:04 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:37:18 --- CRITICAL: Kohana_Exception [ 0 ]: The weight_zna property does not exist in the Model_Girls class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:37:18 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('weight_zna')
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(28): Kohana_ORM->__get('weight_zna')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-16 15:38:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:08 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:09 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:10 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:11 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:38:11 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Girls.php(367): Kohana_ORM->find()
#1 Z:\home\vdate\www\application\classes\Controller\Frontend\Girl.php(20): Model_Girls::get_girl_frontend('6')
#2 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Girl->action_profile()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Girl))
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\vdate\www\application\classes\Model\Girls.php:367
2014-08-16 15:46:07 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 15:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 15:58:29 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/layout could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 15:58:29 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/layout')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/layout', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('frontend/layout')
#3 Z:\home\vdate\www\application\classes\Controller\Base.php(24): Kohana_Controller_Template->before()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend.php(22): Controller_Base->before()
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend->before()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 15:59:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors_profile ~ APPPATH\classes\Controller\Frontend\Auth.php [ 25 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:25
2014-08-16 15:59:13 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 25, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Auth.php:25
2014-08-16 15:59:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 15:59:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:04:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:22:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:22:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:22:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:22:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:23:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:23:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:23:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:23:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:24:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:24:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:27:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:45:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: month ~ APPPATH\views\frontend\auth\registration.php [ 95 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:95
2014-08-16 16:45:52 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 95, Array)
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
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:95
2014-08-16 16:46:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:48:03 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:48:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:49:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:49:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:50:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:51:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:51:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 16:52:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 16:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:09:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:09:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:11:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:11:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:11:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:11:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:12:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:12:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:21:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:21:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:21:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:21:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:21:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:21:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:22:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:22:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:27:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: language ~ APPPATH\views\frontend\auth\registration.php [ 142 ] in Z:\home\vdate\www\application\views\frontend\auth\registration.php:142
2014-08-16 17:27:00 --- DEBUG: #0 Z:\home\vdate\www\application\views\frontend\auth\registration.php(142): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 142, Array)
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
#16 {main} in Z:\home\vdate\www\application\views\frontend\auth\registration.php:142
2014-08-16 17:27:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:27:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:28:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:28:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:28:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:32:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:32:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:32:39 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:32:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:35:02 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:35:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:35:05 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:35:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:35:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:35:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:35:40 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:39:44 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/layout could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 17:39:44 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/layout')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/layout', NULL)
#2 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('frontend/layout')
#3 Z:\home\vdate\www\application\classes\Controller\Base.php(24): Kohana_Controller_Template->before()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend.php(22): Controller_Base->before()
#5 Z:\home\vdate\www\application\classes\Controller\Frontend\Pages.php(8): Controller_Frontend->before()
#6 Z:\home\vdate\www\system\classes\Kohana\Controller.php(69): Controller_Frontend_Pages->before()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#9 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 17:40:59 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:40:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:42:13 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:42:15 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:42:22 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:42:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:42:27 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:42:46 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:42:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:43:04 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:43:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:45:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:45:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:45:30 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:45:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:46:28 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:46:29 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:46:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:46:43 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:47:29 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:47:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:49:22 --- CRITICAL: View_Exception [ 0 ]: The requested view frontend/pages/contact could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 17:49:22 --- DEBUG: #0 Z:\home\vdate\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('frontend/pages/...')
#1 Z:\home\vdate\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('frontend/pages/...', NULL)
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Pages.php(104): Kohana_View::factory('frontend/pages/...')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Pages->action_contact()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Pages))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\system\classes\Kohana\View.php:137
2014-08-16 17:51:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:51:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:51:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:51:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:52:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 17:52:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 17:52:18 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-16 17:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 18:06:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-16 18:06:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-16 18:12:17 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?0J/QuNGB0YzQvNC+INGBINC60L7QvdGC0LDQutGC0L3QvtC5INGE0L7RgNC80Ysg0YHQsNC50YLQsCB2ZGF0ZQ==?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Controller\Frontend\Pages.php:90
2014-08-16 18:13:48 --- DEBUG: Email to test@test.ru with subject '=?UTF-8?B?Q29udGFjdCBmb3JtIHZkYXRl?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Controller\Frontend\Pages.php:90
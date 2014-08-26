<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-23 11:04:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 11:04:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 11:04:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 11:04:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 12:11:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 12:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 12:16:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 12:16:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 12:16:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 12:16:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 12:22:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:22:30 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:29:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Favorites::send_leter() ~ APPPATH\classes\Model\Favorites.php [ 21 ] in file:line
2014-08-23 12:29:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 12:31:21 --- CRITICAL: Kohana_Exception [ 0 ]: The id_favorite property does not exist in the Model_Favorites class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:31:21 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id_favorite')
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(31): Kohana_ORM->__get('id_favorite')
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:32:03 --- CRITICAL: Kohana_Exception [ 0 ]: The id_favorite property does not exist in the Model_Favorites class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:32:03 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id_favorite')
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(31): Kohana_ORM->__get('id_favorite')
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:32:48 --- CRITICAL: Kohana_Exception [ 0 ]: The id_favorite property does not exist in the Model_Favorites class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:32:48 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id_favorite')
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(31): Kohana_ORM->__get('id_favorite')
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '6')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 12:35:08 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:35:08 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:36:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:36:22 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:37:05 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:37:05 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:38:39 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 12:38:39 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:34:52 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:34:52 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:38:28 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:38:28 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:39:24 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 13:39:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:39:40 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 13:39:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:39:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 13:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:40:15 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 13:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:41:59 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 13:41:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:48:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:48:13 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 13:53:01 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in file:line
2014-08-23 13:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 13:54:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: favorite ~ APPPATH\classes\Model\Favorites.php [ 56 ] in Z:\home\vdate\www\application\classes\Model\Favorites.php:56
2014-08-23 13:54:27 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\Favorites.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 56, Array)
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '6')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\application\classes\Model\Favorites.php:56
2014-08-23 14:44:10 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\Profile.php [ 70 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 14:44:10 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 70, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php:70
2014-08-23 14:46:59 --- DEBUG: Email to email2@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:62
2014-08-23 15:04:58 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\User.php [ 240 ] in file:line
2014-08-23 15:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:05:36 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\User.php [ 240 ] in file:line
2014-08-23 15:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:06:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH\classes\Model\User.php [ 243 ] in Z:\home\vdate\www\application\classes\Model\User.php:243
2014-08-23 15:06:19 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\User.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 243, Array)
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(33): Model_User::get_profile('18')
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '18')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\application\classes\Model\User.php:243
2014-08-23 15:09:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: profile ~ APPPATH\classes\Model\User.php [ 243 ] in Z:\home\vdate\www\application\classes\Model\User.php:243
2014-08-23 15:09:01 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Model\User.php(243): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\vdate\w...', 243, Array)
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(33): Model_User::get_profile('18')
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(21): Model_Favorites->send_letter()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(70): Model_Favorites->add_favorit('8', '18')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\application\classes\Model\User.php:243
2014-08-23 15:10:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Man' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-08-23 15:10:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:11:02 --- DEBUG: Email to emailgirl6@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-23 15:16:20 --- DEBUG: Email to emailgirl6@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-23 15:35:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id_favorite' in 'where clause' [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorite` = '5' AND `id_who` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 15:35:20 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(66): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(71): Model_Favorites->is_favorite('5', '8')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 15:35:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id_favorite' in 'where clause' [ SELECT COUNT(`favorites`.`id`) AS `records_found` FROM `favorits` AS `favorites` WHERE `id_favorite` = '5' AND `id_who` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 15:35:40 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(`f...', false, Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1648): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\application\classes\Model\Favorites.php(66): Kohana_ORM->count_all()
#3 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(71): Model_Favorites->is_favorite('5', '8')
#4 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 15:36:32 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 15:36:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:37:51 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 15:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:41:05 --- CRITICAL: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_Favorites class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 15:41:05 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('count_all')
#1 Z:\home\vdate\www\application\classes\Model\Favorites.php(67): Kohana_ORM->__get('count_all')
#2 Z:\home\vdate\www\application\classes\Controller\Frontend\Profile.php(71): Model_Favorites->is_favorite('5', '8')
#3 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Profile->action_addToFavorite()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Profile))
#6 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 15:41:40 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 15:41:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:46:53 --- DEBUG: Email to email1@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-23 15:48:34 --- DEBUG: Email to emailgirl6@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-23 15:48:35 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 15:48:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:48:45 --- DEBUG: Email to email2@email.com with subject '=?UTF-8?B?dmRhdGUgLSBhZGQgdG8gZmF2b3JpdGU=?=' accepted for delivery. in Z:\home\vdate\www\application\classes\Model\Favorites.php:57
2014-08-23 15:48:46 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 15:48:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 15:52:39 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_AdminLetters class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 15:52:39 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 Z:\home\vdate\www\application\views\backend\adminletters\inbox.php(66): Kohana_ORM->__get('firstname')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 15:57:58 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_AdminLetters class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 15:57:58 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 Z:\home\vdate\www\application\views\backend\adminletters\show.php(2): Kohana_ORM->__get('firstname')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 16:03:13 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_AdminLetters class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 16:03:13 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 Z:\home\vdate\www\application\views\backend\adminletters\show.php(2): Kohana_ORM->__get('firstname')
#2 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#3 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#4 Z:\home\vdate\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\vdate\www\application\views\backend\layout.php(292): Kohana_View->__toString()
#6 Z:\home\vdate\www\system\classes\Kohana\View.php(61): include('Z:\home\vdate\w...')
#7 Z:\home\vdate\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\vdate\w...', Array)
#8 Z:\home\vdate\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\vdate\www\application\classes\Controller\Base.php(51): Kohana_Controller_Template->after()
#10 Z:\home\vdate\www\system\classes\Kohana\Controller.php(87): Controller_Base->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Backend_AdminLetters))
#13 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 16:04:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\classes\Controller\Backend\AdminLetters.php [ 60 ] in file:line
2014-08-23 16:04:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 16:05:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::ibnd() ~ APPPATH\classes\Controller\Backend\AdminLetters.php [ 67 ] in file:line
2014-08-23 16:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 16:16:14 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 16:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 16:16:48 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\Route.php [ 568 ] in file:line
2014-08-23 16:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 16:55:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Frontend\ManAccount.php [ 131 ] in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:131
2014-08-23 16:55:11 --- DEBUG: #0 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(131): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\vdate\w...', 131, Array)
#1 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#4 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php:131
2014-08-23 16:59:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'grils.heigtht' in 'field list' [ SELECT `favorits`.`id` AS `id_record`, `favorits`.`id_who` AS `id_who`, `girls`.`firstname` AS `firstname`, `girls`.`birthday` AS `birthday`, `girls`.`city` AS `city`, `girls`.`country` AS `country`, `girls`.`weight` AS `weight`, `grils`.`heigtht` AS `height`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`user`.`id` = `favorites`.`id_favorit`) JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) WHERE `favorits`.`id_who` = '8' ORDER BY `user`.`last_activity` DESC LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 16:59:52 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `favorit...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(112): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(131): Model_Favorites::get_man_favorites('8', '5', 'activity', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'grils.height' in 'field list' [ SELECT `favorits`.`id` AS `id_record`, `favorits`.`id_who` AS `id_who`, `girls`.`firstname` AS `firstname`, `girls`.`birthday` AS `birthday`, `girls`.`city` AS `city`, `girls`.`country` AS `country`, `girls`.`weight` AS `weight`, `grils`.`height` AS `height`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`user`.`id` = `favorites`.`id_favorit`) JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) WHERE `favorits`.`id_who` = '8' ORDER BY `user`.`last_activity` DESC LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:10 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `favorit...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(112): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(131): Model_Favorites::get_man_favorites('8', '5', 'activity', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'grils.heigth' in 'field list' [ SELECT `favorits`.`id` AS `id_record`, `favorits`.`id_who` AS `id_who`, `girls`.`firstname` AS `firstname`, `girls`.`birthday` AS `birthday`, `girls`.`city` AS `city`, `girls`.`country` AS `country`, `girls`.`weight` AS `weight`, `grils`.`heigth` AS `heigth`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`user`.`id` = `favorites`.`id_favorit`) JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) WHERE `favorits`.`id_who` = '8' ORDER BY `user`.`last_activity` DESC LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:25 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `favorit...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(112): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(131): Model_Favorites::get_man_favorites('8', '5', 'activity', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'favorites.id_favorit' in 'on clause' [ SELECT `favorits`.`id` AS `id_record`, `favorits`.`id_who` AS `id_who`, `girls`.`firstname` AS `firstname`, `girls`.`birthday` AS `birthday`, `girls`.`city` AS `city`, `girls`.`country` AS `country`, `girls`.`weight` AS `weight`, `girls`.`height` AS `height`, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login`, `user`.`admin` AS `admin`, `user`.`last_activity` AS `last_activity`, `user`.`status` AS `status`, `user`.`user_language` AS `user_language` FROM `users` AS `user` JOIN `favorits` ON (`user`.`id` = `favorites`.`id_favorit`) JOIN `girls` ON (`girls`.`user_id` = `user`.`id`) WHERE `favorits`.`id_who` = '8' ORDER BY `user`.`last_activity` DESC LIMIT 5 OFFSET 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:00:46 --- DEBUG: #0 Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `favorit...', 'Model_User', Array)
#1 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 Z:\home\vdate\www\application\classes\Model\Favorites.php(112): Kohana_ORM->find_all()
#4 Z:\home\vdate\www\application\classes\Controller\Frontend\ManAccount.php(131): Model_Favorites::get_man_favorites('8', '5', 'activity', 0)
#5 Z:\home\vdate\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_ManAccount->action_myFavorites()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\vdate\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_ManAccount))
#8 Z:\home\vdate\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\vdate\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\vdate\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\vdate\www\modules\database\classes\Kohana\Database\Query.php:251
2014-08-23 17:01:10 --- CRITICAL: Kohana_Exception [ 0 ]: The photo property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php:603
2014-08-23 17:01:10 --- DEBUG: #0 Z:\home\vdate\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('photo')
#1 Z:\home\vdate\www\application\views\frontend\manaccount\myfavorites.php(20): Kohana_ORM->__get('photo')
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
2014-08-23 18:50:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 18:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 18:53:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 18:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 18:53:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 18:53:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 18:54:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 18:54:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 18:55:01 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH\database\classes\Kohana\Database.php [ 590 ] in file:line
2014-08-23 18:55:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 18:55:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function controller() on a non-object ~ APPPATH\classes\Widget.php [ 53 ] in file:line
2014-08-23 18:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-23 19:39:56 --- CRITICAL: ErrorException [ 2 ]: strtolower() expects exactly 1 parameter, 0 given ~ APPPATH\views\frontend\manaccount\myfavorites.php [ 3 ] in file:line
2014-08-23 19:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'strtolower() ex...', 'Z:\home\vdate\w...', 3, Array)
#1 Z:\home\vdate\www\application\views\frontend\manaccount\myfavorites.php(3): strtolower()
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
#17 {main} in file:line
<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-24 09:34:11 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Frontend\Auth.php [ 131 ] in file:line
2014-04-24 09:34:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-24 09:38:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH\classes\Controller\Frontend\Auth.php [ 131 ] in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:131
2014-04-24 09:38:25 --- DEBUG: #0 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\ebg\www...', 131, Array)
#1 Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php(41): Controller_Frontend_Auth->send_confirm_link('test login', 'test34@test245....', 'ru', 'j3z5nkqgg1kobus...')
#2 Z:\home\ebg\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Auth->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\ebg\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Auth))
#5 Z:\home\ebg\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\ebg\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\ebg\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:131
2014-04-24 09:46:27 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0J/QuNGB0YzQvNC+INGBINC60L7QvdGC0LDQutGC0L3QvtC5INGE0L7RgNC80Ysg0YHQsNC50YLQsCBlYmcyNC5jb20gUlU=?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:138
2014-04-24 10:11:33 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:138
2014-04-24 10:11:33 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Frontend\Auth.php [ 144 ] in file:line
2014-04-24 10:11:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-24 10:12:06 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:138
2014-04-24 11:02:03 --- DEBUG: Email to admin@test.ru with subject '=?UTF-8?B?0J/QuNGB0YzQvNC+INGBINC60L7QvdGC0LDQutGC0L3QvtC5INGE0L7RgNC80Ysg0YHQsNC50YLQsCBlYmcyNC5jb20gUlU=?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php:86
2014-04-24 11:02:40 --- DEBUG: Email to admin@test.ru with subject '=?UTF-8?B?0J/QuNGB0YzQvNC+INGBINC60L7QvdGC0LDQutGC0L3QvtC5INGE0L7RgNC80Ysg0YHQsNC50YLQsCBlYmcyNC5jb20gUlU=?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php:86
2014-04-24 11:03:38 --- DEBUG: Email to admin@test.ru with subject '=?UTF-8?B?0J/QuNGB0YzQvNC+INGBINC60L7QvdGC0LDQutGC0L3QvtC5INGE0L7RgNC80Ysg0YHQsNC50YLQsCBlYmcyNC5jb20gUlU=?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Pages.php:86
2014-04-24 11:07:12 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:138
2014-04-24 11:15:39 --- DEBUG: Email to test34@test245.ru with subject '=?UTF-8?B?0J/QvtC00YLQstC10YDQttC00LXQvdC40LUg0YDQtdCz0LjRgdGC0YDQsNGG0LjQuCDQvdCwINGB0LDQudGC0LUgZWJnMjQuY29tIFJV?=' accepted for delivery. in Z:\home\ebg\www\application\classes\Controller\Frontend\Auth.php:138
2014-04-24 13:29:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Frontend\Auth.php [ 31 ] in file:line
2014-04-24 13:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-24 14:28:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\frontend\account\profile.php [ 4 ] in file:line
2014-04-24 14:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
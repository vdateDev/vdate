<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Kiev');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Set the mb_substitute_character to "none"
 *
 * @link http://www.php.net/manual/function.mb-substitute-character.php
 */
mb_substitute_character('none');

// -- Configuration and initialization -----------------------------------------
Cookie::$salt = 'sdfxzcvxxz32v562c12';
/**
 * Set the default language
 */
I18n::lang('en-us');

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	// Replace the default protocol.
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'      => '/',        
        'index_file'    => FALSE,
        'profile'       => TRUE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'   => MODPATH.'database',   // Database access
        'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation        
        //'minify'     => MODPATH.'minify',
        'captcha'    => MODPATH.'captcha',    // Captcha
        'mailer'     => MODPATH.'mailer',     // Send E-Mail
        'pagination' => MODPATH.'pagination',
    ));

// Attach DataBase config
Kohana::$config->attach(
    new Config_Database(
        array(
            'instance'      => Kohana_Database::instance(),
            'table_name'    => 'config',
        )
    )
);

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

/**
 * Widgets
 */
Route::set('widgets', '<directory>(/<controller>(/<param>))', 
        array(
            'directory'     => 'Widgets', 
            'param'         => '.+',
        ))
        ->defaults(array(
            'directory'     => 'Widgets',
            'action'        => 'index',
        ));

/**
 * Backend
 */
Route::set('backend_ajax', 'backend_ajax/<controller>/<action>')
        ->defaults(array(
            'directory'     => 'Backend'
        ));

Route::set('backend_auth', '<directory>/<action>', 
        array(
            'directory'     => 'backend',
            'action'        => 'login|logout',
        ))
        ->defaults(array(
            'directory'     => 'Backend',
            'controller'    => 'Auth',
            'action'        => 'login'
        ));

Route::set('backend_dialogue', '<directory>/<controller>/u-<uid>/d-<did>',
        array(
            'controller'    => 'dialogues',
            'uid'           => '[0-9]*',
            'did'           => '[0-9]*',
        ))->defaults(array(
            'directory'     => 'Backend',
            'controller'    => 'Dialogues',
            'action'        => 'index',
        ));


Route::set('backend', '<directory>(/<controller>(/<action>(/<id>)(/page-<page>)))',
        array(
            'directory'     => 'backend',
            'page'          => '[0-9]*',
            'id'            => '[0-9]*'
        ))
        ->defaults(array(
            'directory'     => 'Backend',
            'controller'    => 'Main',
            'action'        => 'index',
        ));

Route::set('backend_sprav', '<directory>/<controller>/<category>/<action>(/<id>)',
        array(
            'directory'     => 'backend',
            'controler'     => 'sprav',
            'id'            => '[0-9]*'
        ))
        ->defaults(array(
            'directory'     => 'Backend',
            'controller'    =>  'Sprav',
            'category'    => 'eyes',
            'action'        => 'index',
        ));



/**
 * Frontend
 */
Route::set('ajax', 'request/<language>/<controller>/<action>')
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',            
        ));

Route::set('search', '<language>/<controller>(/<action>(/page-<page>))',
        array(
            'controller'    => 'search',
            'action'        => 'index|result',
            'page'          => '[0-9]*',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Search',            
            'action'        => 'index',
        ));

Route::set('pages', '<language>/<url>.html', 
        array(
            'url'           => '[a-z0-9_-]*',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Pages',
            'action'        => 'index',
        ));

Route::set('users', '<language>/<controller>/<action>/<url>-u<id>',
        array(
            'action'        => 'summary|questionary',
            'controller'    => 'users',
            'url'           => '[a-z0-9_-]*',
            'id'            => '[0-9]*',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Users',            
        ));

Route::set('contact', '<language>/<action>', 
        array(
            'action'        => 'contact',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Pages',
            'action'        => 'contact',
        ));

Route::set('actual_show', '<language>/actual/<url>/a<id>',
        array(
            'id'            => '[0-9]*',
            'url'           => '[a-z0-9_-]*',
        ))        
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Actual',
            'action'        => 'show',
        ));

Route::set('actual', '<language>/actual(/page-<page>)', 
        array(
            'id'            => '[0-9]*',            
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Actual',
            'action'        => 'index',
        ));

Route::set('news_show', '<language>/news/<url>/n<id>',
        array(
            'id'            => '[0-9]*',
            'url'           => '[a-z0-9_-]*',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'News',
            'action'        => 'show',
        ));
Route::set('news', '<language>/news(/page-<page>)',
        array(
            'page'          => '[0-9]*',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'News',
            'action'        => 'index'
        ));

Route::set('auth', '<language>/<action>(/<code>)', 
        array(
            'action'        => 'login|registration|logout|forgot_password|confirm',
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Auth',            
        ));

Route::set('new_users', '<language>/<controller>/<action>(/page-<page>)', 
        array(
            'controller'    => 'users',
            'action'        => 'new',
            'page'          => '[0-9]*'
        ))
        ->defaults(array(
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Users',
            'action'        => 'new'
        ));

Route::set('default', '(<language>(/<controller>(/<action>(/<id>))))')
	->defaults(array(       
            'language'      => 'ru',
            'directory'     => 'Frontend',
            'controller'    => 'Main',
            'action'        => 'index',
	));
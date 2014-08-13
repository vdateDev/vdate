<?php defined('SYSPATH') or die('No direct script access.');
//Класс для получения виджетов
 
class Widget {

    protected $_controllers_folder  = 'widgets';    // Название папки с контроллерами виджетов
    protected $_route_name          = 'widgets';    // Название файла конфигураций виджетов по умолчанию
    protected $_config              = 'widgets';    // Файл конфигурации по умолчанию
    protected $_params              = array();      // Массив передаваемых параметров
    protected $_widget_name;                        // Название виждета (контроллер)


     /*
      * Вызов виджета Widget::factory('widget_name')->render();
      * @param   string  Название виджета
      * @param   array   Массив передаваемых параметров
      * @param   string  Название роута данного виджета
     */
    public static function factory($widget_name, array $params = NULL, $route_name = NULL)
    {
        return new Widget($widget_name, $params, $route_name);
    }

    /*
     * Вызов виджета Widget::load('widget_name', array('param' => 'val'), 'route_name');
     * @param   string  Название виджета
     * @param   array   Массив передаваемых параметров
     * @param   string  Название роута данного виджета
     */
    public static function load($widget_name, array $params = NULL, $route_name = NULL)
    {
        $widget = new Widget($widget_name, $params, $route_name);
        return $widget->render();
    }

    public function __construct($widget_name, array $params = NULL, $route_name = NULL)
    {
        if ($params != NULL)
        {
            $this->_params = $params;
        }

        if ($route_name != NULL)
        {
            $this->_route_name = $route_name;
        }

        $this->_widget_name = $widget_name;
    }

    public function render()
    {
        $controller = strtolower(Request::current()->controller());
        $action = strtolower(Request::current()->action());
        
        $config = Kohana::$config->load($this->_config)->get(strtolower($this->_widget_name));

        if ($config != NULL)
        {
           if (isset($config[$controller]) AND in_array($action, $config[$controller]))
           {
               return NULL;
           }
           if (isset($config[$controller]) AND in_array('ALL', $config[$controller]))
           {
               return NULL;
           }
        }
        
        $this->_params['controller'] = $this->_widget_name;      
        $url = Route::get($this->_route_name)->uri($this->_params);       
        return Request::factory($url)->execute();
    }

}

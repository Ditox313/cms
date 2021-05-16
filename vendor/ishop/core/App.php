<?php
namespace ishop;

class App
{
    // Создаем некий контейнер для приложения. Для хранения данных. Для реализации этого контейнера бы будем использовать
    //  шаблон проектирования Реестр.
    public static $app;






    public function __construct()
    {
        // Получаем строку запроса. То есть, то что ищет пользователь(без последнего /)
        $query_string = trim($_SERVER['QUERY_STRING'], '/');

        // Стартуем сессию
        session_start();

        // Создаем объект реестра
        self::$app = Registry::instance();

        $this->getParams();
    }



    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';

        if(!empty($params))
        {
            foreach($params as $k => $v)
            {
                self::$app->setProperty($k, $v);
            }
        }
    }
}
?>
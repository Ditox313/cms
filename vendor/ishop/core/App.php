<?php
namespace ishop;

class App
{
    // Создаем некий контейнер для приложения. Для хранения данных.
    public static $app;






    public function __construct()
    {
        // Получаем строку запроса(без последнего /)
        $query_string = trim($_SERVER['QUERY_STRING'], '/');

        // Стартуем сессию
        session_start();

        // Создаем объект реестра
        self::$app = Registry::instance();
    }
}
?>
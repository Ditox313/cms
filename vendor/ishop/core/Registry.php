<?php
// Класс реестра

namespace ishop;




class Registry
{
    use TSingletone;


    public static $properties = [];




    // Устанавливаем свойство
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }


    // Получаем свойство
    public static function getProperty($name)
    {
       if(isset(self::$properties[$name]))
       {
           return self::$properties[$name];
       }

       return null;
    }



    // Получаем все доступные свойста
    public static function getProperties()
    {
       return self::$properties;
    }
}

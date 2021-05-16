<?php
// Класс реестра

namespace ishop;




class Registry
{
    // Реализуем паттерн Singleton - нельзя создать больше 1 объекта данного класса. Для реализиции используем Трейт
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

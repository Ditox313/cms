<?php
// Трейт для реализации паттерна Singleton. Реализует принцип множественного наследования. Нельзя создать констант. Нельзя создать объект.
// Можно только использовать в другом классе. Имеет все возможности обычного класса.
namespace ishop;

trait TSingletone
{
    private static $instance;


    // Если наше приватное свойство пустое, то мы ложим туда объект данного класса
    public static function instance()
    {
        if(self::$instance === null)
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

}
?>
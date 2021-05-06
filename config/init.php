<?php

// Режим продакшена(Режим отладки или режим разработки)
const DEBUG = 1;
// 

// Корень нашего сайта
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public', '', $app_path);
define("ROOT", $app_path);

// Указываем нашу публичную папку
const WWW = ROOT . 'public';

// Указываем путь на нашу папку приложения
const APP = ROOT . 'app';

// Указываем путь на классы ядра
const CORE = ROOT . 'vendor/ishop/core';

// Указыааем путь на библиотек
const LIBS = ROOT . 'vendor/ishop/core/libs';

// Путь на файл кэша
const CACHE = ROOT . 'tmp/cache';

// Путь на конфигурационные файлы
const CONFIG = ROOT . 'config';

// Шаблон нашего сайта по умолчанию
const LAYOUT = ROOT . 'default';


// Админка
const ADMIN = ROOT . 'admin';


// URL главной страницы
// $app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// $app_path = preg_replace("#[^/]+$#", '', $app_path);
// $app_path = str_replace('/public', '', $app_path);
// define("PATH",$app_path);



// Подключаем автозагрузчик
require '../vendor/autoload.php';
?>
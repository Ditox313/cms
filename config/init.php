<?php

// Режим продакшена
const DEBUG = 1;

// Корень нашего сайта
const ROOT = __DIR__;

// Указываем нашу публичную папку
const WWW = ROOT . '/public';

// Указываем путь на нашу папку приложения
const APP = ROOT . '/app';

// Указываем путь на классы ядра
const CORE = ROOT . '/vendor/ishop/core';

// Указыааем путь на библиотеки
const LIBS = ROOT . '/vendor/ishop/core/libs';

// Путь на файл кэша
const CACHE = ROOT . '/tmp/cache';

// Путь на конфигурационные файлы
const CONFIG = ROOT . '/config';

// Шаблон нашего сайта по умолчанию
const LAYOUT = ROOT . 'default';

// URL главной страницы
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// const LAYOUT = ROOT . 'default';
?>
<?php

require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\\Controllers\\' . $ctrl;

if (class_exists($class)) {
    $ctrl = new $class;
    $ctrl();
} else {
    die('Неизвестная страница');
}

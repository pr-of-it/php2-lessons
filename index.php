<?php

require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\\App\Controllers\\' . $ctrl;

if (!class_exists($class)) {
    die('Неизвестная страница');
}

try {

    $ctrl = new $class;
    $ctrl();

} catch (\Exceptions\Http404Exception $ex) {
    http_response_code(404);
} catch (\Exceptions\Http500Exception $ex) {
    http_response_code(500);
} catch (Throwable $ex) {
    echo get_class($ex);
    die('Неизвестная ошибка!');
}



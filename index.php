<?php
$request = $_SERVER['REQUEST_URI'];
//print_r($request);
switch ($request) {
    case ' ' :
        require 'form.php';
        break;
    case '/form' :
        require 'form.php';
        break
    default:
        http_response_code(404);
        //require __DIR__ . '/views/404.php';
        break;
}

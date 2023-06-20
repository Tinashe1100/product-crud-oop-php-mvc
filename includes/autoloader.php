<?php
spl_autoload_register('myAutoLoader');
// function myAutoLoader($className)
// {
//     $path = "classes/";
//     $ext = ".php";
//     $fullPath = $path . $className . $ext;

//     if (!file_exists($fullPath)) {
//         # code...
//         return false;
//     }

//     include_once $fullPath;
// }

function myAutoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $ext = ".php";
    require_once $path . $className . $ext;
}

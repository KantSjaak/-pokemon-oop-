<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $fullPath = __DIR__ . "\\" . $className . ".php";

    if(!file_exists($fullPath)) {
        return false;
    }
    require_once $fullPath;
    return null;
}
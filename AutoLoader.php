<?php

//This loads my custom function as the auto loader.
spl_autoload_register('myAutoLoader');

//This looks for the paths and loads all the classes which are called.
function myAutoLoader($className) {
    $fullPath = __DIR__ . "\\" . $className . ".php";

    if(!file_exists($fullPath)) {
        return false;
    }
    require_once $fullPath;
    return null;
}
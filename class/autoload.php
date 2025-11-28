<?php
/* @autor Hernan Manera*/|

spl_autoload_register(function ($className) {
 
    $file = __DIR__ . '/' . strtolower($className) . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        // Opcional, para que si hay un error sea fácil de ver:
        throw new Exception("No se pudo cargar la clase $className desde $file");
    }
});

<?php
spl_autoload_register(function ($class) {
    $files = [
        __DIR__ . "/source/{$class}.php",
    ];
    foreach ($files as $f) {
        if (file_exists($f)) {
            require_once $f;
            return;
        }
    }
    // not found: try searching source folder (fallback)
    $pattern = __DIR__ . '/source/*.php';
    foreach (glob($pattern) as $file) {
        if (stripos($file, $class . '.php') !== false) {
            require_once $file;
            return;
        }
    }
});

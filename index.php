<?php
/**
 * / linux
 * \ windows
 */
/**
 * Archivos de configuración
 * TODO: encontrar la mejor manera de cargar la configuración
 */
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)) . DS);
define("APP_PATH", ROOT . "Core" . DS);
require_once(APP_PATH . "Config.php");

require __DIR__ . '/vendor/autoload.php';

/**
 * Ejecución de la aplicación en una instancia estática creando un nuevo objeto Request
 */
try {
    \Core\Bootstrap::run(new \Core\Request);
} catch (Exception $e) {
    echo $e->getMessage();
}


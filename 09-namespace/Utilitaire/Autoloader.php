<?php
namespace App\Utilitaire;

class Autoloader
{
    public static function autoload()
    {
        spl_autoload_register(function ($className) {

            $dirPath = str_replace(DIRECTORY_SEPARATOR.'Utilitaire', '', __DIR__);
            $className = str_replace('App','', $className);
            $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

            require_once $dirPath.$className. '.php';
            echo $dirPath.$className. '.php'. '<br>';
        });
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-02-18
 * Time: 20:15
 */


class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = "lib/".str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}
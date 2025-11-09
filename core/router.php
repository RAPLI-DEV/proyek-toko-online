<?php

namespace core;

use \app\Controllers;

class Router {
    private static $URI;
    public static function handleRouter($param) {
        self::before();
        // try {
            switch($param){
                case 'login':
                    $controller = new Controllers\ProductController();
                    $controller->list();
                    break;
                case 'register':
                    $controller = new Controllers\ProductController();
                    $controller->list();
                    break;
                case 'public':
                    $controller = new Controllers\ProductController();
                    $controller->index();
                    break;
                case 'landingpage':
                    $controller = new Controllers\ProductController();
                    self::$URI = $controller->index();
                    break;
                default:
                    return "404 - Page Not Found";
                    return "Invalid Request";
                    http_response_code(404);
                    break;
            }
        // } catch (\ErrorException $e) {
        //     echo "Gagal include: " . $e->getMessage();
        // }
        self::after();
    }
    
    protected static function before(){
        set_error_handler(function($errno, $errstr, $errfile, $errline) {
            throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
        });
    }

    protected static function after(){
        restore_error_handler();
    }
}

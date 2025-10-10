<?php 

namespace App\Singleton\ExosSingleton;

class Singleton {
    private static ?Singleton $instance = null;

    private function __construct() {
        // Private constructor to prevent instantiation
    }

    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
<?php
namespace core;

use mysqli;
use mysqli_sql_exception;

class Database{
    public function start(){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $db = $this->before();
        try {
            $conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['dbname']);
        } catch (mysqli_sql_exception $e) {
            echo "Database connection failed: (" . $e->getCode() . ") " . $e->getMessage();
            exit();
        }
        $this->after();
    }
    public function stop(){

    }
    protected function before(){
        $database = require_once __DIR__ . '/../app/config/db.php';
        return $database;
    }
    protected function after(){

    }
}
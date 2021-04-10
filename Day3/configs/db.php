<?php

class Database {
    public $connect;
    public function __construct() {
        $this->connect = new mysqli("localhost", "root", "", "db_toko");

        if ($this->connect -> connect_error) {
            echo "Failed connect to database".$connect -> connect_error;
        }
    }
}
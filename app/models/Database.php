<?php

class Database {

    public static function connect() {

        require_once __DIR__ . "/../../config/db.php";

        return $conn; 
    }
}
?>
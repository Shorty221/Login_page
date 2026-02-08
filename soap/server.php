<?php

require_once "../config/db.php"; 


class UserService {

    public function getUsers() {
        global $conn; 

       
        if (!$conn) {
            return ["error" => "Database connection failed"];
        }

        $result = $conn->query("SELECT id, username, email FROM users");
        
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        
        return [];
    }
}


$options = [
    'uri' => 'http://localhost/php_demo/Login/soap/server.php'
];


$server = new SoapServer(null, $options);


$server->setClass('UserService');


$server->handle();
?>
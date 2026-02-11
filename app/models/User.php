<?php

require_once "Database.php";

class User {

    public static function login($email, $password) {

        $db = Database::connect();

        $stmt = $db->prepare("SELECT * FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $res = $stmt->get_result();

        if ($user = $res->fetch_assoc()) {

            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return false;
    }
}

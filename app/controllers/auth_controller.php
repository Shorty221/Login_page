<?php

require_once __DIR__ . "/../models/User.php";

class AuthController {

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = User::login(
                $_POST['email'],
                $_POST['password']
            );

            if ($user) {

                session_start();
                $_SESSION['user'] = $user;

                header("Location: /dashboard");
                exit();

            } else {

                $error = "Invalid login";
            }
        }

        require __DIR__ . "/../../login.php";
    }


    public function register() {

        require __DIR__ . "/../../register.php";
    }


    public function logout() {

        session_start();
        session_destroy();

        header("Location: /login");
    }
}

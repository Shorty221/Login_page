<?php

class ProfileController {

    public function index() {

        session_start();

        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }

        require __DIR__ . "/../../profile.php";
    }
}

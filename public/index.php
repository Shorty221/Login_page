<?php

require_once "../app/controllers/auth_controller.php";
require_once "../app/controllers/dashboard_controller.php";
require_once "../app/controllers/profile_controller.php";


$url = $_GET['url'] ?? 'login';


switch ($url) {

    case 'login':
        (new AuthController)->login();
        break;

    case 'register':
        (new AuthController)->register();
        break;

    case 'logout':
        (new AuthController)->logout();
        break;

    case 'dashboard':
        (new DashboardController)->index();
        break;

    case 'profile':
        (new ProfileController)->index();
        break;

    default:
        header("Location: /login");
}

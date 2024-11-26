<?php
// Load necessary files
require_once '../config/database.php';
require_once '../controllers/UserController.php';

// Define the default page
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Title and content variables
$title = 'Default Page';
$content = function () {
    echo '<h1>Welcome to the Poultry Management System</h1>';
};

// Handle routing
switch ($page) {
    case 'dashboard':
        $title = 'Dashboard';
        $content = function () {
            include '../views/admin-dashboard.php';
        };
        break;

    case 'user-management':
        $title = 'User Management';
        $userController = new UserController();
        $users = $userController->getAllUsers();
        $content = function () use ($users) {
            include '../views/admin-usermanagement.php';
        };
        break;

    case 'add-user':
        $title = 'Add User';
        $content = function () {
            include '../views/admin-adduser.php';
        };
        break;

    case 'details-farm':
        $title = 'Farm Details';
        $content = function () {
            include '../views/admin-detailsFarm.php';
        };
        break;

    case 'details-coop':
        $title = 'Coop Details';
        $content = function () {
            include '../views/admin-detailsCoop.php';
        };
        break;

    case 'labour':
        $title = 'Labour Management';
        $content = function () {
            include '../views/admin-labour.php';
        };
        break;

    case 'new-labour':
        $title = 'New Labour';
        $content = function () {
            include '../views/admin-newLabour.php';
        };
        break;

    case 'password-reset':
        $title = 'Password Reset';
        $content = function () {
            include '../views/password-reset.php';
        };
        break;

    default:
        $title = '404 Not Found';
        $content = function () {
            echo '<h1>404 - Page not found</h1>';
        };
        break;
}

// Include the main layout
include '../views/layout.php';

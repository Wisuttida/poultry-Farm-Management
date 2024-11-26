<?php
// Load necessary files
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../controllers/userController.php';


// Define the default page
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
// Title and content variables
// $title = 'Default Page';
// $content = function () {
//     echo '<h1>Welcome to the Poultry Management System</h1>';
// };

// Handle routing
switch ($page) {
    case 'dashboard':
        $title = 'Dashboard';

        include '../views/admin-dashboard.php';

        break;

    case 'user-management':
        $title = 'User Management';
        $userController = new UserController();
        $users = $userController->getAllUsers();
        include '../views/admin-usermanagement.php';

        break;

    case 'add-user':
        $title = 'Add User';

        include '../views/admin-adduser.php';

        break;

    case 'details-farm':
        $title = 'Farm Details';

        include '../views/admin-detailsFarm.php';

        break;

    case 'details-coop':
        $title = 'Coop Details';

        include '../views/admin-detailsCoop.php';

        break;

    case 'labour':
        $title = 'Labour Management';

        include '../views/admin-labour.php';

        break;

    case 'new-labour':
        $title = 'New Labour';

        include '../views/admin-newLabour.php';

        break;

    case 'password-reset':
        $title = 'Password Reset';

        include '../views/password-reset.php';

        break;

    default:
        $title = '404 Not Found';

        echo '<h1>404 - Page not found</h1>';

        break;
}

// Include the main layout
// include '../views/layout.php';

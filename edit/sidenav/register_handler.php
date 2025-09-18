<?php
// Show all errors (development only!)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../model/registerModel.php"; 
require_once  "../model/db_connection.php";

// Global variable
$page['page'] = 'Register';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'register';

// Check for an action
if (isset($_GET['function'])) {
    new ActiveRegister($page);
} else {
    new Register($page);
}

// =================== CLASSES ===================

class Register {
    private $page = '';
    private $subpage = '';

    function __construct($page) {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        // Call method dynamically
        $this->{$page['subpage']}();
    }

    function register() {
        include '../views/client-register.php';
    }
}

class ActiveRegister {
    private $page = '';
    private $subpage = '';
    protected $registerModel = '';

    // Constructor
    function __construct($page) {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        $database = new Database();
        $db = $database->connect();

        // load RegisterModel and pass DB connection
        $this->registerModel = new RegisterModel($db);

        // Call function from URL (?function=register)
        $this->{$_GET['function']}();
    }

    function register() {
        if (isset($_POST['register'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Use RegisterModel to save
            if ($this->registerModel->register($username, $password)) {
                echo "<script>alert('Registration successful!'); window.location='../views/client-log.php';</script>";
                exit;
            } else {
                echo "<script>alert('Registration failed!'); window.location='../views/client-register.php';</script>";
            }
        } else {
            include "../views/client-register.php";
        }
    }
}

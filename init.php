<?php
session_start();

// Enable error reporting for development (disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection and model
require_once 'db.php';
require_once 'model.php';

// Define project name
define('PROJECT_NAME', 'Student Project Allocation & Management System');

// Ensure db.php sets a PDO instance named $db
if (!isset($db)) {
    die('Database connection not established.');
}

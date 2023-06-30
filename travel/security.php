<?php
session_start(); 

// Include the database configuration file
include('../admin/database/dbconfig.php');

// Check if the database connection is successful
if (!$connection) {
    header("Location: ../admin/database/dbconfig.php");
    exit;
}

// Check if the user is not logged in
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>

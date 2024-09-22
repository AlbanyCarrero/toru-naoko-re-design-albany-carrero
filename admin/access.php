<?php 
session_start();
$admin_user = $_POST['admin_user'];
$admin_password = $_POST['admin_password'];

if ($admin_user=='admin-ac' && $admin_password=='hola123') {
    $_SESSION ['admin'] = $admin_user;
    header("Location: index.php");
} 
?>
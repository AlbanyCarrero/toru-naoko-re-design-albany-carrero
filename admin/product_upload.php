<?php
session_start();
$p_name = $_POST['p_name'];
$p_collection = $_POST['p_collection'];
$p_category = $_POST['p_category'];
$p_price = $_POST['p_price'];
$p_img = $_POST['p_img'];
$p_availability = $_POST['p_availability'];
$p_color = $_POST['p_color'];

if (empty($p_collection)) {
    $p_collection = NULL;
}

if (empty($p_price)) {
    $p_price = 0;
}

if (empty($p_availability)) {
    $p_availability = NULL;
}

if (empty($p_color)) {
    $p_color = NULL;
}

include("../conexion.php");

mysqli_query($conexion, "INSERT INTO products VALUES (DEFAULT, '$p_name', '$p_collection', '$p_category', $p_price,'$p_img','$p_availability', '$p_color')");

header("Location: product_upload_success.php");
?>
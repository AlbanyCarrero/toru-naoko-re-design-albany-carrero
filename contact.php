<?php
$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_message = $_POST['c_message'];

include("conexion.php");

mysqli_query($conexion, "INSERT INTO contact VALUES (DEFAULT,'$c_name','$c_email','$c_message')");

header("Location: contact_success.html#contact_s");
?>
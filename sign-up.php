<?php
$user_name = $_POST['user_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birth_date = $_POST['birth_date'];
$country = $_POST['country'];
$region = $_POST['region'];
$province = $_POST['province'];
$zip = $_POST['zip'];
$address = $_POST['address'];
$country_2 = $_POST['country_2'];
$region_2 = $_POST['region_2'];
$province_2 = $_POST['province_2'];
$zip_2 = $_POST['zip_2'];
$address_2 = $_POST['address_2'];
$password = $_POST['password'];

if (empty($country_2)) {
    $country_2 = NULL;
}

if (empty($region_2)) {
    $region_2 = NULL;
}

if (empty($province_2)) {
    $province_2 = NULL;
}

if (empty($zip_2)) {
    $zip_2 = 0;
}

if (empty($address_2)) {
    $address_2 = NULL;
}

include("conexion.php");

mysqli_query($conexion, "INSERT INTO user_sign_in_up VALUES ('$user_name','$last_name','$email','$phone','$birth_date','$country','$region','$province',$zip,'$address','$country_2','$region_2','$province_2',$zip_2,'$address_2','$password')");

header("Location: sign_up_success.html");
?>
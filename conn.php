<?php

$servername = 'localhost';
$database = 'gowatr_api';
$username = 'root';
$password = '';

//  $servername = "172.28.64.3";
//  $database = "gowatr_api";
//  $username = "gowatr_api_user";
// $password = "FdsG!54eED^";



$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}



?>
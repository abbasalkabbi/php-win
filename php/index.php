<?php
// import config php
// create data 
include_once 'inc/config.php';
$firstname= mysqli_real_escape_string( $conn,$_POST['firstname']);
$lastname= mysqli_real_escape_string( $conn,$_POST['lastname']);
$email= mysqli_real_escape_string( $conn,$_POST['email']);
// import send data to mysqli
include_once 'inc/insert.php';






?>
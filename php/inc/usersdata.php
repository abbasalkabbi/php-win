<?php


include_once 'config.php';
$users_sql= mysqli_query($conn, "SELECT * FROM users");
$users_data= mysqli_fetch_all($users_sql,MYSQLI_ASSOC);



$myJSON = json_encode($users_data);

echo $myJSON;
?>
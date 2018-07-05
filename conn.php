<?php
$server_name ="localhost";
$user_name ="root";
$pass ="1234";
$db_name ="edit";
$conn = mysqli_connect($server_name,$user_name,$pass,$db_name);
if($conn->connect_error){
    echo ("error");
}
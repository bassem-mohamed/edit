<?php
include_once "conn.php";
$name =$_POST['name'];
$email = $_POST['email'];
$sql ="INSERT INTO information(name,email)VALUES('$name','$email')";
mysqli_query($conn,$sql);
header("location:index.php");
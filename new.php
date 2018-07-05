<?php
include_once "conn.php";
include_once "plugin.php";
$id = $_GET['id'];
$name =$_POST['name1'];
$email = $_POST['email1'];
$sql = "UPDATE information set name = '$name', email = '$email' WHERE id = '$id'";
mysqli_query($conn,$sql);
header("location:index.php");

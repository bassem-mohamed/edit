<?php
include_once "conn.php";
$sql ="SELECT id FROM information";
$result =mysqli_query($conn,$sql);
$r = $result->fetch_all();

print_r(json_encode($r));
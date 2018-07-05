<?php
include_once 'conn.php';
include_once "plugin.php";
$id = $_GET['id'];
$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
$name=$result->fetch_assoc()['name'];
//$email=$result->fetch_assoc()['email'];
//$id =$result->fetch_assoc()['id'];
//print_r($name);
//$r = $result->fetch_all();
//print_r($r);
//print_r(json_encode($r));
$id = $_GET['id'];
$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
$email=$result->fetch_assoc()['email'];
//print_r($email);
$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
 while ($r=$result->fetch_assoc()['id']) {
//     print_r($id);
     echo("<table class='table'>");
     echo("<th>" . "name" . "</th>");
     echo("<th>" . "email" . "</th>");
     echo("<tr>");
     echo('<form method="post" action="new.php?id='.$id.'" >');
     echo("<td>" . "<input type = 'text' name ='name1' value ='$name'>" . "</td>");
     echo("<td>" . "<input type = 'email' name ='email1' value ='$email'>" . "</td>");
     echo "<td>" . "<input type ='submit' class ='btn btn-danger'>" . "</td>";
     echo("</tr>");

     echo("</form>");
     echo("</table>");
 }
//$name = $_POST['name'];
//$email = $_POST['email'];
//$sql = "UPDATE information set name = '$name', email = '$email' WHERE id = '$id'";
//mysqli_query($conn,$sql);
?>


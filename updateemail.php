<?php
include_once 'conn.php';
include_once "plugin.php";
$id = $_GET['id'];
$id = $_GET['id'];
$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
$email=$result->fetch_assoc()['email'];
$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
$name=$result->fetch_assoc()['name'];

$sql ="SELECT * FROM information WHERE id = '$id'";
$result =mysqli_query($conn,$sql);
while ($r=$result->fetch_assoc()['id']) {
//    print_r($id);
    echo("<table class='table'>");
//    echo("<th>" . "name" . "</th>");
    echo("<th>" . "email" . "</th>");
    echo("<tr>");
    echo('<form method="post" action="new.php?id='.$id.'" >');
    echo("<td>" . "<input type = 'hidden' name ='name1' value ='$name'>" . "</td>");
    echo("<td>" . "<input type = 'email' name ='email1' value ='$email'>" . "</td>");
    echo "<td>" . "<input type ='submit' class ='btn btn-danger'>" . "</td>";
    echo("</tr>");

    echo("</form>");
    echo("</table>");
}
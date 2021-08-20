<?php
$server = "localhost";
$username = "root";
$password = "";
$namedb = "todolist";

$conn = mysqli_connect($server,$username,$password,$namedb);
if (!$conn){
    die("<script>alert('Connecton Failed.')</script>");
}

?>
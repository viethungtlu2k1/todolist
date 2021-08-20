<?php
include("config.php");
$task = $_POST['task'];

$sql = "INSERT INTO `tasks`(`id`, `title`) VALUES (NULL,'$task')";
$res = mysqli_query($conn, $sql);
if ($res){
    echo 1;
}else{
    echo 0;
}

?>
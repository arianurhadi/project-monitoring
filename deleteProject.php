<?php 

include 'databaseConnection.php';
 
$id = $_GET['id'];

echo $id;

mysqli_query($connection,"delete from project where projectId='$id'");
 
header("location:index.php");
 
?>
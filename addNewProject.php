<?php 

include 'databaseConnection.php';
 
$projectName = $_POST['projectName'];
$leaderName = $_POST['leaderName'];
$leaderEmail = $_POST['leaderEmail'];
$clientName = $_POST['clientName'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$progressValue = $_POST['progressValue'];
 
mysqli_query($connection,"insert into project values ('','$projectName','$leaderName','$leaderEmail','$clientName','$progressValue','$startDate','$endDate')");
 
header("location:index.php");
 
?>
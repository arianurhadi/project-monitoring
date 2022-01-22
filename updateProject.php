<?php 

include 'databaseConnection.php';
 
$id = $_POST['id'];
$projectName = $_POST['projectName'];
$leaderName = $_POST['leaderName'];
$leaderEmail = $_POST['leaderEmail'];
$clientName = $_POST['clientName'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$progressValue = $_POST['progressValue'];
 
mysqli_query($connection,"update project set projectName = '$projectName', leaderName = '$leaderName', leaderEmail = '$leaderEmail', clientName = '$clientName', progressValue = '$progressValue', startDate = '$startDate', endDate = '$endDate' where projectId = $id");
 
header("location:index.php");
 
?>
<?php 
include_once('db.php');
$name=$_POST['name'];
$institute=$_POST['institute'];
$year=$_POST['year'];
$dept=$_POST['dept'];
$interest=$_POST['interest'];



$stmt = $mysqli->prepare("INSERT INTO details(name,institute,year,dept,interest) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param('ssiss', $name,$institute,$year,$dept,$interest);
$stmt->execute();

header("location:stat.php");

$stmt->close();
$mysqli->close();

?>

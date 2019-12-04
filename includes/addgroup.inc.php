<?php
	include_once 'dbh.inc.php';
	
	$location = $_POST['location'];
	$time = $_POST['time'];
	$subject = $_POST['subject'];
	$materials = $_POST['materials'];
	$cid = $_POST['cid'];
	$uid = $_POST['uid'];
	$sql = "INSERT INTO studygroup (location,time,subject, study_materials, course_id,u_id) VALUES ('$location',
	'$time', '$subject','$materials', '$cid', '$uid');";
	mysqli_query($conn, $sql);

	header("Location: ../index.php");

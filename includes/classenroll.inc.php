<?php
	include_once 'dbh.inc.php';
	if(isset($_POST['add-class'])){
		$coursenum = $_POST['coursenum'];
		$professor = $_POST['professor'];
		$subject = $_POST['subject'];
		$coursename = $_POST['coursename'];
		$schoolid = $_POST['schoolid'];
	
		$sql_c = "SELECT * FROM course WHERE course_num = '$coursenum' AND professor = '$professor'";
		$res_c = mysqli_query($conn, $sql_c);
		if(mysqli_num_rows($res_c)==0){
			echo "Adding class";
			$sql_a = "INSERT INTO course (course_num, course_name, professor, subject, u_id) 
			VALUES ('$coursenum', '$coursename', '$professor', '$subject', ' $schoolid');";
			$res_a = mysqli_query($conn, $sql_a);
		} else {
			echo "Class already in system";
		}
	} 
	  header("Location: ../includes/userprofile.inc.php");

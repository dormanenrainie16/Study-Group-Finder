<?php
	include_once 'dbh.inc.php';

		
	if(isset($_POST['submit-user'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$grad = $_POST['grad'];
		$uid = $_POST['uid'];
		
		$sql_e = "SELECT * from student WHERE email = '$email'";
		$res_e = mysqli_query($conn, $sql_e);

		if(mysqli_num_rows($res_e) > 0) {
			echo "Email already in use";
		} else {
			$sql = "INSERT INTO student (name, email, password, gradyear, u_id) VALUES ('$name','$email','$pass','$grad','$uid');";
			mysqli_query($conn, $sql);

		}

	}

	header("Location: ../index.php");
	

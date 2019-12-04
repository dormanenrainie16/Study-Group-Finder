<?php
	include_once 'dbh.inc.php';

	if(isset($_POST['login-submit'])) {
		$email = $_POST['logemail'];
		$password = $_POST['password'];

		$sql_e = "SELECT * from student WHERE email = '$email'";
		$res_e = mysqli_query($conn, $sql_e);
		if(mysqli_num_rows($res_e) == 1) {
			$sql_p = "SELECT * from student WHERE email = '$email' AND password = '$password'";
			$res_p = mysqli_query($conn,$sql_p);
			if(mysqli_num_rows($res_p) == 1){
				  header("Location: ../includes/userprofile.inc.php");
			}
			else {
				echo "Incorrect Password";
			}
			
		} else {
			echo "Incorrect Email";
		}

	}

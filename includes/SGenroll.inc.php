<?php
	include_once 'dbh.inc.php';

	if(isset($_POST['join'])) {
	        $studid = $_POST['stid'];
	        $gid = $_POST['SGID'];
	        $sql = "INSERT INTO sgenrolled (student_id, SG_id) VALUES ('$studid','$gid')";
		mysqli_query($conn, $sql);	
	}

	$sql_c = "SELECT * FROM sgenrolled,studygroup WHERE sgenrolled.SG_id = studygroup.SG_id AND sgenrolled.student_id='$studid'";
	$result = mysqli_query($conn, $sql_c);
	$queryResult = mysqli_num_rows($result);

 	if($queryResult >0) {
        	while($row = mysqli_fetch_assoc($result)) {
			echo "Subject: ";
			echo $row['subject'] . "<br>";
			echo "Study Group ID: ";
			echo $row['SG_id'] . "<br>";
			echo "Location: ";
			echo $row['location'] . "<br>";
			echo "Time: ";
			echo $row['time'] . "<br>";
			echo "Study Materials: ";
			echo $row['study_materials'] . "<br><br>";
		}
	}
?>
	<form action="delete.inc.php" method="POST">
        	<input type="text" name="sid" placeholder="Student ID #">
		<br>
		<input type="text" name="sgid" placeholder="Study Group ID #">
        	<button type="submit" name="delete">Delete</button>
	</form>




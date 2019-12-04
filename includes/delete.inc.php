<?php
	include_once 'dbh.inc.php';
	if(isset($_POST['delete'])) {
		$stid =  $_POST['sid'];
		$sgi =  $_POST['sgid'];

		$sql = "DELETE FROM sgenrolled WHERE student_id = '$stid' AND SG_id = '$sgi';";
		mysqli_query($conn, $sql);
	}

	$sql_c = "SELECT * FROM sgenrolled,studygroup WHERE sgenrolled.SG_id = studygroup.SG_id AND sgenrolled.student_id='$stid'";
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



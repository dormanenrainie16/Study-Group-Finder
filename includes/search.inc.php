<?php
	include_once 'dbh.inc.php';
?>

<h8> Search Results <h8>

<div class="studygroup-container">

<?php
	if(isset($_POST['submit-search'])) {
		$sear = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM course 
			WHERE u_id LIKE '%$sear%' OR subject LIKE '%$sear%' OR course_num LIKE '%$sear%' OR course_name LIKE '%$sear%' OR professor LIKE '%$sear%' OR course_id LIKE '%$sear%';";

		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		if($queryResult >0) {
			while($row = mysqli_fetch_assoc($result)) {
                        echo "University: ";
                        echo $row['u_id'] . "<br>";

                        echo "Course Name: ";
                        echo $row['course_name'] . "<br>";

                        echo "Course Number: ";
                        echo $row['course_num'] . "<br>";

                        echo "Professor: ";
                        echo $row['professor'] . "<br>";

                        echo "Course ID: ";
                        echo $row['course_id'] . "<br>";

                        echo "Subject: ";
                        echo $row['subject'] . "<br><br>";

/*                        echo "Study Group ID: ";
                        echo $row['SG_id'] . "<br>";

                        echo "Location: ";
                        echo $row['location'] . "<br>";
                        echo "   Date/Time: ";
                        echo $row['time'] . "<br><br>";
*/			}

		} else {
			echo "No matching results";
		}
	}
?>
</div>

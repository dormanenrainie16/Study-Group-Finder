<?php
	include_once 'includes/dbh.inc.php';
?>

<!doctype html>
<html>
<body>
<form action="includes/login.inc.php" method="POST">
	<input type="text" name="logemail" placeholder="Email Address">
	<br>
	<input type="text" name="password" placeholder="Password">
	<br>
	<button type="submit" name="login-submit">Login</button>
	<br>
</form>

<form action="includes/adduser.inc.php" method="POST">
	<input type="text" name="name" placeholder="Name">
        <br>
	<input type="text" name="uid" placeholder="School">
        <br>
	<input type="text" name="grad" placeholder="Graduation Year">
        <br>
	<input type="text" name="email" placeholder="Email">
        <br>
	<input type="text" name="password" placeholder="Password">
        <br>
	<button type="submit" name="submit-user">Create Account</button>
        <br>
</form>


<form action="includes/addgroup.inc.php" method="POST">
	<input type="text" name="location" placeholder="Location">
	<br>
	<input type="text" name="time" placeholder="Time">
	<br>
	<input type="text" name="subject" placeholder="Subject">
	<br>
	<input type="text" name="materials" placeholder="Study Materials">
	<br>
	<input type="text" name="cid" placeholder="Course Id">
	<br>
	<input type="text" name="uid" placeholder="University Id"> 
	<br>
	<button type="submit" name="submit">Add Study Group</button>
	<br>
</form>
<form action="includes/search.inc.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
</form>
<?php
	$sql = "SELECT course.u_id, studygroup.SG_id, course.subject, course.course_name, course.course_num, course.course_id, course.professor, studygroup.location, studygroup.time, studygroup.course_id
		FROM studygroup, course
		WHERE studygroup.course_id = course.course_id;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck >0) {
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
			echo $row['subject'] . "<br>";

			echo "Study Group ID: ";
			echo $row['SG_id'] . "<br>"; 

			echo "Location: ";
			echo $row['location'] . "<br>"; 
			echo "   Date/Time: ";
			echo $row['time'] . "<br><br>";
		}
	}
?>
</body>
</html>


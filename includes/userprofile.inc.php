<?php

?>
<form action="classenroll.inc.php" method="POST">
	<input type="text" name="coursenum" placeholder="Course Number">
	<br>
        <input type="text" name="professor" placeholder="Professor Name">
        <br>
        <input type="text" name="subject" placeholder="Subject">
        <br>
        <input type="text" name="coursename" placeholder="Course Name">
        <br>
        <input type="text" name="schoolid" placeholder="School ID">
        <br>
	<button type="submit" name="add-class">Add Your Class</button>
	<br>
</form>

<form action="SGenroll.inc.php" method="POST">
	<input type="text" name="SGID" placeholder="Study Group ID ">
	<br>
	<input type="text" name="stid" placeholder="Student ID # ">
	<br>

	<button type="submit" name="join">Join Study Group</button>
	
</form>


<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF=8">
	<title>Update Western Course</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$courseNum = $_POST["courseNum"];
	if (!empty($_POST["newName"])) {
		$update = $_POST["newName"];
		$query = "UPDATE WesternCourse SET CourseName = '" . $update . "' WHERE CourseNumber = '" . $courseNum . "'";
		$updateName = mysqli_query($connection, $query);
		if (!$updateName) { die("Database update failed. 1"); }
	}
	if (!empty($_POST["newWeight"])) {
		$update = $_POST["newWeight"];
		$query = "UPDATE WesternCourse SET Weight = '" . $update . "' WHERE CourseNumber = '" . $courseNum . "'";
		$updateWeight = mysqli_query($connection, $query);
		if (!$updateWeight) { die("Database update failed. 2"); }
	}
	if (!empty($_POST["newSuffix"])) {
		$update = $_POST["newSuffix"];
		$query = "UPDATE WesternCourse SET Suffix = '" . $update . "' WHERE CourseNumber = '" . $courseNum . "'";
		$updateSuffix = mysqli_query($connection, $query);
		if (!$updateSuffix) { die("Database update failed. 3"); }
	}
	echo "<h4>Updated " . $courseNum . " successfully!</h4>";
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

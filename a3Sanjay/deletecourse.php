<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Delete Western Course</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$courseNum = "'" . $_POST["courseDel"] . "'";
	$query = "DELETE FROM WesternCourse WHERE CourseNumber = $courseNum";
	$result = mysqli_query($connection, $query);
	if (!$result) { die("Database deletion failed."); }
	echo "<h4>Deleted " . $courseNum . " successfully</h4>";
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

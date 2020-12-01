<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Add a Course</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$name = "'" . $_POST["addName"] . "'";
	$num = "'" . $_POST["addNum"] . "'";
	$weight = "'" . $_POST["addWeight"] . "'";
	$suffix = "'" . $_POST["addSuffix"] . "'";
	$query = "INSERT INTO WesternCourse VALUES ($name, $num, $weight, $suffix)";
	$result = mysqli_query($connection, $query);
	if (!$result) { die("Database insertion failed."); }
	echo "<h4>Added " . $num . " - " . $name . " successfully!</h4>";
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

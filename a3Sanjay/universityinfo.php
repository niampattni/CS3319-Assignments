<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Univeristy Info</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$id = "'" . $_POST["uniInfo"] . "'";
	$uniQuery = "SELECT * FROM University WHERE UniversityID = $id";
	$courseQuery = "SELECT * FROM OtherCourse WHERE UniversityID = $id";
	$uniInfo = mysqli_query($connection, $uniQuery);
	if (!$uniInfo) { die("Database query failed."); }
	$courseInfo = mysqli_query($connection, $courseQuery);
	if (!$courseInfo) { die("Database query failed."); }
	$uni = mysqli_fetch_assoc($uniInfo);
	echo "<h1>" . $uni[OfficialName] . "</h1>";
	echo "<h3>University ID: </h3><p>" . $uni[UniversityID] . "</p>";
	echo "<h3>City: </h3><p>" . $uni[City] . "</p>";
	echo "<h3>Province: </h3><p>" . $uni[Province] . "</p>";
	echo "<h3>Nickname: </h3><p>" . $uni[Nickname] . "</p>";
	echo "<table><tr><th>Course Name</th><th>Course Code</th><th>Weight</th><th>Year Offered</th></tr>";
	while ($row = mysqli_fetch_assoc($courseInfo)) {
		echo "<tr><td>" . $row[CourseName] . "</td><td>" . $row[CourseCode] . "</td><td>" . $row[Weight] . "</td><td>" . $row[YearOffered] . "</td></tr>";
	}
	echo "</table>";
	mysqli_free_result($uniInfo);
	mysqli_free_result($courseInfo);
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Equivalent Courses</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$num = "'" . $_POST["courseEquivNum"] . "'";
	$uwoCourse = "SELECT * FROM WesternCourse WHERE CourseNumber = $num";
	$equivCourse = "SELECT * FROM EquivalentCourses WHERE WesternCourse = $num";
	$uwoData = mysqli_query($connection, $uwoCourse);
	if(!$uwoData) { die("Database query failed."); }
	$equivRows = mysqli_query($connection, $equivCourse);
	if(!$equivRows) { die("Database query failed."); }
	$uwo = mysqli_fetch_assoc($uwoData);
	echo "<h3>" . $uwo[CourseName] . "</h3>";
	echo "<h3>" . $uwo[CourseNumber] . "</h3>";
	echo "<h3>" . $uwo[Weight] . "</h3>";
	echo "<h4>Equivalent Courses:</h4>";
	echo "<table><tr><th>University ID</th><th>Course Name</th><th>Course Code</th><th>Weight</th><th>Date</th></tr>";
	while ($row = mysqli_fetch_assoc($equivRows)) {
		$query = "SELECT * FROM OtherCourse WHERE UniversityID = '" . $row[University] . "', CourseCode = '" . $row[OutsideCourse] . "'";
		$courseInfo = mysqli_query($connection, $query);
		if (!$courseInfo) { die("Database query failed."); }
		$course = mysqli_fetch_assoc($courseInfo);
		echo "<tr><td>" . $row[University] . "</td><td>" . $course[CourseName] . "</td><td>" . $course[CourseCode] . "</td><td>" . $course[Weight] . "</td><td>" . $row[DateDecided] . "</td></tr>";
		mysqli_free_result($courseInfo);
	}
	echo "</table>";
	mysqli_free_result($uwoData);
	mysqli_free_result($equivRows);
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>List of Western Courses</title>
</head>
<body>
	<?php
	include "dbconnect.php";
	?>
	<h1>List of Western Courses</h1>
	<table>
		<tr>
			<th>Course Name</th>
			<th>Course Number</th>
			<th>Course Weight</th>
			<th>Course Suffix</th>
		<tr>
		<?php
		$sortVal = $_POST["sortVal"];
		$sortOrder = $_POST["sortOrder"];
		$query = "SELECT * FROM WesternCourse ORDER BY $sortVal $sortOrder";
		$result = mysqli_query($connection, $query);
		if (!result) { die("Database query failed."); }
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row[CourseName] . "</td><td>" . $row[CourseNumber] . "</td><td>" . $row[Weight] . "</td><td>" . $row[Suffix] . "</td></tr>";
		}
		mysqli_free_result($result);
		?>
	</table>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>
			

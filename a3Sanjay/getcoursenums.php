<?php
$query = "SELECT * FROM WesternCourse";
$result = mysqli_query($connection, $query);
if (!$result) { die("Database query failed."); }
while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value='" . $row[CourseNumber] . "'>" . $row[CourseNumber] . " - " . $row[CourseName] . "</option>";
}
mysqli_free_result($result);
?>

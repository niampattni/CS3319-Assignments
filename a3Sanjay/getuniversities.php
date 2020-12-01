<?php
$query = "SELECT * FROM University";
$result = mysqli_query($connection, $query);
if (!$result) { die("Database query failed."); }
while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value='" . $row[UniversityID] . "'>" . $row[OfficialName] . "</option>";
}
mysqli_free_result($result);
?>

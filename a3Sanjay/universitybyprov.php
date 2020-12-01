<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Universities</title>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<?php
	$prov = "'" . $_POST["uniByProv"] . "'";
	$query = "SELECT * FROM University WHERE Province = $prov";
	$result = mysqli_query($connection, $query);
	if (!$result) { die("Database query failed."); }
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<h4>" . $row[OfficialName] . "</h4>";
	}
	mysqli_free_result($result);
	?>
	<form action="index.php" method="post">
		<input type="submit" value="Go Home">
	</form>
</body>
</html>

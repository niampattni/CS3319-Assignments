<!DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>Home</title>
	<style>
		.row {
			display: flex;
		}
		.column {
			flex: 50%;
		}
	</style>
</head>
<body>
	<?php
	include "dbconnect.php"
	?>
	<h1>Home</h1>
	<div class="row">
	<div class="column">
		<form action="listcourses.php" method="post">
			<h3>Show Western Course Data</h3>
			<h4>Sort by:</h4>
			<input type="radio" name="sortVal" value="CourseName">Course Name</input><br>
			<input type="radio" name="sortVal" value="CourseNumber">Course Number</input><br>
			<h4>Order:</h4>
			<input type="radio" name="sortOrder" value="ASC">Ascending</input><br>
			<input type="radio" name="sortOrder" value="DESC">Descending</input><br>
			<input type="submit" value="List Courses"><br>
		</form>
		<form action="updatecourse.php" method="post">
			<h3>Update Western Course Data</h3>
			<select name="courseNum">
				<?php
				include "getcoursenums.php"
				?>
			</select><br>
			<p>Enter a new name: </p>
			<input type="text" name="newName"><br>
			<p>Enter a new weight: </p>
			<input type="text" name="newWeight"><br>
			<p>Enter a new suffix: </p>
			<input type="text" name="newSuffix"><br>
			<input type="submit" value="Update Course Data"><br>
		</form>
		<form action="deletecourse.php" method="post" onsubmit="return confirm('Are you sure you want to delete this course?');">
			<h3>Delete Western Course Data</h3>
			<select name="courseDel">
				<?php
				include "getcoursenums.php"
				?>
			</select><br>
			<input type="submit" value="Delete Course Data"><br>
		</form>
	</div>
	<div class=column>
		<form action="addcourse.php" method="post">
			<h3>Add a New Western Course</h3>
			<p>Enter a name: </p>
			<input type="text" name="addName"><br>
			<p>Enter a number (must start with cs): </p>
			<input type="text" name="addNum" id="addNum"><br>
			<p>Enter a weight: </p>
			<input type="text" name="addWeight"><br>
			<p>Enter a suffix: </p>
			<input type="text" name="addSuffix"><br>
			<input type="submit" value="Add Western Course"><br>
		</form>
		<form action="universityinfo.php" method="post">
			<h3>Select a University</h3>
			<select name="uniInfo">
				<?php
				include "getuniversities.php"
				?>
			</select><br>
			<input type="submit" value="See University Info">
		</form>
		<form action="universitybyprov.php" method="post">
			<h3>Select a Province</h3>
			<select name="uniByProv">
				<option value="AB">Alberta</option>
				<option value="BC">British Columbia</option>
				<option value="MB">Manitoba</option>
				<option value="NB">New Brunsqick</option>
				<option value="NL">Newfoundland and Labrador</option>
				<option value="NT">Northwest Territories</option>
				<option value="NS">Nova Scotia</option>
				<option value="NU">Nunavut</option>
				<option value="ON">Ontario</option>
				<option value="PE">Prince Edward Island</option>
				<option value="QB">Quebec</option>
				<option value="SK">Saskatchewan</option>
				<option value="YT">Yukon</option>
			</select><br>
			<input type="submit" value="See Universities">
		</form>
		<form action="equivcourses.php" method="post">
			<h3>Course Equivalents</h3>
			<select name="courseEquivNum">
				<?php
				include "getcoursenums.php"
				?>
			</select><br>
			<input type="submit" value="See Equivalent Courses">
		</form>
	</div>
	</div>
	<?php
	mysqli_close($connection);
	?>
</body>
</html>

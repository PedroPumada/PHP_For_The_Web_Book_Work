<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Table</title>
</head>
<body>
<?php // Script 12.4 - create_table.php
/* This script connects to the MySQL server, selects the database, and creates a table. */

// Connect and select:
if ($mysqli = mysqli_connect('localhost', 'root', 'jenny123')) {
	if (!mysqli_select_db($mysqli, 'myblog')) {
		print '<p style="color: red;">Could not select the database:<br />' . mysqli_error($mysqli) . '</p>';
		mysqli_close($mysqli);
		$mysqli = FALSE;
	} 
}
else { // Connection failure
		print '<p style="color: red;">Could not connect to MySQL:<br />' . mysqli_connect_error($mysqli) . '</p>';
}
// Define the query for creating the table:
if ($mysqli) {
	$query = 'CREATE TABLE entries (
		entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		title VARCHAR(100) NOT NULL,
		entry TEXT NOT NULL,
		date_entered DATETIME NOT NULL
		)';
	if (mysqli_query($mysqli, $query)) {
		print '<p>The table has been created.</p>';
	} else {
		print '<p style="color: red;">Could not create the table because:<br />' . mysqli_error($mysqli) . '.</p>
		<p>The query being run was: ' . $query . '</p>';
	}
	mysqli_close($mysqli);
}
?>
</body>
</html>


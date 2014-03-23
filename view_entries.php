<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>View My Blog</title>
</head>
<body>
<h1>My Blog</h1>
<?php // Script 12.7 - view_entries.php
$mysqli = mysqli_connect('localhost', 'root', 'jenny123');
mysqli_select_db($mysqli, 'myblog');
$query = 'SELECT * FROM entries ORDER BY date_entered DESC';
if ($r = mysqli_query($mysqli, $query)) { // Run the SELECT query
	while ($row = mysqli_fetch_array($r)) { // Grab each row as an associative array and print
		print "<p><h3>{$row['title']}</h3>{$row['entry']}<br />
		<a href=\"edit_entry.php?id={$row['entry_id']}\">Edit</a>
		<a href=\"delete_entry.php?id={$row['entry_id']}\">Delete</a>
		</p><hr />\n";
	} 
} else { // Query didn't run.
	print '<p style="color: red;">Could not retrieve the data because:<br />' .
	mysqli_error($mysqli) . '.</p><p>The query being run was: ' . $query . '</p>';
	} // End of query IF

mysqli_close($mysqli);
?>
</body>
</html>
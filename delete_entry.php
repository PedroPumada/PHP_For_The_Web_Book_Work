<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Delete a Blog Entry</title>
</head>
<body>
<h1>Delete an Entry</h1>
<?php // Script 12.8 - delete_entry.php
$mysqli = mysqli_connect('localhost', 'root', 'jenny123');
mysqli_select_db($mysqli, 'myblog'); // Connect to DB and select table
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
	if ($r = mysqli_query($mysqli, $query)) { // IF the query is successfully executed
		$row = mysqli_fetch_array($r);
		print '<form action="delete_entry.php" method="post">
		<p>Are you sure you want to delete this entry?</p>
		<p><h3>' . $row['title'] . '</h3>' . $row['entry'] . '<br />
		<input type="hidden" name="id" value="' . $_GET['id'] . '" />
		<input type="submit" name="submit" value="Delete this Entry!" /></p>
		</form>';
	} else { // Couldn't get the information
		print '<p style="color: red;"> Could not retrive the blog entry because:
		<br />' . mysqli_error($mysqli) . '.</p><p>The query being run was: ' . 
		$query . '</p>';

	}
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form
	$query = "DELETE FROM entries WHERE entry_id={$_POST['id']} LIMIT 1";
	$r=mysqli_query($mysqli, $query);
	if (mysqli_affected_rows($mysqli) == 1) {
		print '<p>The blog entry has been deleted.</p>';
	} else {
		print '<p style="color: red;">Could not delete the blog entry because: <br />' . 
		mysqli_error($mysqli) . '.</p> <p>The query being run was: ' . $query . '</p>';
	}
} else { // No ID received
	print '<p style="color: red;"> This page has been accessed in error.</p>';
} // End of main IF
mysqli_close($mysqli);
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add a Blog Entry</title>
</head>
<body>
<h1>Add a Blog Entry</h1>
<?php // Script 12.5 - add_entry.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check for form submission
	$mysqli = mysqli_connect('localhost', 'root', 'jenny123');
	mysqli_select_db($mysqli, 'myblog'); // Connec to and select database
	$problem = FALSE;
	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
		$title = mysqli_real_escape_string($mysqli, trim(strip_tags($_POST['title'])));
		$entry = mysqli_real_escape_string($mysqli, trim(strip_tags($_POST['entry'])));
	} else {
		print '<p style="color: red;">Please submit both a title and an entry.</p>';
		$problem = TRUE;
	}
	if (!$problem) {
		$query = "INSERT INTO entries 
			(entry_id, title, entry, date_entered) VALUES
			(0, '$title', '$entry', NOW())";
		if (mysqli_query($mysqli, $query)) {
			print '<p>The blog entry has been added!</p>';
		} else {
			print '<p style="color: red;">Could not add the entry because: <br />' . mysqli_error($mysqli) . 
			'</p><p>The query being run was: ' . $query . '</p>';
		}
	} // Close $problem conditional
	mysqli_close($mysqli);
} // End of form submission IF.
?>
<form action="add_entry.php" method="post">
	<p>Entry Title: <input type="text" name="title" size="40" maxsize="100" <?php if (isset($_POST['title'])) { echo "value=\"{$_POST['title']}\""; } ?> /></p>
	<p>Entry Text: <textarea name="entry" cols="40" rows="5"><?php if (isset($_POST['entry'])) { echo "{$_POST['entry']}"; } ?></textarea></p>
	<input type="submit" name="submit" value="Post This Entry!" />
</form>
</body>
</html>
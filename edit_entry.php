<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Edit a Blog Entry</title>
</head>
<body>
<h1>Edit an Entry</h1>
<?php // Script 12.9 - edit_entry.php
$mysqli = mysqli_connect('localhost', 'root', 'jenny123');
mysqli_select_db($mysqli, 'myblog');
if (isset($_GET['id']) && is_numeric($_GET[id])) { // Did the form receive an entry id?
	$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
	if ($r = mysqli_query($mysqli, $query)) { // IF the query is successful
		$row = mysqli_fetch_assoc($r);
		print '<form action="edit_entry.php" method="post">
		<p>Entry Title: <input type="text" name="title" size="40" maxsize="100" value="' .
		htmlentities($row['title']) . '" /></p>
		<p>Entry Text: <textarea name="entry" cols="40" rows="5">' . htmlentities($row['entry']) . 
		'</textarea></p>
		<input type="hidden" name="id" value="' . $_GET['id'] . '" />
		<input type="submit" name="submit" value="Update this Entry!" />
		</form>';		
	} else { // Couldn't get the information
		print '<p style="color: red;">Could not retrive the blog entry because: <br />' .
		mysqli_error($mysqli) . '.</p><p>The query being run was: ' . $query . '</p>';
	}
} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Check if the form was submitted
  	$problem =  FALSE;
  	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
  		$title = mysqli_real_escape_string($mysqli, trim(strip_tags($_POST['title'])));
  		$entry = mysqli_real_escape_string($mysqli, trim(strip_tags($_POST['entry'])));
  	} else {
  		print '<p style="color: red;">Please submit both a title and an entry </p>';
  		$problem = TRUE;
  	}
  	if (!$problem) { // No problem? Change blog entries according to query
  		$query = "UPDATE entries SET title='$title', entry='$entry' WHERE entry_id={$_POST['id']}";
  		$r = mysqli_query($mysqli, $query);
  		if (mysqli_affected_rows($mysqli) == 1) {
  			print '<p>The blog entry has been updated.</p>';
  		} else {
  			print '<p style="color: red;">Could not update the entry because:<br />' . mysqli_error($mysqli) . '.</p><p>The query being run was: ' .
  			$query . '</p>';
  		}
  	} // end no problem
} else { // no ID passed
	print '<p style="color: red;">This page has been accessed in error.</p>';
} // end of main IF
mysqli_close($mysqli);
?>
</body>
</html>
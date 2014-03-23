<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add a Quotation</title>
</head>
<body>
<?php // Script 11.1 - add_quote.php
/* This script displays and handles an HTML form. This script takes text input
and stores it in a text file. */

// Identify the file to use:
$file = '../quotes.txt';

// Check for a form submission:
if ($_SERVER[REQUEST_METHOD] == 'POST') {
	if (file_exists($file)) {
		if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.') && !empty($_POST['attribution']) )  {
	    	if (is_writable($file)) {
	    		file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX); // Write the quote
	    		file_put_contents($file, $_POST['attribution'] . PHP_EOL, FILE_APPEND | LOCK_EX); // Write the attribution
	    		print '<p>Your quotation has been stored.</p>';
	    	} else { // Could not write to the file
	          	print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
	    	}
		} else { // Failed to enter a quotation
	      print '<p style="color: red;">Please enter a quotation & attribution!</p>';
		}
	} else {
	print '<p style="color: red;">File \'quote.txt\' does not exist!</p>';
	}
} // end of submitted if
?>
<form action="add_quote.php" method="post">
<textarea name="quote" rows="5" cols="30"><?php
if(isset($_POST['quote'])) {
	print "{$_POST['quote']}";
} else {
print "Enter your quotation here.";
}
?></textarea>
<br />
<p>Attribution:<input type="text" name="attribution" size="20"/></p>
<input type="submit" name="submit" value="Add this Quote!" />
<input type="hidden" name="submitted" value="true" />
</form>
</body>
</html>
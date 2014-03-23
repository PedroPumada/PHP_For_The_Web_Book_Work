<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>View a Quotation</title>
</head>
<body>
<h1>Random Quotations</h1>
<?php // Script 11.3 - view_quote.php
/* This script displays and handles an
HTML form. This scripts reads in a file
and prints a random line from it. */

// Read the file's contents into an array:
function display_quote($file) {
	$n = count($file); // Count the number of items in the array
	$rand = rand(0, $n-1);
	if (($rand % 2 == 0) && $rand < ($n-2)) { // If it's an attribution and not the last quote
	    $rand++; // Move on to the next quote
	}
	elseif ($rand > ($n-2)) { // If the quote is the last attribution
		$rand--; // Move it back one to the quote
	} else {
		// Do nothing
	}
	print '<p>' . trim($file[$rand]) . '</p>';
	print '<p> - ' . trim($file[$rand+1]) . '</p>';
}
// Create the file array
$data = file('../quotes.txt');

display_quote($data);
display_quote($data);

?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Directory Contents</title>
</head>
<body>
<?php // Script 11.5 - list_dir.php
/* This script lists the directories and files in a directory. */

// Set the time zone:
date_default_timezone_set('America/New_York');

// Set the directory name and scan it:
$search_dir = '.';
$contents = scandir($search_dir);

// List the subdirectories of this directory:
print '<h2>Directories</h2><ul>';
foreach ($contents as $item) {
    if ( (is_dir($item)) AND (substr($item, 0, 1) != '.')) {
    //if ( (is_dir($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.')) {
    	print "<li>$item</li>\n";
    }
}
print '<hr /><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<td>Name</td>
<td>Size</td>
<td>Last Modified</td>
</tr>';
foreach ($contents as $item) {
	if ( (is_file($item)) AND (substr($item, 0, 1) != '.') ) {
	//if ( (is_file($search_dir . '/' . $item)) AND (substr($item, 0, 1) != '.') ) {
		$fs = filesize($search_dir . '/' . $item); 
		$lm = date('F j, Y', filemtime($search_dir . '/' . $item));
	print "<tr>
	<td>$item</td>
	<td>$fs bytes</td>
	<td>$lm</td>
	</tr>\n";

	}
}
print '</table>';
?>
</body>
</html>
<?php // Script 13.1 - mysql_connect.php
/* This script connects to and selects the database */

// Connect:
$mysqli = mysqli_connect('localhost', 'root', 'jenny123');

// Select:
mysqli_select_db($mysqli, 'myquotes');

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Lucky Numbers</title>
</head>
<body>
<?php // Script 4.6 - random.php
/* This script generates 3 random 
numbers. */

// Create three random numbers
$n1 = mt_rand(1, 99);
$n2 = mt_rand(1, 99);
$n3 = mt_rand(1, 99);

// Print out the numbers:
print "<p>Your lucky numbers are: <br />
$n1 <br />
$n2 <br />
$n3 </p>";

?>
</body>
</html>
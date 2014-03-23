<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmm...soups</h1>
    <?php // Script 7.3 soups3.php
    // This script creates and prints out an array

    $soups = array (
    	'Monday' => 'Clam Chowder',
    	'Tuesday' => 'White Chicken Chili',
    	'Wednesday' => 'Vegetarian',
    	'Thursday' => 'Chicken Noodle',
    	'Friday' => 'Tomato',
    	'Saturday' => 'Cream of Broccoli'
    	);

    foreach ($soups as $day => $soup) 
    {
        print "<p>$day: $soup</p>\n";
    }
    ?>
</body>
</html>

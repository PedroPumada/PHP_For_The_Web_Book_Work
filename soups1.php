<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmm...soups</h1>
    <?php // Script 7.1 soups1.php
    /* This script creates and prints out
    an array */

    // Create the array:
    $soups = array (
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian'
    );

    print "<p>$soups</p>";

    print_r ($soups);

    ?>
</body>
</html>
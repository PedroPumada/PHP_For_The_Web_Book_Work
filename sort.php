<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>My Little Gradebook</title>
</head>
<body>
    <?php // Script 7.5 - sort.php
    /* This script creates, sorts, and prints out an array */

    // Create the array
    $grades = array (
    'Richard' => 95,
    'Sherwood' => 82,
    'Toni' => 98,
    'Franz' => 87,
    'Melissa' => 75,
    'Roddy' => 85
    );

    // Print the original array:
    print "<p>Originally the array looks like this: <br />";
    foreach ($grades as $student => $grade) {
        print "$student: $grade<br />\n";
    }
    print '</p>';

    // Sort by highest grade first and reprint:
    arsort ($grades);
    print "<p>After sorting the array by value using arsort(), the array looks like this: <br />";
    foreach ($grades as $student => $grade) {
        print "$student: $grade <br />\n";
    }
    print "</p>";

    // Sort by student name and print:
    ksort($grades);
    print "<p>After sorting through the array by key using ksort(), the array looks like this: <br />";
    foreach ($grades as $student => $grade) {
        print "$student: $grade <br />\n";
    }
    print "</p>";
?>
</body>
</html>
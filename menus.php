<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Date Menus</title>
</head>
<body>
<?php // Script 10.1 - menus.php

function make_date_menus() {
    // Make the months dropdown
    $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July',
    	'August', 'September', 'October', 'November', 'December');
    print '<select name="month">';
    foreach ($months as $key => $value) {
    	print "\n<option value=\"$key\">$value</option>";
    	}
    print '</select>';

    // Make the days pull-down menu
    print '<select name="day">';
    for ($day = 1; $day <= 31; $day++) {
        print "\n<option value=\"$day\">$day</option>";
    }
    print '</select>';

    // Create the year pull-down menu
    print '<select name="year">';
    $start_year = date('Y');
    for ($y = $start_year; $y <= ($start_year + 10); $y++) {
    	print "\n<option value=\"$y\">$y</option>";
    }
    print '</select>';
} // end make_date_menus()

print '<form action="" method="post">';
make_date_menus();
print '</form>';
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <style type="text/css" media="screen">
        .error { color: red; }
    </style>
    <title>Registration</title>
</head>
<body>
<h1>Registration Results</h1>
<?php // Script 6.2 - handle_reg.php
/* This script receives seven values from register.html:
email, password, confirm, year, terms, color, submit */

// Flag variable to track success:
$okay = TRUE;

// Validate the e-mail address: 
if (empty($_POST['email'])) {
    print '<p class="error"> Please enter your e-mail address.</p>';
    $okay = FALSE;
}
// Validate the password:
if (empty($_POST['password'])) {
    print '<p class="error">Please enter your password.</p>';
    $okay = FALSE;
}
if ($_POST['password'] != $_POST['confirm']) {
    print '<p class="error">Your confirmed password does not match the original password.</p>';
    $okay = FALSE;
}
// Validate the birth year
$birthyear = $_POST['year'];
print "<p>$birthyear</p>";
if ( is_numeric($_POST['year']) ) {
    if ($_POST['year'] < 2013) {
        $age = 2013 - $_POST['year'];
    } else {
        print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
        $okay = FALSE;
    } // End of 2nd conditional
}
else { // Else for 1st conditional
    print '<p class="error">Please enter the year you were born as four digits.</p>';
    $okay = FALSE;
} // End of 1st conditional
// Confirm the terms checkbox wasn't ignored
if (!isset($_POST['terms']) OR ($_POST['terms'] != 'Yes')) {
    print '<p class="error">You must accept the terms.</p>';
    $okay = FALSE;
}
// Validate the color:
switch ($_POST['color']) {
    case 'red':
        $color_type = 'primary';
        break;
    case 'yellow':
        $color_type = 'primary';
        break;
    case 'green':
        $color_type = 'secondary';
        break;
    case 'blue':
        $color_type = 'primary';
        break;
    default:
        print '<p class="error">Please select your favorite color.</p>';
        $okay = FALSE;
        break;
} 

$chosen_color = $_POST['color'];
// If there were no errors, print a success message:
if ($okay) {
    print '<p>You have been successfully registered (but not really).</p>';
    print "<p>You will turn $age this year.</p>";
    print "<p style=\"color:$chosen_color;\">Your favorite color is a $color_type color.</p>";
}

?>
</body>
</html>

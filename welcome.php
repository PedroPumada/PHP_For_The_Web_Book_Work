<?php // Script 9.7 - welcome.php
/* This is the welcome page. The user is redirected here after they successfully log in */

// Need the session:
session_start();
define('TITLE', 'Welcome to the J.D Salinger Fan Club!');
include('templates/header.html');

print '<h2>Welcome to the J.D Salinger Fan Club</h2>';
print "<p>Hello, " . $_SESSION['email'] . "!</p>";
date_default_timezone_set('America/New_York');
$loggedin = date('g:i a', $_SESSION['loggedin']);
print "<p>You have been logged in since: " . $loggedin . "</p>";

print '<p><a href="logout.php>Click here to logout.</a></p>';

include('templates/footer.html');
?>
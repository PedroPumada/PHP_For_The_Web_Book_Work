<?php // Script 13.5 - login.php
$loggedin = false;
$error = false;
include('includes/setcookie.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if (!empty($_POST['email']) && !empty($_POST['password'])) {

		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) {
		// Correct!

			// Create the cookie:
			setcookie(COOKIE_NAME, COOKIE_VALUE, time()+3600);

			// Indicate they are logged in:
			$loggedin = true;

		} else { // Incorrect!
			$error = 'The submitted email address and password do not match those on file!';
		}
	} else { // forgot a field

		$error = 'Please make sure you enter both an email address and a password!';

	}
}

// Set the page title and include the header file
define('TITLE', 'Login');
include('templates/header.html');

// Print an error if one exists:
if ($error) {
	print '<p class="error"> ' . $error . '</p>';
}

// Indicate the user is logged in, or show the form
if ($loggedin) {
	print '<p>You are now logged in!</p>';
} else {
	print '<h2>Login Form</h2>
	<form action="login.php" method="post">
	<p><label>Email Address <input type="text" name="email" ';
	if (isset($_POST['email'])) {
		print "value=\"{$_POST['email']}\"";
	} 
	print ' /> </label></p>';
	print '<p><label>Password: <input type="password" name="password" ';
	if (isset($_POST['password'])) {
		print "value=\"{$_POST['password']}\"";
	}
	print ' /></label></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>';

}

include('templates/footer.html');
// Need the footer
?>
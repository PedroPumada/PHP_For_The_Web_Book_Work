<?php // Script 13.2 - functions.php
function is_administrator ($name = COOKIE_NAME, $value = COOKIE_VALUE) {
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) {
		return TRUE;
	} else {
		return FALSE;
	}
} // end of is_administrator() function
?>
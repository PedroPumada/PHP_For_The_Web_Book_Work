<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>View Your Settings</title>
<!-- CSS Settings -->
<style>
body {
<?php // Script 9.2 - view_settings.php 
if (isset($_COOKIE['font_size'])) {
    print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
} else {
    print "\t\tfont-size: medium;";
}
if (isset($_COOKIE['font_color'])) {
    print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
} else {
    print "\t\tcolor: #000;";
}
?>
}
</style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>
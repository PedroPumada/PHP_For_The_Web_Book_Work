<?php // Script  9.1 - customize.php

// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color'])) {
    setcookie('font_size', $_POST['font_size'], time()+10000000, '/', '', 0);
    setcookie('font_color', $_POST['font_color'], time()+10000000, '/', '', 0);

$msg = '<p>Your settings have been entered! Click <a 
href="view_settings.php">here</a>to see them in action.</p>';
} // End of submitted IF
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Customize Your Settings</title>
    <style>
    body {
        <?php // Apply settings if they are set
        if (isset($_COOKIE['font_size']) && isset($_COOKIE['font_color'])) {
            print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
            print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
        }
        elseif ( isset($_POST['font_size']) && isset($_POST['font_color'])) {
            print "\t\tcolor: #" . htmlentities($_POST['font_color']) . ";\n";
            print "\t\tfont-size: " . htmlentities($_POST['font_size']) . ";\n";
        }
        else {
            print "\t\tcolor: black;\n";
            print "\t\tfont-size: medium;\n";
        }
    ?>
    }
    </style>
</head>
<body>
<?php
if (isset($msg)) {
    print $msg;
}
?>
<p>Use this form to set your preferences:</p>
<form action="customize.php" method="post">
    <select name="font_size">
    <option value=""><?php 
    if (isset($_COOKIE['font_size'])) {
    print "{$_COOKIE['font_size']}";
    } else {
    print "Font Size"; }?></option>
    <option value="xx-small">xx-small</option>
    <option value="x-small">x-small</option>
    <option value="small">small</option>
    <option value="medium">medium</option>
    <option value="large">large</option>
    <option value="x-large">x-large</option>
    <option value="xx-large">xx-large</option>
    </select>
    <select name="font_color">
    <option value=""><?php 
    if (isset($_COOKIE['font_color'])) {
    print "{$_COOKIE['font_color']}";
    } else {
    print "Font Color"; }?></option>
    <option value="999">Gray</option>
    <option value="0c0">Green</option>
    <option value="00f">Blue</option>
    <option value="c00">Red</option>
    <option value="000">Black</option>
    </select>
    <input type="submit" name="submit" value="Set My Preferences" />
</form>
</body>
</html>
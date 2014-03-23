<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Forum Posting</title>
</head>
<body>
<?php //Script 5.2 - handle_post.php
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);
$email = trim($_POST['email']);

$name = $first_name . ' ' . $last_name;
$words = str_word_count($posting);
$posting = str_ireplace('badword', 'XXXXX', $posting);
print "<div>Thank you, $name, for your posting: <p>$posting</p>
<p>($words words)</p></div>";

// Make a link to another page:
$name = urlencode($name);
$email = urlencode($email); 
print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a>to continue</p>";
?>
</body>
</html>
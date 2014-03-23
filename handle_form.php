<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Your Feedback</title>
</head>
<body>
<?php // Script 3.3 handle_form.php
// This page receives the data from feedback.html.
// It will receive: title, name, email, response, comments and submit in $_POST
$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p>Thank you, $title $name, for your comments.</p>
         <p>You stated that you found this example to be '$response'
         and added: <br/>$comments</p>";
?>
</body>
</html>
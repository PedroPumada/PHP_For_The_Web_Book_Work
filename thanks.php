<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Thanks for using us!</title>
</head>
<body>
<?php // thanks.php exercise part of Ch. 5 PHP for the Web
    $name = trim($_GET['name']);
    $email = urldecode(trim($_GET['email']));
    
    print "<p>Thank you for coming to our site, $name, and it's great to have your e-mail: $email. Thanks again!</p>";
?>
</body>
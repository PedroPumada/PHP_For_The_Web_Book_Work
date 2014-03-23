<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Product Cost Calculator</title>
    <style type="text/css" media="screen">
        .number { font-weight: bold; }
    </style>
</head>
<body>
<?php // Script 4.2 - handle_calc.php
// Assign the form data to local variables
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];
// Begin calculating the total cost
$total = (($price*$quantity) +$shipping) - $discount;
// Calculate the tax rate and the new total
$taxrate = ($tax/100);
$taxrate++;
$total = $total * $taxrate;
// Calculate the monthly payments
$monthly = $total / $payments;
// Round out our variables
$total = number_format($total, 2);
$monthly = number_format($monthly, 2);
// Print the results
print "<p>You have selected to purchase: <br />
<span class=\"number\">$quantity</span> widget(s) at <br/>
$<span class=\"number\">$price</span> price each plus a <br/>
$<span class\"number\">$shipping</span> shipping cost and a <br />
<span class =\"number\">$tax</span> percent tax rate. <br />
After your $<span class\"number\">$discount</span> discount, the total cost is
$<span class=\"number\">$total</span>.<br />
Divided over the <span class=\"number\">$payments</span> monthly payments,
that would be $<span class=\"number\">$monthly</span> each.</p>"
?>
</body>
</html>
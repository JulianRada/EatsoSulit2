<!DOCTYPE html>
<html lang = "en">
<head>
<title>Checkout</title>
<meta charset = "utf-8" />
<style type = "text/css">
	td, th, table {border: thin solid black;}
</style>
</head>
<body>

<?php


$name = isset($_POST['name']) ? $_POST['name']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$saddress = isset($_POST['saddress']) ? $_POST['saddress']: '';
$phonenum = isset($_POST['phonenum']) ? $_POST['phonenum']: '';
$burgersteak = isset($_POST['burgersteak']) ? $_POST['burgersteak']: '';
$asado = isset($_POST['asado']) ? $_POST['asado']: '';
$salpicao = isset($_POST['salpicao']) ? $_POST['salpicao']: '';
$chickenbbq = isset($_POST['chickenbbq']) ? $_POST['chickenbbq']: '';
$laing = isset($_POST['laing']) ? $_POST['laing']: '';
$mop = isset($_POST['mop']) ? $_POST['mop']: '';


if ($burgersteak == "") $burgersteak = 0;
if ($asado == "") $asado = 0;
if ($salpicao == "") $salpicao = 0;
if ($chickenbbq == "") $chickenbbq = 0;
if ($laing == "") $laing = 0;




// Compute the item costs and total cost
$burgersteak_cost = 747.00 * $burgersteak;
$asado_cost = 800.00 * $asado;
$salpicao_cost = 650.00 * $salpicao;
$chickenbbq_cost = 624.00 * $chickenbbq;
$laing_cost = 624.00 * $laing;
$sf_cost = 45.00;

$total_items = $burgersteak + $asado + $salpicao + $chickenbbq + $laing;

$total_price = $burgersteak_cost + $asado_cost +
$salpicao_cost + $chickenbbq_cost + $laing_cost;

// Return the results to the browser in a table
?>
<h2 style="text-align:center";> Checkout Summary </h2>
<h4> Customer's Details: </h4>
<?php
print ("Name: $name <br>"); 
print ("Contact: $phonenum <br>" ); 
print ("Shipping Address: $saddress <br> ");
print ("Email Address: $email <br> ");

?>


<p /> <p />
<table>
	<caption> Order Information </caption>
	<tr>
		<th> Food </th>
		<th> Unit Price </th>
		<th> Quantity </th>
		<th> Item Cost </th>
	</tr>
	<tr>
		<td> Burger Steak (Beef) </td>
		<td> PHP 747.00 </td>
		<td> <?php print ("$burgersteak"); ?> </td>
		<td> <?php printf ("₱ %4.2f", $burgersteak_cost); ?>
		</td>
	</tr>
	<tr>
		<td> Asado (Pork) </td>
		<td> PHP 800.00 </td>
		<td> <?php print ("$asado"); ?> </td>
		<td> <?php printf ("₱ %4.2f", $asado_cost); ?>
		</td>
	</tr>
	<tr>
		<td> Salpicao (Beef) </td>
		<td> PHP 650.00 </td>
		<td> <?php print ("$salpicao"); ?> </td>
		<td> <?php printf ("₱ %4.2f", $salpicao_cost); ?>
		</td>
	</tr>
	<tr>
		<td> Chicken Barbeque (Chicken) </td>
		<td> PHP 624.00 </td>
		<td> <?php print ("$chickenbbq"); ?> </td>
		<td> <?php printf ("₱ %4.2f", $chickenbbq_cost); ?>
		</td>
    </tr>
    <tr>
		<td> Special Laing (Vegetable) </td>
		<td> PHP 624.00 </td>
		<td> <?php print ("$laing"); ?> </td>
		<td> <?php printf ("₱ %4.2f", $laing_cost); ?>
		</td>
	</tr>
</table>
<p /> <p />
<?php
//Shipping Cost is free with 0 item in cart
    if ($total_items == 0){ $sf_cost = 0; }
print "You ordered $total_items Food <br />";
    // Computation of Discount
printf ("Your total bill is: ₱ %5.2f <br />", $total_price * 1.12 + $sf_cost);
?>
</body>
</html>


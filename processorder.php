<?php
$tireqty = $_POST["tireqty"];
$oilqty = $_POST["oilqty"];
$sparkqty = $_POST["sparkqty"];
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Your order is performed ".date('H:i, jS F Y')."</p>";
echo "<p>Your order is :</p>";
echo "<p>".htmlspecialchars($tireqty).' tires</p>';
echo "<p>".htmlspecialchars($oilqty).' oil</p>';
echo "<p>".htmlspecialchars($sparkqty).' sparks</p>';
echo "Ordered quantity - ".$totalqty."<br>";
define('TIREPRICE', 100);
define('OILEPRICE', 10);
define('SPARKPRICE', 4);
$totalamount = $tireqty * TIREPRICE
    + $oilqty * OILEPRICE
    + $sparkqty * SPARKPRICE;
echo "Summ: $".number_format($totalamount, 2)."<br>";
$taxrate = 0.10;
$totalamount *=1.1;
echo "Summ with tax: $".number_format($totalamount, 2)."<br>";
/**
 * Created by PhpStorm.
 * User: Dmitr
 * Date: 16.02.2018
 * Time: 17:52
 */
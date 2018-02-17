<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];
$tireqty = $_POST["tireqty"];
$oilqty = $_POST["oilqty"];
$sparkqty = $_POST["sparkqty"];
$address = $_POST["address"];
$date = date('H:i, jS F Y');
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<p>Your order is performed " . $date . "</p>";
echo "<p>Your order is :</p>";
echo "<p>" . htmlspecialchars($tireqty) . ' tires</p>';
echo "<p>" . htmlspecialchars($oilqty) . ' oil</p>';
echo "<p>" . htmlspecialchars($sparkqty) . ' sparks</p>';
echo "<p>Ordered quantity - " . $totalqty . "</p>";
echo "<p>Address - " . htmlspecialchars($address) . "</p>";
define('TIREPRICE', 100);
define('OILEPRICE', 10);
define('SPARKPRICE', 4);
$totalamount = $tireqty * TIREPRICE
    + $oilqty * OILEPRICE
    + $sparkqty * SPARKPRICE;
echo "<p>Summ: $" . number_format($totalamount, 2) . "</p>";
$taxrate = 0.10;
$totalamount *= 1 + $taxrate;
echo "<p>Summ with tax: $" . number_format($totalamount, 2) . "</p>";
$outputstring = $date . '\t' . $tireqty . ' шин\t' . $oilqty . ' бутылок масла\t' . $sparkqty . ' свечей зажигания\t\$' . $totalamount . '\t' . $address . '\n';
$fp = fopen("$document_root/../orders/orders.txt", "ab");
flock($fp, LOCK_EX);
fwrite($fp, $outputstring);
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>Заказ записан.</p>";
/**
 * Created by PhpStorm.
 * User: Dmitr
 * Date: 16.02.2018
 * Time: 17:52
 */
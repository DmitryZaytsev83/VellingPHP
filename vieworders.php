<?php
if ($_POST["name"]) {
    $document_root = $_SERVER['DOCUMENT_ROOT'];
//    $fp = fopen("$document_root/../orders/orders.txt", "rb");
//    flock($fp, LOCK_SH);
//    echo "<p>" . nl2br(fread($fp, filesize("$document_root/../orders/orders.txt"))) . "</p>";
//    flock($fp, LOCK_UN);
//    fclose($fp);
    $orders = file("$document_root/../orders/orders.txt");
    var_dump($orders[0]);
    $orders = explode("\n", $orders[0]);
    $number_of_orders = count($orders);
    echo $number_of_orders."<br>";
    if($number_of_orders === 0) {
        echo "<p><strong>Ожидающие заказы отсутствуют.</br>Пожалуйста, попробуйте позже.</strong></p>";
    }
    for($i = 0; $i < $number_of_orders; $i++) {
        echo $orders[$i]."<br>";
    }
}
/**
 * Created by PhpStorm.
 * User: Dmitr
 * Date: 17.02.2018
 * Time: 17:06
 */
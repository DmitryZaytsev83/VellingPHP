<?php
if ($_POST["name"]) {
    $document_root = $_SERVER['DOCUMENT_ROOT'];
    $fp = fopen("$document_root/../orders/orders.txt", "rb");
    flock($fp, LOCK_SH);
    echo "<p>" . nl2br(fread($fp, filesize("$document_root/../orders/orders.txt"))) . "</p>";
    flock($fp, LOCK_UN);
    fclose($fp);
}
/**
 * Created by PhpStorm.
 * User: Dmitr
 * Date: 17.02.2018
 * Time: 17:06
 */
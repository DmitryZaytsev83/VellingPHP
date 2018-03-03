<?php
foreach ($_POST as $key => $value) {
    echo $key . " - " . $value . "<br>";
}
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

$toaddress = "ushii@mail.ru";
$subject = "Отзыв из веб-сайта";
$mailcontent = "Имя клиента: " . str_replace("\r\n", "", $name) . "\n" . "Адрес электронной почты клиента: " . str_replace("\r\n", "", $email) . "\n" . "Комментарий клиента: " . str_replace("\r\n", "", $feedback) . "\n";
$fromaddress = "From: webserver@example.com";
echo $mailcontent;
//mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автозапчасти от Вовчика</title>
</head>
<body>
<h1>Отзыв отправлен</h1>
<p>Ваш отзыв был отправлен</p>
<p><?php echo nl2br(htmlspecialchars($feedback)); ?></p>
</body>
</html>

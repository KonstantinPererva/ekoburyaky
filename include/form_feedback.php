<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'irenpoz@yandex.ru';
$subject = 'Форма обратной связи';
$msg = "Имя: $name\r\nE-mail: $email\r\nСообщение: $message";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>

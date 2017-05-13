<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$question = $_POST['question'];
$to = 'irenpoz@yandex.ru';
$subject = 'Ответьте на мой вопрос';
$msg = "Имя: $name\r\nE-mail: $email\r\nТел.: $tel\r\nВопрос: $question";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>

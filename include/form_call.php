<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$to = 'irenpoz@yandex.ru';
$subject = 'Перезвоните мне';
$msg = "$name\n$tel";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>

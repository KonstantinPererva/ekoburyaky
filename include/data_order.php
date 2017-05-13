<?php

$data = $_POST['dataOrder'];
$to = 'irenpoz@yandex.ru';
$subject = 'Заказ товара';
$msg = "$data";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>
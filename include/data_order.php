<?php

$data = $_POST['dataOrder'];
$to = 'info@ekoburyaky.in.ua';
$subject = 'Заказ товара';
$msg = "$data";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>
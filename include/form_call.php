<?php

$name = $_POST['name'];
$tel = $_POST['tel'];
$to = 'info@ekoburyaky.in.ua';
$subject = 'Перезвоните мне';
$msg = "$name\n$tel";

mail($to,$subject,$msg,"From: <info@ekoburyaky.in.ua>");

?>

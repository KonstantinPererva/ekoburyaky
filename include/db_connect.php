<?php
$db_host = 'localhost';
$db_user = 'admin';
$db_pass = '048204';
$db_database = 'db_shop';

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die ('No connect DB'.mysql_error());
?>

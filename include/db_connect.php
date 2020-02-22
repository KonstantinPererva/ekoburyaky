<?php
$db_host = 'localhost';
$db_user = 'sjcraymx_admin';
$db_pass = '040506ib';
$db_database = 'sjcraymx_db';

$link = mysql_connect($db_host,$db_user,$db_pass);

mysql_select_db($db_database,$link) or die ('No connect DB'.mysql_error());
?>

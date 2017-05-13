<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'db_connect.php';
	$id = $_POST['id'];

	$result = mysql_query("SELECT * FROM cart,table_products WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_products.products_id = cart.cart_id_products",$link);
	if(mysql_num_rows($result) > 0){
		$row = mysql_fetch_array($result);
		do{
			$count = $count + $row['cart_count'];
		}
		while($row = mysql_fetch_array($result));
		echo $count;
	}else{
		echo '0';
	}
};
?>


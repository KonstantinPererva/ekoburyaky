<?php
include 'include/db_connect.php';
session_start();

$id = $_GET['id'];
$action = $_GET['action'];
$t = 'Корзина товаров';
switch ($action) {
	case 'clear':
		$clear = mysql_query("DELETE FROM cart WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
		break;
	
	case 'delete':
		$delete = mysql_query("DELETE FROM cart WHERE cart_id = '$id' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'",$link);
		break;
};

if (isset($_POST["submitdata"])){
$_SESSION["order_name"] = $_POST["order_name"];
$_SESSION["order_email"] = $_POST["order_email"];
$_SESSION["order_tel"] = $_POST["order_tel"];
$_SESSION["order_note"] = $_POST["order_note"];

header("Location: cart.php?action=completion");
};

include 'include/header.php';

$t = 'Корзина товаров';

include 'include/container.php';
?>
						<div class="cart_main">
							<h2 class="h2 text-uppercase text-center">Корзина товаров</h2>
<?php 

$action = $_GET['action'];

switch ($action) {
	case 'cart':

echo '
							<div class="row">
								<div class="col-xs-12 step">
									<p>
										<span>
										<a href="cart.php?action=cart" class="active_step">
											1. Корзина товаров
										</a>
										</span>
										&rarr;
										<span>
											<a href="cart.php?action=confirm">
												2. Контактная информация
											</a>
										</span>
										&rarr;
										<span>
											<a href="cart.php?action=completion">
												3. Завершение
											</a>
										</span>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<strong>
										Шаг 1 из 3
									</strong>
								</div>
								<div class="col-md-8 col-xs-4">&nbsp;</div>
								<div class="col-md-2 col-xs-4">
									<a href="cart.php?action=clear" class="clear">Очистить</a>
								</div>
							</div>
							<hr />
';

 $result = mysql_query("SELECT * FROM cart,table_products WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_products.products_id = cart.cart_id_products",$link);
 if(mysql_num_rows($result) > 0){
 	$row = mysql_fetch_array($result);

 	do{
 		$int = $row['cart_price']*$row['cart_count'];
 		$all_price = $all_price+$int;

 		echo '
				 			<div class="row">
				 				<div class="col-sm-2 col-xs-5">
				 					<img src="images/shop/img-products/img-small/'.$row["image"].'" alt="Товар" width="100">
				 				</div>
				 				<div class="col-sm-4 col-xs-7">
				 					<p class="prod_name_cart text-center">
										<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
									</p>
								</div>
								<div class="col-sm-2 col-xs-5 text-center">
									<span class="count_minus" data-cartId="'.$row['cart_id'].'">
										<i class="fa fa-minus-square-o" aria-hidden="true"></i>
									</span>
									<input id="input-id'.$row['cart_id'].'" type="text" maxlength="3" class="count_input" data-cartId="'.$row['cart_id'].'" value="'.$row['cart_count'].'">
									<span class="count_plus" data-cartId="'.$row['cart_id'].'">
										<i class="fa fa-plus-square-o" aria-hidden="true"></i>
									</span>
								</div>
								<div id="product'.$row['cart_id'].'" class="col-sm-3 col-xs-5 text-center cart-count">
									<h5>
										<span class="span_count">'.$row['cart_count'].'</span> x <span>'.$row["cart_price"].'грн</span>
									</h5>
									<p data-price="'.$row["cart_price"].'"><strong>'.$int.' грн</strong></p>
								</div>
								<div class="col-sm-1 col-xs-2">
									<a href="cart.php?id='.$row['cart_id'].'&action=delete" class="delete">
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<hr>
			';
	}
	while($row = mysql_fetch_array($result));

		echo '
							<div class="cart_in_total text-right">
								<h2>Итого: <strong>'.$all_price.'</strong> грн</h2>
							</div>
							<div class="further text-right">
								<a href="cart.php?action=confirm" class="btn_green">Далее</a>
							</div>
		';

}else{
 	echo '
 		<h3 class="text-center">Корзина пустая</h3>
 	';
 }
		break;

	case 'confirm':
	echo '
							<div class="row">
								<div class="col-xs-12 step">
									<p><span>
										<a href="cart.php?action=cart">1. Корзина товаров</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=confirm" class="active_step">2. Контактная информация</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=completion">3. Завершение</a>
									</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<strong>Шаг 2 из 3</strong>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-xs-12">
									<form method="post" id="form_confirm">
										<div class="wr_in">
											<label for="order_name">Ваше имя <span class="text-red">*</span></label>
											<input id="order_name" type="text" name="order_name" required="required" value="'.$_SESSION["order_name"].'" />
										</div>
										<div class="wr_in">
											<label for="order_email">Ваш E-mail <span class="text-red">*</span></label>
											<input id="order_email" type="email" name="order_email" required="required" value="'.$_SESSION["order_email"].'" />
										</div>
										<div class="wr_in">
											<label for="order_tel">Ваш телефон <span class="text-red">*</span></label>
											<input id="order_tel" type="tel" name="order_tel" pattern="0[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required="required" value="'.$_SESSION["order_tel"].'" />
											<small>Формат ввода: 097-699-17-79</small>
										</div>
										<div class="wr_in">
											<label for="order_note">Примечание</label>
											<textarea id="order_note" name="order_note" rows="4">'.$_SESSION["order_note"].'</textarea>
										</div>
										<div class="further">
											<input type="submit" class="btn_green" value="Далее" name="submitdata">
										</div>
									</form>
								</div>
							</div>
	';

		break;

	case 'completion':
 	 $result = mysql_query("SELECT * FROM cart,table_products WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_products.products_id = cart.cart_id_products",$link);
 if(mysql_num_rows($result) > 0){
 	$row = mysql_fetch_array($result);

 	do{
 		$int = $row['cart_price']*$row['cart_count'];
 		$all_price = $all_price+$int;
 	}
	while($row = mysql_fetch_array($result));
 		$pricecart = $all_price; 
 };
	echo '
							<div class="row">
								<div class="col-xs-12 step">
									<p><span>
										<a href="cart.php?action=cart">1. Корзина товаров</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=confirm">2. Контактная информация</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=completion" class="active_step">3. Завершение</a>
									</span></p>
								</div>
								<div class="col-xs-12">
									<strong>Шаг 3 из 3</strong>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-xs-12" id = "verificationInformation">
									<ul id="list-info">
										<li><strong>Имя :</strong> '.$_SESSION["order_name"].'</li>
										<li><strong>E-mail :</strong> '.$_SESSION["order_email"].'</li>
										<li><strong>Телефон :</strong> '.$_SESSION["order_tel"].'</li>
										<li><strong>Примечание :</strong> '.$_SESSION["order_note"].'</li>
										<li><strong>Сумма заказа :</strong> '.$pricecart.' грн.</li>
										<li><strong>Товар :</strong>
											<ol>
	';

 	 $result = mysql_query("SELECT * FROM cart,table_products WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_products.products_id = cart.cart_id_products",$link);
 if(mysql_num_rows($result) > 0){
 	$row = mysql_fetch_array($result);

 	do{
 		$int = $row['cart_price']*$row['cart_count'];
 		$all_price = $all_price+$int;
 	
	echo '
												<li>'.$row["title"].' - <b>'.$row['cart_count'].'</b> шт - <b>'.$int.'</b> грн</li>
	';
}
	while($row = mysql_fetch_array($result)); 
 };	
echo '
											</ol>
										</li>
									</ul>
									<form method="POST" id="orderedGoods">
										<p><input type="submit" id="subDataOrder" value="Заказать" class="btn_green in-btn-cart" name="subDataOrder"></p>
										<textarea name="dataOrder" id="textOrderedGoods" style="visibility:hidden;"></textarea>
									</form>
								</div>
							</div>
';
		break;
	
	default:

echo '
							<div class="row">
								<div class="col-xs-12 step">
									<p><span>
										<a href="cart.php?action=cart" class="active_step">1. Корзина товаров</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=confirm">2. Контактная информация</a>
									</span>
									&rarr;
									<span>
										<a href="cart.php?action=completion">3. Завершение</a>
									</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2 col-xs-4">
									<strong>Шаг 1 из 3</strong>
								</div>
								<div class="col-md-8 col-xs-4">&nbsp;</div>
								<div class="col-md-2 col-xs-4"><a href="cart.php?action=clear" class="clear">Очистить</a></div>
							</div>
							<hr />
';


 $result = mysql_query("SELECT * FROM cart,table_products WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND table_products.products_id = cart.cart_id_products",$link);
 if(mysql_num_rows($result) > 0){
 	$row = mysql_fetch_array($result);

 	do{
 		$int = $row['cart_price']*$row['cart_count'];
 		$all_price = $all_price+$int;

 		echo '
				 			<div class="row">
				 				<div class="col-lg-2 col-xs-4">
				 					<img src="images/shop/img-products/img-small/'.$row["image"].'" alt="Товар" width="100">
				 				</div>
				 				<div class="col-lg-5 col-xs-8">
				 					<p class="prod_name_cart text-center">
										<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
									</p>
								</div>
								<div class="col-lg-1 col-xs-3 text-center">
									<span class="count_minus" data-cartId="'.$row['cart_id'].'">
										<i class="fa fa-minus-square-o" aria-hidden="true"></i>
									</span>
									<input id="input-id'.$row['cart_id'].'" type="text" maxlength="3" class="count_input" data-cartId="'.$row['cart_id'].'" value="'.$row['cart_count'].'">
									<span class="count_plus" data-cartId="'.$row['cart_id'].'">
										<i class="fa fa-plus-square-o" aria-hidden="true"></i>
									</span>
								</div>
								<div id="product'.$row['cart_id'].'" class="col-lg-3 col-xs-7 text-center">
									<h5>
										<span class="span_count">'.$row['cart_count'].'</span> x <span>'.$row["cart_price"].'грн</span>
									</h5>
									<p data-price="'.$row["cart_price"].'"><strong>'.$int.' грн</strong></p>
								</div>
								<div class="col-lg-1 col-xs-2">
									<a href="cart.php?id='.$row['cart_id'].'&action=delete" class="delete">
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</div>
							<hr>
			';
	}
	while($row = mysql_fetch_array($result));

		echo '
							<div class="cart_in_total text-right">
								<h2>Итого: <strong>'.$all_price.'</strong> грн</h2>
							</div>
							<div class="further text-right">
								<a href="cart.php?action=confirm" class="btn_green">Далее</a>
							</div>
		';

}else{
 	echo '
 	<h3 class="text-center">Корзина пустая</h3>
 	';
 }
		break;
};
 ?>

				</div>
<script>
	  function sub() {
		function Order(){
			var data = document.getElementById('verificationInformation').textContent;
			document.getElementById('textOrderedGoods').value = data;
		}
		document.getElementById('subDataOrder').addEventListener("click",Order);
	  }

	  document.addEventListener("DOMContentLoaded", sub);
</script>
<?php 
include 'include/footer.php';
 ?>
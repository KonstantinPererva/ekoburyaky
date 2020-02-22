<?php
$t = 'Магазин';
include 'include/db_connect.php';
include 'include/header.php';

?>

<?php
include 'include/container.php';
?>

						<div class="row">
							<h2 class="h2 text-uppercase text-center"><?php echo $t; ?></h2>

<?php 

include 'include/functions.php';

$product = clear_string($_GET['product']);

switch ($product) {
case 'milk':

echo '						<h2 class="h2-products text-center">Молочная продукция</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';

$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='milk' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center fz-0">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	
		';

	}
	while($row = mysql_fetch_array($result));
};
echo '
							</div>
';
break;


case 'vegetables_and_fruits':

echo '						<h2 class="h2-products text-center">Свежие овощи и фрукты</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='veg_fru' ORDER BY products_id DESC $quri_start_num_veg",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	
		';
	}
	while($row = mysql_fetch_array($result));
};
echo '
							</div>
';
break;
	

case 'conservation':

echo '						<h2 class="h2-products text-center">Консервация</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='conserv' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			

								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	

		';
	}
	while($row = mysql_fetch_array($result));
};
echo '
							</div>
';
break;


case 'drying':

echo '						<h2 class="h2-products text-center">Сушка</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='drying' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	
		';
	}
	while($row = mysql_fetch_array($result));
};
echo '						</div>
		';
break;

case 'goats':

echo '						<h2 class="h2-products text-center">Козы</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='goats' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	

		';
	}
	while($row = mysql_fetch_array($result));
};
echo '						</div>';
break;


case 'seedling':

echo '						<h2 class="h2-products text-center">Посадматериал</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='seedling' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>
		';
	}
	while($row = mysql_fetch_array($result));
};
echo '						</div>';
break;


case 'service':

echo '						<h2 class="h2-products text-center">Услуги</h2>
							<div class="col-xs-12 fz-0 text-center p-10">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='service' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>	
		';
	}
	while($row = mysql_fetch_array($result));
};
echo '						</div>';
break;

default:

echo '						<h2 class="h2-products text-center">Молочная продукция</h2>
							<div class="col-xs-12 wr-prod-cart">';
$result = mysql_query("SELECT * FROM table_products WHERE visible='1' AND product_type='milk' ORDER BY products_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
								<figure class="prod_card">
									<a href="viev_content.php?id='.$row["products_id"].'">
										<div class="wr-prod__img">
											<img src="images/shop/img-products/img-small/'.$row["image"].'" class="prod__img" alt="Товар">
										</div>
									</a>	
									<figcaption class="prod_data">
										<p class="prod_name text-center">
											<a href="viev_content.php?id='.$row["products_id"].'">'.$row["title"].'</a>
										</p>
										<div class="row">
											<div class="col-xs-12 text-center">
												<div class="btn-group">
													<a href="viev_content.php?id='.$row["products_id"].'" class="btn btn-info btn-details">
													Подробней
													</a>
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
															<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</figcaption>
								</figure>
		';

	}
	while($row = mysql_fetch_array($result));
};
echo '						</div>';
break;

};
?>
						</div>

<?php 
include 'include/footer.php';
 ?>
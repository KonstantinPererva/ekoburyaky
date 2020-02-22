<?php
$t = 'Наша продукция';
include 'include/db_connect.php';
include 'include/header.php';
$id = $_GET["id"];
?>

<?php
include 'include/container.php';
?>

						<div class="products_main clearfix">
							<h2 class="h2 text-center text-uppercase">Описание товара</h2>
							<div class="row">
<?php 
$result = mysql_query("SELECT * FROM table_products WHERE products_id='$id'",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{
		echo '
								<figure class="descr_prod">
									<div class="col-md-6">
										<img src="images/shop/img-products/img-big/'.$row["image"].'" alt="Товар" class="img-responsive center-block img-thumbnail">
									</div>
									<div class="col-md-6">
										<figcaption class="d_p_data">
											<p class="text-center f_w f-s-18">'.$row["title"].'</p>
											'.$row["description"].'
											<div>
												<span class="d_p_price">
													<a href="" data-prodId="'.$row["products_id"].'" class="btn btn-success prod_price add_cart">
														'.$row["price"].' грн.
														<i class="fa fa-cart-plus" aria-hidden="true"></i>
													</a>
												</span>
											</div>
										</figcaption>
									</div>
								</figure>

		';

	}
	while($row = mysql_fetch_array($result));
}
?>
</div>
</div>



<?php 
include 'include/footer.php';
 ?>
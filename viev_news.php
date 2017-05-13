<?php
$t = 'Статьи';
include 'include/db_connect.php';
include 'include/header.php';

$id = $_GET["id"];
?>

<?php
include 'include/container.php';
?>

						<div class="articles_main">
<?php 
$result = mysql_query("SELECT * FROM news WHERE news_id='$id'",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{

		echo '
			
							<h2 class="h2_news text-center">'.$row["name_news"].'</h2>
							<div class="wr_v_n_img f_l">
								<img src="images/img-news/img-small/'.$row["news_img"].'" alt="новости"  class="v_n_img">
								<a class="fancybox larger_image_news" rel="" href="images/img-news/img-big/'.$row["news_img"].'">
									<i class="fa fa-search-plus f-s-22" aria-hidden="true"></i>
								</a>
							</div>
							<p class="date_news">
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<span>'.$row["news_datetime"].'</span>
							</p>
							<div>
								<p>
									'.$row["description"].'
								</p>
								<p>
									<a href="articles.php" class="btn btn-success">Другие статьи</a>
								</p>
							</div>
		';

	}
	while($row = mysql_fetch_array($result));
}
?>
						</div>
<?php 
include 'include/footer.php';
 ?>
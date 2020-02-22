<?php
$t = 'Статьи';
include 'include/db_connect.php';
include 'include/header.php';

?>
<?php
include 'include/container.php';
?>
						<div class="articles_main">
							<h2 class="h2 text-center text-uppercase"><?php echo $t; ?></h2>
<?php
$num = 6;
$page = (int)$_GET['page'];
$count = mysql_query("SELECT COUNT(*) FROM news",$link);
$temp = mysql_fetch_array($count);
if($temp[0] > 0){
	$tempcount = $temp[0];
	$total = (($tempcount - 1) / $num) + 1;
	$total = intval($total);
	$page = intval($page);
	if(empty($page) or $page <= 0){
		$page = 1;
	};
	if($page > $total){
		$page = $total;
	};
	$start = $page * $num - $num;
	$quri_start_num = "LIMIT $start, $num";
}
$result = mysql_query("SELECT * FROM news ORDER BY news_id DESC $quri_start_num",$link);
if(mysql_num_rows($result) > 0){
	$row = mysql_fetch_array($result);
	do{
		echo '
							<div class="news_card">
								<div class="row">
									<div class="col-sm-4 img_news">
										<img src="images/img-news/img-small/'.$row["news_img"].'" alt="новости" class="img-responsive img-thumbnail"></div>
									<div class="col-sm-8 data_news">
										<div class="h3_news">
											<a href="'.$row["news_link_source"].'">
												<h3>'.$row["news_name"].'</h3>
											</a>
										</div>
										<div class="descr_news_small">
											<p>
												'.$row["news_descr"].'
											</p>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<p>
													<strong>Источник статьи:</strong> '.$row["news_name_source"].'
												</p>
												<a href="'.$row["news_link_source"].'" class="btn btn-success" target="_blank">Читать</a>
											</div>
										</div>
									</div>
								</div>
							</div>
';
	}
	while($row = mysql_fetch_array($result));
};
?>
							<div class="row">
								<div class="col col-12">
<?php 

if($page != 1){
	$pstr_prev = '<li><a class="pstr_prev" href="articles.php?page='.($page - 1).'">&lt</a></li>';
}
if($page != $total){
	$pstr_next = '<li><a class="pstr_next" href="articles.php?page='.($page + 1).'">&gt</a></li>';
}
	if($page - 5 > 0) $page5left = '<li><a href="articles.php?page='.($page - 5).'">'.($page-5).'</a></li>';
	if($page - 4 > 0) $page4left = '<li><a href="articles.php?page='.($page - 4).'">'.($page-4).'</a></li>';
	if($page - 3 > 0) $page3left = '<li><a href="articles.php?page='.($page - 3).'">'.($page-3).'</a></li>';
	if($page - 2 > 0) $page2left = '<li><a href="articles.php?page='.($page - 2).'">'.($page-2).'</a></li>';
	if($page - 1 > 0) $page1left = '<li><a href="articles.php?page='.($page - 1).'">'.($page-1).'</a></li>';

	if($page + 5 <= $total) $page5right = '<li><a href="articles.php?page='.($page + 5).'">'.($page + 5).'</a></li>';
	if($page + 4 <= $total) $page4right = '<li><a href="articles.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
	if($page + 3 <= $total) $page3right = '<li><a href="articles.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
	if($page + 2 <= $total) $page2right = '<li><a href="articles.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
	if($page + 1 <= $total) $page1right = '<li><a href="articles.php?page='.($page + 1).'">'.($page + 1).'</a></li>';

	if($total >1){
		echo '
									<div class="pstrnav">
										<ul>
		';
		echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left;
		echo "<li><a class='pstr_active' href='articles.php?page=".$page."'>".$page."</a></li>";
		echo $page1right.$page2right.$page3right.$page4right.$page5right.$pstr_next;
		echo '
										</ul>
									</div>
		';
	}
?>
								</div>
							</div>
						</div>
<?php 
include 'include/footer.php';
 ?>
<?php
$t = 'О нас';
include 'include/db_connect.php';
include 'include/header.php';
?>
<?php
include 'include/container.php';
?>
						<h2 class="h2 text-center"><?php echo $t ?></h2>
						<div class="about_us_main">
							<div class="row">
								<div class="col-xs-12">
									<h3 class="h3-index text-uppercase text-center f_w">Приветствуем вас на страничках нашего сайта!</h3>
									<p>
										<img src="images/family/family-1.jpg" alt="Наша семья" class="img_ab_us img-responsive img-family">
										
									</p>
									<p>
										Это мы, <strong>семья Буряковских</strong>. Живём в том месте, где нам нравится, занимаемся тем, что полезно и с удовольствием. Наш проект не связан с деятельностью какой-либо организации или группы, кроме нашей семьи. Будем рады, если предоставленная нами информация о нас и нашей деятельности, наш опыт пригодится вам и вы сможете что-то применить в вашей жизни.
									</p>
									<p>
										<strong>Мы живём в с. Гришковка, Змиевского р-на, Харьковской обл.</strong>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div id="map-index" class="img_ab_us">
									</div>
								</div>
							</div>
						</div>
					

<?php 
include 'include/footer.php';
 ?>
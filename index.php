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
									<div id="map" class="img_ab_us"></div>
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO1G8MC4ZYQ_B7k5repEKfiz1KSeS8cHg&callback=initMap"></script>
                                    <script>
                                        function initMap(){
                                            var map = new google.maps.Map(document.getElementById('map'),{
                                                zoom: 11,
                                                center: {lat: 49.665675, lng: 36.158005},
                                                scrollwheel: false
                                            });
                                            var marker = new google.maps.Marker({
                                                position: {lat: 49.665675, lng: 36.158005},
                                                map: map,
                                                visible: true,
                                                icon: 'images/mark_map.png'
                                            });
                                        };
                                    </script>
                                </div>
							</div>
						</div>
<?php 
include 'include/footer.php';
 ?>
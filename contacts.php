<?php
$t = 'Контакты';
include 'include/db_connect.php';
include 'include/header.php';

$id = $_GET["id"];
?>


<?php
include 'include/container.php';
?>

						<div class="contact_main">
							<h2 class="h2 text-uppercase text-center">
								<?php echo $t; ?></h2>
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<div id="map" style="width:100%; height:250px; margin-bottom: 20px;" class="img_ab_us"></div>
								</div>
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
								<div class="col-sm-6 col-xs-12">
									<address class="address">
										<span> <i class="fa fa-phone text-green" aria-hidden="true"></i>
											<a href="tel:0676991779">(067) 699-17-79</a>
										</span>
										<span>
											<i class="fa fa-envelope text-green" aria-hidden="true"></i>
											<a href="mailto:irina@ekoburyaky.in.ua" target="blank">irina@ekoburyaky.in.ua</a>
										</span>
										<span>
											<i class="fa fa-clock-o text-green" aria-hidden="true"></i>
											Время приема заказов с 09:00 до 20:00
										</span>
										<span>
											<i class="fa fa-map-marker text-green" aria-hidden="true"></i>
											Харьковская обл., Змиевской район, хозяйство Буряковских
										</span>
									</address>
								</div>
							</div>
							<div class="row">
							<div class="form_contacts col-xs-12">
								<fieldset class="wrap_form_feedback">
									<legend>
										<h3 class="text-center">Вы можете связаться с нами, заполнив форму ниже</h3>
									</legend>
									<div class="row">
										<form action="form_feedback" method="post" id="feedback">
											<div class="in-name col-sm-6 col-xs-12">
												<i class="fa fa-user text-green" aria-hidden="true"></i>
												<label for="name" class="control-label">Введите ваше имя: <span class="text-red">*</span></label>
												<input type="text" id="name" name="name" required="required" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
											</div>
											<div class="in-email col-sm-6 col-xs-12">
												<i class="fa fa-envelope text-green" aria-hidden="true"></i>
												<label for="email" class="control-label">Введите адрес email: <span class="text-red">*</span></label>
												<input type="email" id="email" name="email" required="required" placeholder="Например, ivan@mail.ru" maxlength="30">
											</div>
											<div class="message col-xs-12">
												<i class="fa fa-commenting text-green" aria-hidden="true"></i>
												<label for="message">Введите сообщение: <span class="text-red">*</span></label>
												<textarea id="message" rows="4" name="message" placeholder="Введите сообщение от 20 до 500 символов" minlength="20" maxlength="500" required="required"></textarea>
											</div>
											<div class="submit text-center col-xs-12">
												<input type="submit" id="subFeedback" name="subFeedback" value="Отправить сообщение" class="btn btn_blue">
											</div>
										</form>
									</div>
								</fieldset>
							</div>
						</div>
					</div>



<?php 
include 'include/footer.php';
 ?>		
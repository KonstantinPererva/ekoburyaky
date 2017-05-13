<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<title><?php echo $t; ?></title>
		<link rel="stylesheet" href="styles/normalize.css" />
		<link rel="stylesheet" href="styles/bootstrap.min.css" />
		<link rel="stylesheet" href="styles/jquery.fancybox.css" />
		<link rel="stylesheet" href="styles/font-awesome.css" />
		<link rel="stylesheet" href="styles/style.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
		<link href="images/favicon.ico" rel="icon" />
	</head>
<body>
	<form action="/include/form_call.php" method="post" id="form_call">
		<div class="wr_in">
			<label for="in-21">Ваше имя <span class="text-red">*</span></label>
			<input id="in-21" type="text" name="name" required="required">
		</div>
		<div class="wr_in">
			<label for="in-22">Ваш телефон <span class="text-red">*</span></label>
			<input id="in-22" type="tel" name="tel" required="required" pattern="0[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
			<small>Формат ввода: 097-699-17-79</small>
		</div>
		<input type="submit" class="btn_request_call" value="Заказать">	
	</form>
	<form action="form_question.php" method="post" id="form_question">
		<div class="wr_in">
			<label for="in-11">Ваше имя <span class="text-red">*</span></label>
			<input id="in-11" type="text" name="name" required="required">
		</div>
		<div class="wr_in">
			<label for="in-13">Ваш E-mail <span class="text-red">*</span></label>
			<input id="in-13" type="email" name="email" required="required">
		</div>
		<div class="wr_in">
			<label for="in-12">Ваш телефон</label>
			<input id="in-12" type="tel" name="tel">
			<small>Формат ввода: 097-699-17-79</small>
		</div>
		<div class="wr_in">
			<label for="in-14">Задайте вопрос <span class="text-red">*</span></label>
			<textarea id="in-14" name="question" rows="3" required="required" maxlength="500" placeholder="до 500 символов"></textarea>
		</div>
		<input type="submit" class="btn_sending_letter" value="Отправить">
	</form>
	<nav class="menu-top hidden-lg hidden-md">
		<div class="container">
			<div class="row">
				<div class="col-xs-10">
					<a href="/cart.php?action=cart">
						<span class="counter_products_blue text-center">0</span>
						<img src="images/basket.png" alt="cart" class="cart">
						<span class="in_total">Корзина пустая</span>
					</a>
				</div>
				<div class="col-xs-2">
					<div class="button-menu pull-right">
						<i class="icn-table"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="wr-xs-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="xs-menu list-unstyled">
							<li>
								<a href="index.php" id="index-6">О нас</a>
							</li>
							<li style="position:relative">
								<a href="#" id="index-7">
									Наши технологии
									<span class="caret"></span>
								</a>
								<ul class="list-unstyled close-menu" id="level-1">
									<li>
										<a href="technologies.php?page=building">Строительство</a>
									</li>
									<li>
										<a href="technologies.php?page=water_energy_heating">Вода, энергия, отопление</a>
									</li>
									<li>
										<a href="technologies.php?page=garden">Огород</a>
									</li>
									<li>
										<a href="technologies.php?page=grounds">Сад</a>
									</li>
									<li style="position:relative">
										<a href"#" id="index-20">Домашние животные
											<span class="caret"></span>
										</a>
										<ul class="list-unstyled close-menu" id="level-2">
											<li style="position:relative">
												<a href"#" id="index-30">Козы
													<span class="caret"></span>
												</a>
												<ul class="list-unstyled close-menu" id="level-3">
													<li>
														<a href="pets.php?page=goats_keep">Содержание</a>
													</li>
													<li>
														<a href="pets.php?page=goats_breeding">Племенная работа</a>
													</li>
													<li>
														<a href="pets.php?page=goats_veterinary_science">Ветеринария</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="pets.php?page=bird">Птица</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="technologies.php?page=provision">Заготовка и переработка продуктов</a>
									</li>
									<li>
										<a href="technologies.php?page=beekeeping">Пчеловодство</a>
									</li>
									<li>
										<a href="technologies.php?page=pond_farm">Прудовое хозяйство</a>
									</li>
									<li>
										<a href="technologies.php?page=crafts">Народные промыслы</a>
									</li>
								</ul>
							</li>
							<li style="position:relative">
								<a href="#" id="index-8">
									Магазин
									<span class="caret"></span>
								</a>
								<ul class="list-unstyled close-menu" id="level-4">
									<li style="position:relative">
										<a href="#" id="index-21">Продукты питания
											<span class="caret"></span>
										</a>
										<ul class="list-unstyled close-menu" id="level-5">
											<li>
												<a href="products.php?product=milk">Молочные</a>
											</li>
											<li>
												<a href="products.php?product=vegetables_and_fruits">Свежие овощи, фрукты</a>
											</li>
											<li>
												<a href="products.php?product=conservation">Консервация</a>
											</li>
											<li>
												<a href="products.php?product=drying">Сушка</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="products.php?product=young_animals">Молодняк</a>
									</li>
									<li>
										<a href="products.php?product=seedling">Посадматериал</a>
									</li>
									<li>
										<a href="products.php?product=service">Услуги</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="articles.php" id="index-9">Статьи</a>
							</li>
							<li>
								<a href="cooperation.php" id="index-10">Сотрудничество</a>
							</li>
							<li>
								<a href="contacts.php" id="index-11">Контакты</a>
							</li>
							<li>
								<a href="#form_call" class="fancybox btn_blue text-center">Заказать звонок</a>
							</li>
							<li>
								<a href="#form_question" class="fancybox btn_orange text-center">Задать вопрос</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<header class="header">
		<script>
			var arrHid = ['/technologies.php','/products.php','/articles.php','/cooperation.php','/contacts.php','/pets.php','/viev_content.php','/viev_news.php','/cart.php'];
			for (var i = 0; i < arrHid.length; i++) {
				arrHid[i];
				if(window.location.pathname == arrHid[i] && document.documentElement.clientWidth < 768){
					document.getElementsByClassName('header')[0].setAttribute('class','hiddenHeader');
				}
			};
		</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
					<div class="h-top">
						<img src="images/logo.png" alt="Logo" class="logo">
					</div>
				</div>
				<div class="col-sm-9 text-center">
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<div class="site_name">
								<h1 class="h1">
									Органические продукты экохозяйства семьи Буряковских
								</h1>
							</div>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="wr_h_btn text-center hidden-xs">
								<a href="#form_call" class="btn_h btn_blue fancybox button button-orange text-uppercase text-center btn-order-phone" id="call">
									<i class="fa fa-mobile" aria-hidden="true"></i>Заказать звонок
								</a>
								<a href="#form_question" class="btn_h btn_orange fancybox button button-orange text-uppercase text-center btn-order-phone" id="question">
									<i class="fa fa-info-circle" aria-hidden="true"></i>Задать вопрос
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<address class="address-h">
								<ul class="list-unstyled">
									<li><i class="fa fa-phone text-green f-s-22" aria-hidden="true"></i><a href="tel:0676991779">(067) 699-17-79</a></li>
									<li><i class="fa fa-envelope text-green f-s-22" aria-hidden="true"></i><a href="mailto:irina@ekoburyaky.in.ua" target="blank">irina@ekoburyaky.in.ua</a></li>
								</ul>
							</address>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="basket">
								<div class="row">
									<a href="/cart.php?action=cart">
										<div class="col-sm-7 text-right">
											<span class="in_total">&nbsp;</span>
										</div>
										<div class="col-sm-5">
											<span class="counter_products_blue text-center">0</span>
											<img src="images/basket.png" alt="cart" class="cart">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

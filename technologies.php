<?php
$t = 'Наши технологии';
include 'include/db_connect.php';
include 'include/header.php';


?>

<?php
include 'include/container.php';
?>


						<div class="technologies_main">
							<div class="row">
<?php 
include 'include/functions.php';

$page = clear_string($_GET['page']);

switch ($page) {
case 'beekeeping':
echo '
								<div class="col-xs-12">
									<h2 class="h2 text-center text-uppercase">Пчеловодство</h2>
									<p>
										На сегодняшний день (2017 г) мы обеспечиваем свою семью мёдом.Небольшая стационарная пасека расположена на нашем участке. Угодия вокруг очень разнообразные и медосбор растянут. Нас окружает в основном лес, есть балки с болотами в низинах, разнотравье на склонах и меньше всего полей. Мёд всегда вкусен и богат по составу.
									</p>
									<p>
										В будущем намечен перевод пчёл в ульи из камыша собственной конструкции. Идея заключается в том, чтобы создать условия, близкие к природным, отказаться от применения любых лечебных препаратов, упростить уход, использовать общедоступный материал для изготовления ульев.
									</p> 
									<p>
										По мере того, как медовая река заполнит провалы наших желудков, не исключено, что она может достичь и вашего стола – заглядывайте в <a href="products.php">«Магазин».</a>
									</p>
								</div>
';
break;


case 'building':
echo '
								<h2 class="h2 text-center text-uppercase">Строительство</h2>
								<div class="col-xs-12 clearfix">
									<p>
										<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/summer2016.jpg">
											<img src="images/img-technologies/img-building/img-small/summer2016.jpg" alt="home" class="img_ab_us img-left">
										</a>
										Начиная с 2011 г. нами (+помощниками), построено несколько построек (времянка, жилой дом, хлев, валипини (комплексное сооружение, представляющее из себя заглублённую теплицу, совмещённую с помещением для животных и птиц), погреб, сарайчик для животных, домик для гостей (в проекте).
									</p>
								</div>
								<div class="col-xs-12">
									<div class="wr_cont bg_grey clearfix">
										<p>
											<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/4.01.2016.jpg">
												<img src="images/img-technologies/img-building/img-small/4.01.2016.jpg" alt="home" class="img_ab_us img-right">
											</a>
											Основная технология строительства, применённая в нашем хозяйстве, - это <strong>Eathbag</strong>, строительство домов, построек из мешков с землёй. Автор этой технологии арабский архитектор <strong>Надер Халили</strong>. Во второй половине ХХ века получил заказ на разработку технологии строительства домов для беженцев. Идея заключалась в том, чтобы люди могли своими силами быстро, с минимальными затратами могут построить добротное жилище.
										</p>
									</div>
								</div>
								<div class="col-xs-12">
									<p>Наш дом называется <strong>Triple Roundhouse Cluster</strong>. Автор <strong>Owen Geiger</strong>. Дом врезан в южный склон. Материал стен – мешки с землёй. Также при строительстве применялись: утепление камышом, зеленая кровля, гидроизоляция (ПВХ плёнка 0,5мм), земляной пол, обработанный олифой, натуральная краска для стен и потолка. Видимые поверхности заштукатурены саманной штукатуркой. В доме имеется водопровод, канализация, сан. узел, горячая и тёплая вода. Площадь дома около 60м². он сухой и тёплый. Отопление дровяное: печи-ракеты с лежанками в спальных комнатах и универсальная печь на кухне. Заглубление с трёх сторон в землю и хорошая теплоизоляция южной стены выравнивают микроклимат и делают его очень экономным в отоплении.
										<div class="wr-img text-center">
											<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/room1.JPG">	
												<img src="images/img-technologies/img-building/img-small/room1.JPG" alt="" class="img_ab_us room" width="30%">
											</a>
											<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/room2.JPG">
												<img src="images/img-technologies/img-building/img-small/room2.JPG" alt="" class="img_ab_us room" width="30%">
											</a>
											<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/room3.JPG">
												<img src="images/img-technologies/img-building/img-small/room3.JPG" alt="" class="img_ab_us room" width="30%">
											</a>
										</div>
									</p>
								</div>
								<div class="col-xs-12">
									<div class="wr_cont bg_grey">
										<p>Ещё одно монументальное сооружение – <strong>валипини</strong>, «тёплое место» на языке идейцев. Это большая яма (6х12м) на склоне: стены её укреплены мешками с землёй и заштукатурены, 1/3 кровли – «земляная», 2/3 – прозрачный шифер. Пол имеет три террасы: 1- ячейки для коз, курей и кормов, 2-3 – это грядки.
											<div class="wr-img text-center">
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny1.jpg">
													<img src="images/img-technologies/img-building/img-small/valipiny1.jpg" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny2.jpg">
													<img src="images/img-technologies/img-building/img-small/valipiny2.jpg" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny3.JPG">
													<img src="images/img-technologies/img-building/img-small/valipiny3.JPG" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny4.jpg">
													<img src="images/img-technologies/img-building/img-small/valipiny4.jpg" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny5.jpg">
													<img src="images/img-technologies/img-building/img-small/valipiny5.jpg" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
												<a class="fancybox slide_a" data-fancybox-group="gallery1" href="images/img-technologies/img-building/img-big/valipiny6.jpg">
													<img src="images/img-technologies/img-building/img-small/valipiny6.jpg" alt="valipiny" class="img_ab_us room" width="30%">
												</a>
											</div>
										</p>
									</div>
								</div>
								<div class="col-xs-12">
									<p>Кроме солнечного, геотермального и биологического отопления нет никаких других источников. Вне зависимости от температуры на улице, в «валипини» всегда плюсовая температура. Весной-летом-осенью на грядках выращивается рассада и овощи, в это время животные и птица на летних площадках. Зимой козы и куры находятся в ячейках, на грядках трудятся земляные черви – перерабатывают навоз в биогумус и корм для курей. В помещении есть скважина, канализация, доильный станок, ячейка для хранения овощей на корм животным и птице.
									</p>
								</div>
';
break;


case 'crafts':
echo '
						<h2 class="h2 text-center text-uppercase">Народные промыслы</h2>
';
break;


case 'garden':
echo '
						<h2 class="h2 text-center text-uppercase">Огород</h2>
						<div class="col-xs-12">
							<p>У нас органический огород, то есть мы не используем химических удобрений, боремся с вредителями и болезнями, используя биологические средства или агротехнические приёмы.
							</p>
							<p>Отсутствие на склоне плодородного слоя вынуждает сначала заниматься земледелием, т. е. делать землю. Для этого используем как древние технологии, такие как pretta terra (добавление древесного угля в почву), так и современные разработки (грядки Розума, мульчирование, капельный полив, ЭМ-технологию и т. д.)
							</p>
							<p>Мы выращиваем: овощи, фрукты, тыквенные, бахчу, бобовые, кормовые, зерновые, пряные растения, салаты, ягодные культуры и т. д.
							</p>
							<div class="wr-img text-center">
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden1.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden1.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden2.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden2.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden3.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden3.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden4.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden4.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden5.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden5.JPG" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden6.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden6.JPG" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden7.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden7.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden8.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden8.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden9.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden9.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden10.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden10.JPG" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden11.jpg">
									<img src="images/img-technologies/img-garden/img-small/garden11.JPG" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery2" href="images/img-technologies/img-garden/img-big/garden12.jpg">	
										<img src="images/img-technologies/img-garden/img-small/garden12.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
							</div>
						</div>
';
break;


case 'grounds':
echo '
						<h2 class="h2 text-center text-uppercase">Сад</h2>
						<div class="col-xs-12">
							<p>Многие из тех, кто соприкоснулся (хотя бы в теории) с пермакультурой, осознал преимущества многолетних насаждений перед однолетними. Их не нужно ежегодно садить, гораздо меньше проблем с сорняками и обработкой почвы. Сама почва защищена корневой системой от эрозии, лучше используются ее глубокие горизонты и т.д.</p>
							<p>Огород, которым многие так гордятся, выглядит как необходимое зло или средство первой необходимости по сравнению с фруктово-ореховым лесом с подлеском из ягодников и овощей почвоукрывателей находящихся в устойчивом равновесии. Создание таких сообществ требует времени. На сегодняшний день (2017) мы в начале пути.  Огород работает на полную мощность, клубника дает урожай. Смородина, ежевика и малина набирают силу, молодой виноградник показывает первые урожаи.</p>
							<p>Фруктовые деревья и орехи еще в стадии роста. Пока нет своих фруктов, собираем их в соседних заброшенных садах. Хватает всем – и себе, и людям, и козам. Весной нашим садом становиться окружающий лес. Мы заготовляем березовый и кленовый сок. Молодые сосновые шишки идут на варенье, листья диких груш и вишен на ферментированный чай.
							</p>
						</div>
';
break;


case 'pond_farm':
echo '
						<h2 class="h2 text-center text-uppercase">Прудовое хозяйство</h2>
						<div class="col-xs-12">
							<p>В нижней точке нашего участка вырыто небольшое озеро (~ 4 сотки). В нём живёт несколько видов рыб (карп, амур, толстолоб, краснопёрка, сом канальный, линь, окунь), раки, лягушки, ужи, тритоны и черепахи. Кроме прочих растений аир болотный и водяные лилии. В озере мы купаемся, берём воду для полива, ловим рыбу. Летом мы не интенсивно кормим рыбу, но зимой помогаем выжить, аэрируя воздух с помощью ветряка. Наращивая объёмы производства червей, а в будущем возможно выращивание ряски, позволит в будущем увеличит выход рыбы. Если появятся излишки, то вы узнаете об этом в разделе <a href="products.php">«Магазин».</a>
							<div class="wr-img text-center">
								<a class="fancybox slide_a" data-fancybox-group="gallery3" href="images/img-technologies/img-pond_farm/img-big/pond_farm1.jpg">
									<img src="images/img-technologies/img-pond_farm/img-small/pond_farm1.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery3" href="images/img-technologies/img-pond_farm/img-big/pond_farm2.jpg">
									<img src="images/img-technologies/img-pond_farm/img-small/pond_farm2.JPG" alt="" class="img_ab_us room" width="30%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery3" href="images/img-technologies/img-pond_farm/img-big/pond_farm3.jpg">
									<img src="images/img-technologies/img-pond_farm/img-small/pond_farm3.jpg" alt="" class="img_ab_us room" width="30%">
								</a>
							</div>
							<h3 class="text-center windmill">Ветряк подает воздух в озеро рыбе</h3>
							<div class="wr-iframe-pond_farm">
								<iframe width="100%" height="300" src="https://www.youtube.com/embed/5vAfRAiIuQM?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
';
break;


case 'provision':
echo '
						<h2 class="h2 text-center text-uppercase">Заготовка и переработка продуктов</h2>
						<div class="col-xs-12">
							<h2 class="text-center text-uppercase">Откуда мы берём продукты?</h2>
							<p>Общий принцип следующий: по максиму используем экосистему, в которую мы попали и, по мере возможности, обогащаем её.</p>
							<p>Природа щедра на травы, но много разнотравья не съешь. Мы завели коз они с этим справляются, а мы с вами пьём молоко и едим сыр. Навоз, например, для многих хозяйств является проблемой, но только не для нас. Скармливая навоз червям, мы получаем яйца, которые несут куры, которые в свою очередь едят этих червей, а культурные растения получают плодородную почву. Цепочка…</p>
							<p>Нами посаженный сад ещё молод, но старом саду плодоносят яблони, груши, сливы. Кроме того, что это старые сорта (не ГМО), они ещё никогда не видели химических препаратов. Сосны дают шишки на ароматное варенье, побеги на лечебный чай, клёны и берёзы – живительный сок, разнотравье – согревает своим изумительным вкусом чаёв…. Грибы мы собираем в лесу. После культурной клубники, наступает пора дикой земляники на склонах оврагов. Только одно тут условие: желание иметь эти дары и намерение делать всё для этого. Огород даёт основную массу овощей для нас и для животных.</p>
						</div>
						<div class="col-xs-12">
							<div class="wr_cont bg_grey">
								<h2 class="text-center text-uppercase"><i class="icon icn-vegetables"></i>СВЕЖИЕ ОВОЩИ И ФРУКТЫ</h2>
								<p>Органическое земледелие даёт возможность иметь качественные и, самое главное, пригодные к употреблению, овощи, зелень, ягоды. Мы выращиваем помидоры разных сортов, перец сладкий и горький, капусты разные, огурцы, разнообразные салаты, картофель, батат, топинамбур, тыквы, кабачки, бахчу (арбузы и дыни), луки разные, чеснок, фасоль и горох разных сортов, чечевицу, кукурузу и попкорн, свеклу и морковь, кормовые культуры, клубнику разную, землянику, смородину, ежевику и т.д.</p>
								<p>Из выращенных нами плодов мы заготавливаем консервацию, отжимаем соки, заготавливаем сушку…</p>
							</div>
						</div>
						<div class="col-xs-12">
							<h2 class="text-center text-uppercase"><i class="icon icn-dried_fruits"></i>СУШКА</h2>
							<p>Сушка является одним из самых давних способов консервирования овощей и фруктов, которым пользуются не только люди, но и некоторые животные. И это не случайно. А почему? А потому, что сушка является одним из самых полезных и экологически чистых методов приготовления пищи и заготовки продуктов.</p>
							<p>Сушка занимает первое место по питательности после свежих продуктов, но так как свежие продукты не долго и не все сохраняются, мы их сушим.</p>
							<p>Сушим ягоды, травы, овощи, грибы. Также изготавливаем фруктовую пастилу из свежих фруктов. Для сушки мы используем солнце, досушку (если необходимо) производим в сквозной духовке (две дверки насквозь) от печи на дровах, травы просушиваются под навесом.</p>
							<p>Просушку сыров (прикопченый, сыр в масле) производим с помощью хорошо вентилируемых навесов.</p>
							<p>Храним сушку с стеклянных банках, в мешочках из ткани, бумажных пакетах, пищевых пластиковых ведёрках.</p>
						</div>
						<div class="col-xs-12">
							<div class="wr_cont bg_grey">
								<h2 class="text-center text-uppercase"><i class="icon icn-conservation"></i>КОНСЕРВАЦИЯ</h2>
								<p>Мы заготавливаем разнообразную консервацию: консервированные огурцы, помидоры, перцы, ассорти, салаты, кетчупы, соки, грибы и многое другое. А также заквашиваем капусту, яблоки, помидоры, огурци. Закрываем на зиму варенье, джемы, желе.</p>
							</div>
						</div>
						<div class="col-xs-12 clearfix">
							<i class="icon icn-shopping_cart"></i>
							<p>
								<strong class="shopping_cart">
									Свежие овощи, ягоды, зелень, сушку и консервацию мы предлагаем желающим. Также делаем заготовки под заказ.
									Свои заявки и вопросы вы можете сообщать по телефону, в электронном виде. Наши предложения вы можете увидеть в разделе <a href="products.php">«Магазин».</a>
								</strong>
							</p>
						</div>
';
break;


case 'water_energy_heating':
echo '
						<h2 class="h2 text-center text-uppercase">Вода, энергия, отопление</h2>
						<div class="col-xs-12 clearfix">
							<h2 class="techn-h2 text-center text-uppercase"><i class="icon icn-water"></i>Вода</h2>
							<p>
								<a class="fancybox slide_a" data-fancybox-group="gallery4" href="images/img-technologies/img-w-e-h/img-big/lake.JPG">	
									<img src="images/img-technologies/img-w-e-h/img-small/lake.JPG" alt="" class="img_ab_us img-left">
								</a>
								Наш участок расположен на склоне. Уровень грунтовых вод колеблется от 0,5м до 30м. Внизу выкопан водоём площадью около 4-х сотых. На участке 4 скважины: 3 из них сделаны нами (10м, 12м, 15м) по технологии EMAS (смотрите полезные ссылки). Скважины, используемые круглогодично, сделаны в помещении погреба и теплицы, предназначенные для полива, находятся ближе к огороду. Качаем воду ручными насосами (EMAS water pump) – простые и безотказные могут поднять воду с глубины 20 м и нагнетать на такую же высоту.
							</p>
						</div>
						<div class="col-xs-12">
							<div class="wr_cont bg_grey">
								<h2 class="techn-h2 text-center text-uppercase"><i class="icon icn-energy"></i>Энергия</h2>
								<p>Светодиодное освещение, работа средств связи, ручного электроинструмента и министиралка обеспечивается ветрогенератором (120Wt) и солнечной панелью (100Wt). Ветряк полностью самодельный на базе автомобильной ступицы (источник veterok.ru). Диаметр колеса 2м, высота мачты 12м. Работает безотказно 3 года.
								</p>
								<p>Ещё один ветрогенератор «парусный» служит летом для капельного полива огорода, а зимой для аэрации пруда. Базовая идея Аркадия Левшина + наши доработки, повышающие надёжность.
								</p>
								<p>Кроме солнца и ветра, энергию нам дают дрова, которые традиционно заготавливаются в конце осени-зимой на весь следующий сезон.
								</p>
								<div class="wr-img text-center">
									<a class="fancybox slide_a" data-fancybox-group="gallery4" href="images/img-technologies/img-w-e-h/img-big/windmill1.JPG">
										<img src="images/img-technologies/img-w-e-h/img-middle/windmill1.JPG" alt="" class="img_ab_us room" width="45%">
									</a>
									<a class="fancybox slide_a" data-fancybox-group="gallery4" href="images/img-technologies/img-w-e-h/img-big/windmill2.JPG">
										<img src="images/img-technologies/img-w-e-h/img-middle/windmill2.JPG" alt="" class="img_ab_us room" width="45%">
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12">
							<h2 class="text-center text-uppercase"><i class="icon icn-heating"></i>Отопление</h2>
							<h3 class="text-center">Отопление дровяное.</h3>
							<p>В центральной комнате дома имеется обычная двухкомфорочная печь с духовкой, сушилкой для посуды, греющим щитком и змеевиком для нагрева воды в баке.
							</p>
							<p>Каждая из двух спален оборудована печью-ракетой с лежанкой (Rocket mass heater) Янто Эйванса.
							</p>
							<div class="wr-img text-center">
								<a class="fancybox slide_a" data-fancybox-group="gallery4" href="images/img-technologies/img-w-e-h/img-big/heater1.JPG">
									<img src="images/img-technologies/img-w-e-h/img-middle/heater1.JPG" alt="" class="img_ab_us room" width="45%">
								</a>
								<a class="fancybox slide_a" data-fancybox-group="gallery4" href="images/img-technologies/img-w-e-h/img-big/heater2.JPG">
									<img src="images/img-technologies/img-w-e-h/img-middle/heater2.JPG" alt="" class="img_ab_us room" width="45%">
								</a>
							</div>
							<p>Это необычные для наших широт и почти неизвестные нашим печникам печи. Они просты, в несколько раз эффективнее любой другой конструкции, дешевы в изготовлении. Топим мы их в холодное время года с частотой 1-3 раза в неделю в зависимости от погодных условий и личных пожеланий. Печь-ракета после розжига начинает прогревать воздух помещения, а через пару часов прогревается лежанка. Обычно хватает одной закладки дров. Следует отметить, что оригинал печи, описанный здесь, был изменён под местные наши условия.</p>
							<p>На летней площадке тоже есть двухкомфорочная печь с большой духовкой.</p>
						</div>

';
break;

default:
echo '
						<h2 class="h2 text-center text-uppercase">Строительство</h2>
						<div class="col-xs-12 clearfix">
							<p><img src="images/img-technologies/img-building/img-small/summer2016.jpg" alt="" class="img_ab_us img-left">
								Начиная с 2011 г. нами (+помощниками), построено несколько построек (времянка, жилой дом, хлев, валипини (комплексное сооружение, представляющее из себя заглублённую теплицу, совмещённую с помещением для животных и птиц), погреб, сарайчик для животных, домик для гостей (в проекте).
							</p>
						</div>
						<div class="col-xs-12">
							<div class="wr_cont bg_grey clearfix">
								<p><img src="images/img-technologies/img-building/img-small/4.01.2016.jpg" alt="" class="img_ab_us img-right">Основная технология строительства, применённая в нашем хозяйстве, - это <strong>Eathbag</strong>, строительство домов, построек из мешков с землёй. Автор этой технологии арабский архитектор <strong>Надер Халили</strong>. Во второй половине ХХ века получил заказ на разработку технологии строительства домов для беженцев. Идея заключалась в том, чтобы люди могли своими силами быстро, с минимальными затратами могут построить добротное жилище.</p>
							</div>
						</div>
						<div class="col-xs-12">
							<p>Наш дом называется <strong>Triple Roundhouse Cluster</strong>. Автор <strong>Owen Geiger</strong>. Дом врезан в южный склон. Материал стен – мешки с землёй. Также при строительстве применялись: утепление камышом, зеленая кровля, гидроизоляция (ПВХ плёнка 0,5мм), земляной пол, обработанный олифой, натуральная краска для стен и потолка. Видимые поверхности заштукатурены саманной штукатуркой. В доме имеется водопровод, канализация, сан. узел, горячая и тёплая вода. Площадь дома около 60м². он сухой и тёплый. Отопление дровяное: печи-ракеты с лежанками в спальных комнатах и универсальная печь на кухне. Заглубление с трёх сторон в землю и хорошая теплоизоляция южной стены выравнивают микроклимат и делают его очень экономным в отоплении.
								<div class="wr-img text-center">
									<img src="images/img-technologies/img-building/img-small/room1.JPG" alt="" class="img_ab_us room" width="30%">
									<img src="images/img-technologies/img-building/img-small/room2.JPG" alt="" class="img_ab_us room" width="30%">
									<img src="images/img-technologies/img-building/img-small/room3.JPG" alt="" class="img_ab_us room" width="30%">
								</div>
							</p>
						</div>
						<div class="col-xs-12">
							<div class="wr_cont bg_grey">
								<p>Ещё одно монументальное сооружение – <strong>валипини</strong>, «тёплое место» на языке идейцев. Это большая яма (6х12м) на склоне: стены её укреплены мешками с землёй и заштукатурены, 1/3 кровли – «земляная», 2/3 – прозрачный шифер. Пол имеет три террасы: 1- ячейки для коз, курей и кормов, 2-3 – это грядки.
									<div class="wr-img text-center">
										<img src="images/img-technologies/img-building/img-small/valipiny1.jpg" alt="" class="img_ab_us room" width="30%">
										<img src="images/img-technologies/img-building/img-small/valipiny2.jpg" alt="" class="img_ab_us room" width="30%">
										<img src="images/img-technologies/img-building/img-small/valipiny3.JPG" alt="" class="img_ab_us room" width="30%">
										<img src="images/img-technologies/img-building/img-small/valipiny4.jpg" alt="" class="img_ab_us room" width="30%">
										<img src="images/img-technologies/img-building/img-small/valipiny5.jpg" alt="" class="img_ab_us room" width="30%">
										<img src="images/img-technologies/img-building/img-small/valipiny6.jpg" alt="" class="img_ab_us room" width="30%">
									</div>
								</p>
							</div>
						</div>
						<div class="col-xs-12">
							<p>Кроме солнечного, геотермального и биологического отопления нет никаких других источников. Вне зависимости от температуры на улице, в «валипини» всегда плюсовая температура. Весной-летом-осенью на грядках выращивается рассада и овощи, в это время животные и птица на летних площадках. Зимой козы и куры находятся в ячейках, на грядках трудятся земляные черви – перерабатывают навоз в биогумус и корм для курей. В помещении есть скважина, канализация, доильный станок, ячейка для хранения овощей на корм животным и птице.
							</p>
						</div>
';
break;
};
 ?>
					</div>
				</div>



<?php 
include 'include/footer.php';
 ?>
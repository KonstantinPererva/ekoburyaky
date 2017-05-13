loadcart();
cartCount();
locat();

$(function (){
	$('.question').click(function () {
		$(this).siblings('.answer').animate({height:"show",opacity:'1'},700).parents()
		.siblings('div').find('.answer').animate({height:"hide",opacity:'0'},700);
	});
});


$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$('.add_cart').click(function(e){
	e.preventDefault();
	var tid = $(this).attr("data-prodId");
	$.ajax({
		type: "POST",
		url: "/include/addtocart.php",
		data: "id="+tid,
		dataType: "html",
		cache: false,
		success: function(data){
			loadcart();
			cartCount();
		}
	});
});

function loadcart(){
	$.ajax({
		type: "POST",
		url: "/include/loadcart.php",
		dataType: "html",
		cache: false,
		success: function(data){
			if(data == 0){
				$('.in_total').html("Корзина пустая");
			}else{
				$('.in_total').html(data);
			}
		}
	});
};

$('.count_minus').click(function(){
	var iid = $(this).attr('data-cartId');
	$.ajax({
		type: "POST",
		url: "/include/count_minus.php",
		data: "id="+iid,
		dataType: "html",
		cache: false,
		success: function(data){
			$('#input-id'+iid).val(data);
			loadcart();
			cartCount();

			var praceProduct = $("#product"+iid+" p").attr('data-price');
			var resultTotal = praceProduct*data;
			$("#product"+iid+" p").html(resultTotal+' грн');
			$("#product"+iid+">h5>.span_count").html(data);
			cartInTotal();
		}
	});
});

$('.count_plus').click(function(){
	var iid = $(this).attr('data-cartId');
	$.ajax({
		type: "POST",
		url: "/include/count_plus.php",
		data: "id="+iid,
		dataType: "html",
		cache: false,
		success: function(data){
			$('#input-id'+iid).val(data);
			loadcart();
			cartCount();

			var praceProduct = $("#product"+iid+" p").attr('data-price');
			var resultTotal = praceProduct*data;
			$("#product"+iid+" p").html(resultTotal+' грн');
			$("#product"+iid+">h5>.span_count").html(data);
			cartInTotal();
		}
	});
});

$('.count_input').keypress(function(e){
	if(e.keyCode == 13){
		var iid = $(this).attr('data-cartId');
		var incount = $('#input-id'+iid).val();
		$.ajax({
		type: "POST",
		url: "/include/count_input.php",
		data: "id="+iid+'&count='+incount,
		dataType: "html",
		cache: false,
		success: function(data){
			$('#input-id'+iid).val(data);
			loadcart();
			cartCount();

			var praceProduct = $("#product"+iid+" p").attr('data-price');
			var resultTotal = praceProduct*data;
			$("#product"+iid+" p").html(resultTotal+' грн');
			$("#product"+iid+">h5>.span_count").html(data);
			cartInTotal();
		}
	});
	}
});

function cartInTotal() {
	$.ajax({
		type: "POST",
		url: "/include/cart_in_total.php",
		dataType: "html",
		cache: false,
		success: function(data){
			$('.cart_in_total>h2>strong').html(data);
		}
	});
};

function cartCount() {
	$.ajax({
		type: "POST",
		url: "/include/cart_count.php",
		dataType: "html",
		cache: false,
		success: function(data){
			if(data == 0){
				$('.counter_products_blue').html("0");
			}else{
				$('.counter_products_blue').html(data);
			}
		}
	});
};

$(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
			$(this).toggleClass('right-caret left-caret');
		grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.left-caret').toggleClass('right-caret left-caret');
		root.find('.sub-menu:visible').hide();
	});
});

//---Active menu---
function locat(){
	var arrLoc = ['/index.php','/technologies.php','/products.php','/articles.php','/cooperation.php','/contacts.php'];
	for (var i = 0; i < arrLoc.length; i++) {
		arrLoc[i];
		if(window.location.pathname == arrLoc[i]){
			var a = 'index-'+arrLoc.indexOf(arrLoc[i]);
			document.getElementById(a).setAttribute('class','active_menu_s');
		}
	};
	if(window.location.pathname == '/'){
		document.getElementById('index-0').setAttribute('class','active_menu_s');
		document.getElementById('index-6').setAttribute('class','active-xs-menu');
	}
	if(window.location.pathname == '/pets.php'){
		document.getElementById('index-1').setAttribute('class','active_menu_s');
		document.getElementById('index-7').setAttribute('class','active-xs-menu');
	}

	var arrLocat = [0,1,2,3,4,5,'/index.php','/technologies.php','/products.php','/articles.php','/cooperation.php','/contacts.php'];
	for (var j = 6; j < arrLocat.length; j++) {
		arrLocat[j];
		if(window.location.pathname == arrLocat[j]){
			var b = 'index-'+arrLocat.indexOf(arrLocat[j]);
			document.getElementById(b).setAttribute('class','active-xs-menu');
		}
	};
};


//---Map---

ymaps.ready(function () {
    var myMap = new ymaps.Map('map-index', {
            center: [49.66568338272061,36.15778025893022],
            zoom: 14
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        	hintContent: '<span style="display:block;border:1px solid #159;color:#159;font-size:13px;margin:-10px;padding:10px;background:#fff;font-weight:bold;text-align:center;">ЭКОХОЗЯЙСТВО СЕМЬИ<br>БУРЯКОВСКИХ</span>',
        	balloonContent: '<span style="display:block;font-weight:bold;padding:10px;">Качественные органические продукты<br>в наличии и под заказ.</span><a href="products.php?product=milk"><img src="images/organic-1.jpg" alt="organic"></a> <a href="products.php?product=vegetables_and_fruits"><img src="images/organic-2.jpg" alt="organic"></a> <a href="products.php?product=conservation"><img src="images/organic-3.jpg" alt="organic"></a>'
        }, {
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'images/mark_map.png',
            // Размеры метки.
            iconImageSize: [38, 54],
            iconImageOffset: [-30, -60]
        });

        myMap.behaviors.disable("scrollZoom"),
        myMap.geoObjects.add(myPlacemark),
        myMap.behaviors.disable("multiTouch")
});

//---Click button menu
$('.button-menu').click(function(){
	$('.wr-xs-menu').slideToggle('slow');
	$('.button-menu i').toggleClass('icn-close');
	$('#index-7,#index-8,#index-20,#index-21,#index-30').siblings('ul').slideUp(300);
});

//---Click Ul open-menu
$('#index-7,#index-8,#index-20,#index-21,#index-30').click(function(e){
	e.preventDefault();
	$(this).siblings('ul').slideToggle('slow').parent('li').siblings('li').find('ul').slideUp(300);
});

//---form data_order---
$('#orderedGoods').submit(function(){
	$.ajax({
		type: "POST",
		url: "/include/data_order.php",
		data: $(this).serialize()
	}).done(function(){
		$('#verificationInformation').html('<h2 class="text-center">Спасибо за заказ!</h2><h3 class="text-center">Мы свяжемся с<br />Вами в ближайшее время.</h3>');
		setTimeout(function(){location.href = "/cart.php?action=clear";}, 10000);
	});
	return false;
});

//---form call---
$('#form_call').submit(function(){
	$.ajax({
		type: "POST",
		url: "/include/form_call.php",
		data: $(this).serialize()
	}).done(function(){
		$('#form_call').html('<h3 class="text-center">Спасибо!</h3><h4 class="text-center">Мы свяжемся с<br />Вами в ближайшее время.</h4>');
	});
	return false;
});

//---form question---
$('#form_question').submit(function(){
	$.ajax({
		type: "POST",
		url: "/include/form_question.php",
		data: $(this).serialize()
	}).done(function(){
		$('#form_question').html('<h3 class="text-center">Спасибо!</h3><h4 class="text-center">Мы ответим на<br />Ваш вопрос<br />в ближайшее время.</h4>');
	});
	return false;
});

//---form feedback---
$('#feedback').submit(function(){
	$.ajax({
		type: "POST",
		url: "/include/form_feedback.php",
		data: $(this).serialize()
	}).done(function(){
		$('#feedback').html('<h3 class="text-center">Спасибо!</h3><h4 class="text-center">Мы свяжемся с Вами<br />в ближайшее время.</h4>');
	});
	return false;
});
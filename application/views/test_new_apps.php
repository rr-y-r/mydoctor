<!DOCTYPE html>
<html>
<head>
<? $this->load->view('includes/header'); ?>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/component.css'); ?>" />
		
	<title>test</title>
</head>
<body>


	<button type="button" class="btn btn-success" id="cd-cart-trigger">Lihat Data Diagnosis</button>

	<div id="cd-shadow-layer"></div>

	<div id="cd-cart">
		<h2 style="color:#666">DAFTAR DIAGNOSIS</h2>
		<ul class="cd-cart-items">
			<li class="diagnosis-basket" style="color:#666">
				<span class="diag-id"></span><span class="diag-desc"></span>
			</li>
		</ul> <!-- cd-cart-items -->

		<a href="#0" class="checkout-btn">Checkout</a>
		
		
	</div> <!-- cd-cart -->


	<div class="container">
		<div class="main">

		<section class="grid">
			<!-- Products -->
			<? foreach($gejala_data as $gejala): ?>
				<div class="product" id="diagNav-<?=$gejala['id_gejala']; ?>" onclick="return add_to_check(<?=$gejala['id_gejala']; ?>);">
					<div class="product__info" data-gejala-id="<?=$gejala['id_gejala']; ?>">
						<img class="product__image" src="<?=base_url('assets/images/demam.png'); ?>" alt="gejala 1" />
						<h3 class="product__title" id="diagDesc-<?=$gejala['id_gejala']; ?>"><?=$gejala['id_gejala']; ?>. <?=$gejala['gejala']; ?></h3>
					</div>
				</div>
			<? endforeach; ?>

		</section>

			
		</div>
	</div>

	<script src="<?=base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?=base_url('assets/js/classie.js'); ?>"></script>
    <script src="<?=base_url('assets/js/modernizr.js'); ?>" /></script>
    <script>
    	

		$( document ).ready(function(e){

			var url='<?=site_url("test_class/test_alg/4"); ?>';

			var data = new Array('q1=28',
	                           'q2=1',
	                           'q3=25',
	                           'q4=26',
	                           'q5=0'
	                           );

			var trydata = data.join('&');

			$.post(url,trydata);

			function move_navigation( $navigation, $MQ) {
				if ( $(window).width() >= $MQ ) {
					$navigation.detach();
					$navigation.appendTo('header');
				} else {
					$navigation.detach();
					$navigation.insertAfter('header');
				}
			}


		});

		jQuery(document).ready(function($){
	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var $L = 1200,
		$menu_navigation = $('#main-nav'),
		$cart_trigger = $('#cd-cart-trigger'),
		$hamburger_icon = $('#cd-hamburger-menu'),
		$lateral_cart = $('#cd-cart'),
		$shadow_layer = $('#cd-shadow-layer');

	//open lateral menu on mobile
	$hamburger_icon.on('click', function(event){
		event.preventDefault();
		//close cart panel (if it's open)
		$lateral_cart.removeClass('speed-in');
		toggle_panel_visibility($menu_navigation, $shadow_layer, $('body'));
	});

	//open cart
	$cart_trigger.on('click', function(event){
		event.preventDefault();
		//close lateral menu (if it's open)
		$menu_navigation.removeClass('speed-in');
		toggle_panel_visibility($lateral_cart, $shadow_layer, $('body'));
	});

	//close lateral cart or lateral menu
	$shadow_layer.on('click', function(){
		$shadow_layer.removeClass('is-visible');
		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $lateral_cart.hasClass('speed-in') ) {
			$lateral_cart.removeClass('speed-in').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
			$menu_navigation.removeClass('speed-in');
		} else {
			$menu_navigation.removeClass('speed-in').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
			$lateral_cart.removeClass('speed-in');
		}
	});

	//move #main-navigation inside header on laptop
	//insert #main-navigation after header on mobile
	move_navigation( $menu_navigation, $L);
	$(window).on('resize', function(){
		move_navigation( $menu_navigation, $L);
		
		if( $(window).width() >= $L && $menu_navigation.hasClass('speed-in')) {
			$menu_navigation.removeClass('speed-in');
			$shadow_layer.removeClass('is-visible');
			$('body').removeClass('overflow-hidden');
		}

	});
});

function toggle_panel_visibility ($lateral_panel, $background_layer, $body) {
	if( $lateral_panel.hasClass('speed-in') ) {
		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		$lateral_panel.removeClass('speed-in').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$body.removeClass('overflow-hidden');
		});
		$background_layer.removeClass('is-visible');

	} else {
		$lateral_panel.addClass('speed-in').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
			$body.addClass('overflow-hidden');
		});
		$background_layer.addClass('is-visible');
	}
}

function move_navigation( $navigation, $MQ) {
	if ( $(window).width() >= $MQ ) {
		$navigation.detach();
		$navigation.appendTo('header');
	} else {
		$navigation.detach();
		$navigation.insertAfter('header');
	}
}

function add_to_check(id){
	if( $('ul.cd-cart-items').find("li").size() <= 5){
		$('#cd-cart-trigger').click();
		$("#diagNav-"+id).fadeOut(1000);
		$('.cd-cart-items').append('<li class="diagnosis-basket diag-'+id+'" style="color:#666"><span class="diag-id" style="color:#666"></span><span class="diag-desc" style="color:#666">'+$("#diagDesc-"+id).text()+'</span><a href="#" class="cd-item-remove" style="color:#666" onclick="return removeDiag('+id+')">Remove</a></li>');
	}
}


function removeDiag(id){
	$(".diag-"+id).remove();
	$("#diagNav-"+id).fadeIn(1000);
	//console.log($(".diag"+id));
}


    </script>
</body>
</html>
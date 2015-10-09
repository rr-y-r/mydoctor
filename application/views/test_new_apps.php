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

	<div class="modal fade" id="doDiagModal" tabindex="-1" role="dialog" aria-labelledby="doDiagModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hasil diagnosa</h4>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">

                

              </div>
               </div>
            </div>
          </div>
        </div>
                        


<!--a href="#" class="btn btn-sucess circle "><span class="glyphicon glyphicon-list-alt circle_btn"></span></a-->
<img class="img-responsive btn-pos" id="cd-cart-trigger" src="<?=base_url('assets/images/circle-btn.png'); ?>" alt="btn" />
	<!--button type="button" class="btn btn-success" id="cd-cart-trigger">Lihat Data Diagnosis</button -->

	<div id="cd-shadow-layer"></div>

	<div id="cd-cart">
		<h2 style="color:#666">DAFTAR DIAGNOSIS</h2>
		<ul class="cd-cart-items">
			<li class="diagnosis-basket" style="color:#666">
				<span class="diag-id"></span><span class="diag-desc"></span>
			</li>
		</ul> <!-- cd-cart-items -->

		<button type="button" class="checkout-btn" data-toggle="modal" data-target="#doDiagModal" onclick="return doDiag();">DIAGNOSA</button>
		

		
		
	</div> <!-- cd-cart -->


	<div class="container">
		<div class="main">

		<section class="grid">
			<!-- Products -->
			<? foreach($gejala_data as $gejala): ?>
				<div class="product" id="diagNav-<?=$gejala['id_gejala']; ?>" onclick="return add_to_check(<?=$gejala['id_gejala']; ?>);">
					<div class="product__info" data-gejala-id="<?=$gejala['id_gejala']; ?>">
						<? if($gejala['id_gejala'] ==1): ?>
							<img class="product__image" src="<?=base_url('assets/images/demam.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] ==3): ?>
							<img class="product__image" src="<?=base_url('assets/images/headache.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] == 2): ?>
							<img class="product__image" src="<?=base_url('assets/images/sakit.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] == 6 or $gejala['id_gejala'] == 7): ?>
							<img class="product__image" src="<?=base_url('assets/images/flu.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] == 11): ?>
							<img class="product__image" src="<?=base_url('assets/images/batuk.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] == 13): ?>
							<img class="product__image" src="<?=base_url('assets/images/demam2.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						<? if($gejala['id_gejala'] != 13 and $gejala['id_gejala'] != 3 and $gejala['id_gejala'] != 2 and $gejala['id_gejala'] != 6 and $gejala['id_gejala'] != 7 and $gejala['id_gejala'] != 11 and $gejala['id_gejala'] != 1): ?>
							<img class="product__image" src="<?=base_url('assets/images/demam2.png'); ?>" alt="gejala 1" />
						<? endif; ?>
						
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
    	var data = [];

    	function doDiag(){
				if($('ul.cd-cart-items').find("i").size()<=1){
					alert('kosong om');
					$('.checkout-btn').attr('disabled');
				}

				//console.log($('ul.cd-cart-items').find("li").size());
			}

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
		$("#diagNav-"+id).fadeOut(800);
		data['q'+$('ul.cd-cart-items').find("li").size()] = id;

		test_data = new Array('q'+$('ul.cd-cart-items').find("li").size()+'='+id);
		//console.log(data[$('ul.cd-cart-items').find("li").size()]);
		console.log(test_data);
		$('.cd-cart-items').append('<li class="diagnosis-basket diag-'+id+'" style="color:#666"><span class="diag-id" style="color:#666"></span><span class="diag-desc" style="color:#666">'+$("#diagDesc-"+id).text()+'</span><a href="#" class="cd-item-remove" style="color:#666" onclick="return removeDiag('+id+')">Remove</a></li>');
		
		var url='<?=site_url("test_class/getDiagData/"); ?>';
		var diagdata_post = test_data.join('&');
		$.post(url,diagdata_post, function(data){

		});
	}
}
/*
function send_check(id, check_counter){

	for(var i = 1; i<= check_counter;i++){
		var dataTrigger_get =new Array('q1='+data_trigger[0],
			                           'q2='+data_trigger[1],
			                           'q3='+data_trigger[2],
			                           'q4='+data_trigger[3],
			                           'q5='+data_trigger[4]
			                          );
	}

	var url='<?=site_url("test_class/get_diagnosa_result/"); ?>'+'/'+check_get;
}
*/

function removeDiag(id){
	$(".diag-"+id).remove();
	$("#diagNav-"+id).fadeIn(1000);
	//console.log($(".diag"+id));
}





    </script>
</body>
</html>
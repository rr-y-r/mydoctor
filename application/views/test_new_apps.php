<!DOCTYPE html>
<html>
<head>
<? $this->load->view('includes/header'); ?>
	<title>test</title>
</head>
<body>

	<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-bottom" id="cbp-spmenu-s4">


			<div class="col-xs-1 col-sm-2 grid-item-nav">
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-1 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-1 col-sm-2 grid-item-nav" >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-1 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-1 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>

		
	</nav>

	<div class="container">
		<div class="main">

			<div class="col-xs-4 col-sm-2 grid-item-nav">
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-4 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-4 col-sm-2 grid-item-nav" >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-4 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-4 col-sm-2 grid-item-nav"  >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<div class="col-xs-4 col-sm-2 grid-item-nav" >
				<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
			</div>
			<button id="showBottom">Show/Hide Bottom Slide Menu</button>
		</div>
	</div>

	<script src="<?=base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.js'); ?>"></script>
    <script src="<?=base_url('assets/js/classie.js'); ?>"></script>
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

			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			menuRight = document.getElementById( 'cbp-spmenu-s2' ),
			menuTop = document.getElementById( 'cbp-spmenu-s3' ),
			menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
			showLeft = document.getElementById( 'showLeft' ),
			showRight = document.getElementById( 'showRight' ),
			showTop = document.getElementById( 'showTop' ),
			showBottom = document.getElementById( 'showBottom' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			showRightPush = document.getElementById( 'showRightPush' ),
			body = document.body;

			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}

		});


    </script>
</body>
</html>
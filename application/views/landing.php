<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=base_url('assets/images/logos.png'); ?>">
		<title>MyDoctor</title>
    
    
    
    
        <link rel="stylesheet" href="<?=base_url('assets/css/calm.css'); ?>">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Selamat Datang di MyDoctor</h1>
		
		<form class="form">
<button type="submit" id="login-button">Mulai Diagnosa</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?=base_url('assets/js/calm.js'); ?>"></script>
<script>
      $('#login-button').click(function(e){
          
          setTimeout(function(){
          window.location.replace("<?=site_url('apps/dokter');?>");
        }, 2500);

      });
      </script>

    
    
  </body>
</html>

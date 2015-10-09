<? $this->load->view('includes/header');?>
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/component.css'); ?>" />
<body class="base-bg">

<div class="login-form">
    <div class="col-md-offset-4 col-md-4 align-center">
        <br><br>
        
        <h2 class="text-center">Selamat Datang, <br>Admin MyDoctor</h2><br><hr><br>

  <form class="form-signin" id="form-signin" role="form" action="<?=site_url('Login/loginCheck'); ?>" method="post" accept-charset="utf-8">

    <input class="form-control" name="username" placeholder="username" required maxlength="40" >
    <input class="form-control" type="password" name="password" placeholder="password" required maxlength="20" />
      <br>
    <button class="btn btn-lg btn-primary btn-block" style="background-color:#FF6666;" type="submit">SIGN IN</button>
      
    <? if (isset($error)): ?>
      <div class="row">

      <div class="alert alert-error">
        <strong>Login</strong> gagal !, periksa data anda kembali
      </div>

      </div>
      
      <? endif; ?>
</form>


</body>




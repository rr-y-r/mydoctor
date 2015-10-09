<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MYDOCTOR | Dashboard</title>
    <link rel="shortcut icon" href="<?=base_url('assets/images/logos.png'); ?>">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link href="<?=base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url('assets/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url('assets/css/skins/_all-skins.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class=" sidebar-collapse fixed skin-black-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="<?=site_url('dokter');?>" class="logo">
          <img alt="Brand" src="<?=base_url('assets/images/logo2.png'); ?>" style="width:180px;height:50px;margin-top:-15px;margin-left:-15px;">
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <ul class="nav navbar-nav" style="float:right">
          <li class="dropdown user user-menu" style="float:right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?=base_url('assets/images/dashboard/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><b><?=$this->session->userdata('nama');?></b></span>
                </a>
                <ul class="dropdown-menu" style="float:left">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?=base_url('assets/images/dashboard/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                    <p>
                      <b><?=$this->session->userdata('nama');?></b><br><small>Dokter Umum</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <a href="<?=site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </li>
                </ul>
              </li>
              </ul>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url('assets/images/dashboard/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?=$this->session->userdata('nama');?></p>
              <a href="<?=site_url('login/logout'); ?>">Sign out</a>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          <li class="header">Navigasi</li>
            <li>
              <a href="<?=site_url('dokter'); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="header">Tabel Data Diagnosis</li>
            <li>
              <a href="<?=site_url('dokter/hasil_diagnosis'); ?>">
                <i class="fa fa-user-md"></i> <span>Tabel Hasil Diagnosis</span>
              </a>
            </li>
             <li class="header">Manajemen Data</li>
            <li>
              <a href="<?=site_url('dokter/gejala'); ?>">
                <i class="fa fa-stethoscope"></i> <span>Manajemen Data Gejala</span>
              </a>
            </li>
            <li>
              <a href="<?=site_url('dokter/diagnosis'); ?>">
                <i class="fa fa-medkit"></i> <span>Manajemen Data Diagnosis</span>
              </a>
            </li>
            <li class="header">Log Diagnosis</li>
            <li>
              <a href="<?=site_url('dokter/log_diagnosis'); ?>">
                <i class="fa fa-users"></i> <span>Log Hasil Diagnosis User</span>
              </a>
            </li>
            
            <li class="header">Aplikasi</li>
            <li>
              <a href="<?=site_url('apps'); ?>">
                <i class="fa fa-cubes"></i> <span>Buka Aplikasi</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<header class="navbar navbar-inverse navbar-fixed-top" id="top" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">REDRUM</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
            <? if($this->session->userdata('username')=="user1"):?>
                <a href="<?=site_url('admin'); ?>">Komite Karir</a>
            <? endif;?>
            <? if($this->session->userdata('username')<>"user1"):?>
                <a href="<?=site_url('user'); ?>">Komite Karir</a>
            <? endif; ?>
        </li>
          <? if($this->session->userdata('username')=='user1' ): ?>
        <li>
          <a href="<?=site_url('admin/manajemen_user'); ?>">Manajemen User</a>
        </li>
          <!--
        <li>
          <a href="<?=site_url('admin/monitoring'); ?>">Monitoring</a>
        </li>
-->
          <? endif;?>
          
        <? if($this->session->userdata('tipe')=='Manajer'): ?>
        <li>
          <a href="<?=site_url('user/manajemen_user/'.$this->session->userdata('group')); ?>">Manajemen User</a>
        </li>
          <? endif;?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="glyphicon glyphicon-th-list menu-toggle" id="menu-toggle"></a></li>
      </ul>
    </nav>
  </div>
</header>
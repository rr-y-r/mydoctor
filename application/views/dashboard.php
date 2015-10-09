<? $this->load->view('includes/dashboard-header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          

          <div class="row">
           
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
                
              </div><!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                <h3 align="center">Selamat Datang <b><?=$this->session->userdata('nama');?></b> di Dashboard <b>MYDOCTOR</b></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div align="center">

                <center><h5>Berikut adalah jumlah data dari aplikasi MYDOCTOR yang telah tercatat</h5></center>
                  <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><?=$jumlah_gejala;?></h3>
                        <p>Jumlah Data Gejala Penyakit</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="<?=site_url('dokter/gejala'); ?>" class="small-box-footer">Pengaturan Data Gejala<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3><?=$jumlah_diagnosis;?></h3>
                        <p>Jumlah Data Diagnosis Penyakit</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="<?=site_url('dokter/gejala'); ?>" class="small-box-footer">Pengaturan Data Diagnosis<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box box-danger box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">Data Gejala</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                          <table class="table no-margin">
                            <thead>
                              <tr> 
                                <th>ID Gejala</th> 
                                <th>Gejala</th>
                            </tr> 
                            </thead>
                            <tbody>
                              <tr>
                                <? foreach($gejala as $row): ?>
                                <? if($row['id_gejala'] <= 5): ?>
                                  <tr>
                                      <td><?=$row['id_gejala'];?></td>
                                      <td><?=$row['gejala'];?></td>
                                  </tr>
                                <? endif; ?>
                                  <? endforeach;?>
                                  <td> .. </td>
                                  <td> <a href="<?=site_url('dokter/gejala'); ?>" class="small-box-footer" align="right" style="float:right">Baca Lebih Lengkap<i class="fa fa-arrow-circle-right"></i></a> </td>
                            </tbody>
                          </table>
                      </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>

                  <div class="col-md-6">
                    <div class="box box-success box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">Data Diagnosis</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                          <table class="table no-margin">
                            <thead>
                              <tr> 
                                <th>ID</th> 
                                <th>Diagnosis</th>
                                <th>Deskripsi</th>
                            </tr> 
                            </thead>
                            <tbody>
                              <tr>
                                <? foreach($diagnosis as $row): ?>
                                  <tr>
                                  <? if($row['id_diagnosis'] <= 3): ?>
                                      <td><?=$row['id_diagnosis'];?></td>
                                      <td><?=$row['diagnosis'];?></td>
                                      <td><?=$row['deskripsi'];?></td>
                                  </tr>
                                <? endif;?>
                                  <? endforeach;?>
                                  <td> .. </td>
                                  <td> .. </td>
                                  <td> <a href="<?=site_url('dokter/diagnosis'); ?>" class="small-box-footer" align="right" style="float:right">Baca Lebih Lengkap<i class="fa fa-arrow-circle-right"></i></a> </td>
                            </tbody>
                          </table>
                        </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->


      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->
    <? $this->load->view('includes/dashboard-footer-script'); ?>
  </body>
</html>

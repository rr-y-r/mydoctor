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
                  <h3 class="box-title">Tabel Data Diagnosa</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr> 
                          <th>ID Diagnosis</th> 
                          <th>Diagnosis</th>
                          <th>Deskripsi</th>
                          <th>Tindakan Awal</th>
                          <th>Tindakan Lanjut</th> 
                          <th>Keterangan Tambahan</th> 
                      </tr> 
                      </thead>
                      <tbody>
                        <tr>
                          <? foreach($diagnosis as $row): ?>
                                <tr>

                                    <td><?=$row['id_diagnosis'];?></td>
                                    <td><?=$row['diagnosis'];?></td>
                                    <td><?=$row['deskripsi'];?></td>
                                    <td><?=$row['tindak_awal'];?></td>
                                    <td><?=$row['tindak_lanjut'];?></td>
                                    <td><?=$row['tindak_lanjut'];?></td>
                                </tr>

                                <? endforeach;?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

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
                                <th>Nama Gejala</th>
                            </tr> 
                            </thead>
                            <tbody>
                              <tr>
                                <? foreach($gejala as $row): ?>

                                  <tr>
                                      <td><?=$row['id_gejala'];?></td>
                                      <td><?=$row['gejala'];?></td>
                                  </tr>

                                  <? endforeach;?>
                            </tbody>
                          </table>
                        </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>

              <div class="col-md-6">
                    <div class="box box-info box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">Relasi Diagnosis dan Gejala</h3>
                        <div class="box-tools pull-right">
                          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div><!-- /.box-tools -->
                      </div><!-- /.box-header -->
                      <div class="box-body" style="display: block;">
                        <div class="table-responsive">
                          <table class="table no-margin">
                            <thead>
                              <tr> 
                                <th>ID Diagnosis</th> 
                                <th>ID Gejala 1</th>
                                <th>ID Gejala 2</th>
                                <th>ID Gejala 3</th>
                                <th>ID Gejala 4</th>
                                <th>ID Gejala 5</th>
                            </tr> 
                            </thead>
                            <tbody>
                              <tr>
                                <? foreach($rdata as $row): ?>
                                  <tr>
                                      <td><?=$row['id_diagnosis'];?></td>
                                      <td><?=$row['q1'];?></td>
                                      <td><?=$row['q2'];?></td>
                                      <td><?=$row['q3'];?></td>
                                      <td><?=$row['q4'];?></td>
                                      <td><?=$row['q5'];?></td>
                                  </tr>

                                  <? endforeach;?>
                              </tbody>
                          </table>
                        </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>
            </div><!-- /.col -->


      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->
    <? $this->load->view('includes/dashboard-footer-script'); ?>

    <script type="text/javascript">

        $( document ).ready(function(e){

        });

    </script
  </body>
</html>

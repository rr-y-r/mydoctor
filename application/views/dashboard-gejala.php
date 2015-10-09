<? $this->load->view('includes/dashboard-header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <div class="modal_edit_div"></div>

        <div class="modal fade" id="TambahGejala" tabindex="999" role="dialog" aria-labelledby="TambahDataGejala" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Gejala</h4>
                <div class="alert alert-success alert-dismissable SuccessMessage" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alert!</h4>
                </div>

                 <div class="alert alert-success alert-dismissable ErrorMessage" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alert!</h4>
                </div>
              </div>
              <div class="modal-body">
                  <form class="formAddGejala" role="form" accept-charset="utf-8">
                     <div class="form-group">
                         <label>Jenis Gejala Penyakit</label>
                         <input class="form-control" name="gejala" type="text" placeholder="Gejala"/>
                         
                        </div>
                      <button type="submit" id="formSubmit" class="btn btn-success btn-lg pull-right col-md-6">Submit</button>
                  </form>
             </div>
             <div class="modal-footer">

            </div>
            </div>
          </div>
        </div>

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

                <a href="#" class="btn btn-sm btn-info btn-flat pull-left" onclick="return assign_select()" data-target="#TambahGejala" id="post_data" data-toggle="modal"> <span class="glyphicon glyphicon-plus"></span> Tambah Data Gejala Baru</a>
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr> 
                          <th>ID Gejala</th> 
                          <th>Gejala</th>
                          <th>Pengaturan</th> 
                      </tr> 
                      </thead>
                      <tbody>

                          <? foreach($gejala as $row): ?>
                            <tr>

                                <td><?=$row['id_gejala'];?></td>
                                <td><?=$row['gejala'];?></td>
                                <td>
                                <input type="text" name="gejala_edit_<?=$row['id_gejala'];?>" value="<?=$row['gejala'];?>" hidden/>
                                  <a href="#" onclick="return editDataGejala(
                                              <?=$row['id_gejala'];?>)" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Ubah</a> 
                                </td>
                            </tr>

                        <? endforeach;?>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->


      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->
    <? $this->load->view('includes/dashboard-footer-script'); ?>

    <script type="text/javascript">

      function assign_select(){

        var i = 1;
        var url = '<?=site_url("dokter/get_gejalaData"); ?>';
        
        //var gejala ='<select class="form-control q'+i+'" name="q'+i+'">';
        $.get(url, function(data){
        var gejala_data = jQuery.parseJSON(data);
        var gejala_option;
        gejala_option +='<option value="0"> - </option>';
        $.each(gejala_data, function (i,d) {
            console.log(d['id_gejala']);
            gejala_option +='<option value="'+d['id_gejala']+'"> '+d['id_gejala']+' - '+d['gejala']+'</option>';
        })
        //gejala_option+='</select>';
            $('#q1_select').append(gejala_option);
            $('#q2_select').append(gejala_option);
            $('#q3_select').append(gejala_option);
            $('#q4_select').append(gejala_option);
            $('#q5_select').append(gejala_option);
        });     

        }

        function submitFormHandler(formclass,url){

                formclass.children('button').prop('disabled', true);

                var fdata = formclass.serialize();

                $.post(url, fdata, function(rdata) {
                    var json = jQuery.parseJSON(rdata);
                    if (json.isSuccessful) {
                        $('.SuccessMessage').html(json.message);
                        $('.SuccessMessage').show();
                        $('.SuccessMessage').fadeOut(10000);
                    } else {
                        $('.ErrorMessage').html(json.message);
                        $('.ErrorMessage').show();
                        $('.ErrorMessage').fadeOut(10000);
                    }

                    formclass.children('button').prop('disabled', false);
                    formclass.children('input[name="name"]').select();

                    window.setTimeout(function(){location.reload()},3000);
                    
                });

                
        }

        function editDataGejala(id){
          var modal_edit = $(".modal_edit_div").append("<div class='modal editDataGejalaModal' tabindex='999' role='dialog' aria-labelledby='EditGejala' aria-hidden='true'><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close delete-editModal' data-dismiss='modal' aria-label='Close' ><span aria-hidden='true'>&times;</span></button><h4 class='modal-title' id='myModalLabel'>Ubah Data Gejala</h4><div class='alert alert-success alert-dismissable SuccessMessage' align='center'><button type='button' class='close' data-dismiss='alert'>×</button><h4>  <i class='icon fa fa-check'></i> Alert!</h4></div><div class='alert alert-success alert-dismissable ErrorMessage' align='center'><button type='button' class='close' data-dismiss='alert'>×</button><h4>  <i class='icon fa fa-check'></i> Alert!</h4></div></div><div class='modal-body'><form class='formEditGejala' role='form' accept-charset='utf-8'><div class='form-group'><label>Nama Gejala</label><input class='form-control' name='gejala_edit' type='text' placeholder='Gejala'/></div><button type='submit' id='formSubmit' class='btn btn-success btn-lg pull-right col-md-6'>Submit</button></form></div><div class='modal-footer'></div></div></div></div>");

          $('.SuccessMessage').hide();
          $('.ErrorMessage').hide();


          $('.editDataGejalaModal').attr('id', 'editDataGejalaModal'+id);

          $('#editDataGejalaModal'+id).fadeIn(200);

         $('.formEditGejala').attr('id', 'editDataGejalaForm_'+id);

         $('input[name=gejala_edit]').val($('input[name=gejala_edit_'+id+']').val());

            $('.formEditGejala').submit(function(){
                var formclass = $(this);
                var url = '<?=site_url("dokter/edit_gejala");?>'+'/'+id;
                submitFormHandler(formclass,url);

                return false;
            });


          $('.delete-editModal').click(function(){
            modal_edit.empty();
            $('#editDataGejalaModal'+id).fadeOut(200);

          });
        }

        $( document ).ready(function(e){
              $('.SuccessMessage').hide();
              $('.ErrorMessage').hide();

              $('.formAddGejala').submit(function(){
                var formclass = $(this);
                var url = '<?=site_url("dokter/tambah_gejala");?>';
                submitFormHandler(formclass,url);

                return false;
            });

        });

    </script
  </body>
</html>

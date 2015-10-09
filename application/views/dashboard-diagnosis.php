<? $this->load->view('includes/dashboard-header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <div class="modal_edit_div"></div>
<!--
      <div class="modal editDataDiagnosaModal" tabindex="999" role="dialog" aria-labelledby="editDataDiagnosa">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close delete-editModal" data-dismiss="modal" aria-label="Close" >
                      <span>&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Ubah Data Diagnosis</h4>
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
                        <form class="formEditDiagnosa" role="form" accept-charset="utf-8">
                           <div class="form-group col-sm-6">
                               <label>Nama Diagnosis</label>
                               <input class="form-control" name="diagnosis_edit" type="text" placeholder="Nama Penyakit"/>
                
                          
                               <label>Deskripsi Diagnosis</label>
                              <textarea class="form-control" rows="3"  name="deskripsi_edit" type="text" placeholder="Deskripsi Penyakit"></textarea>
                          
          
                               <label>Tindakan Awal Diagnosis</label>
                              <textarea class="form-control" rows="3"  name="tindak_awal_edit" type="text" placeholder="Deskripsi Tindakan Awal Penyakit"></textarea>
                                              
                               <label>Tindakan Lanjutan Diagnosis</label>
                              <textarea class="form-control" rows="3"  name="tindak_lanjut_edit" type="text" placeholder="Deskripsi Tindakan Lanjutan Penyakit"></textarea>
                          
              
                               <label>Keterangan Tambahan Diagnosis</label>
                              <textarea class="form-control" rows="3"  name="ket_tambahan_edit" type="text" placeholder="Deskripsi Keterangan Penyakit"></textarea>
                          
                                
                              </textarea>
                                </div>
                                <div class="form-group col-sm-6">
                                     <label>Gejala Pertama</label>
                                     <br>
                                       <select class="form-control" name="q1" id="q1_edit"></select>
                                      <br>
                                
                                     <label>Gejala Kedua</label>
                                    <select class="form-control" name="q2" id="q2_edit"></select>
                                <br>
                
                                     <label>Gejala Ketiga</label>
                                    <select class="form-control" name="q3" id="q3_edit"></select>
                                    <br>                
                                     <label>Gejala Keempat</label>
                                    <select class="form-control" name="q4" id="q4_edit"></select>
                                <br>
                    
                                     <label>Gejala Kelima</label>
                                    <select class="form-control" name="q5" id="q5_edit"> asdasd</select>
                                
                                </div>

                            <button type="submit" id="formSubmit" class="btn btn-success btn-lg pull-right col-md-6">Submit</button>
                        </form>
                   </div>
                   <div class="modal-footer">

                  </div>
                  </div>
                </div>
              </div>

-->
        <div class="modal fade" id="TambahDataDiagnosa" tabindex="999" role="dialog" aria-labelledby="TambahDataDiagnosis" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Diagnosis</h4>
              </div>
              <div class="alert alert-success alert-dismissable SuccessMessage" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alert!</h4>
                </div>

                 <div class="alert alert-success alert-dismissable ErrorMessage" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alert!</h4>
                </div>
              <div class="modal-body">
                
                  <form class="formAddDiagnosa" role="form" accept-charset="utf-8">
                     <div class="form-group col-sm-6">
                         <label>Nama Diagnosis</label>
                         <input class="form-control" name="diagnosis" type="text" placeholder="Nama Penyakit"/>
          
                    
                         <label>Deskripsi Diagnosis</label>
                        <textarea class="form-control" rows="3"  name="deskripsi" type="text" placeholder="Deskripsi Penyakit"></textarea>
                    
    
                         <label>Tindakan Awal Diagnosis</label>
                        <textarea class="form-control" rows="3"  name="tindak_awal" type="text" placeholder="Deskripsi Tindakan Awal Penyakit"></textarea>
                                        
                         <label>Tindakan Lanjutan Diagnosis</label>
                        <textarea class="form-control" rows="3"  name="tindak_lanjut" type="text" placeholder="Deskripsi Tindakan Lanjutan Penyakit"></textarea>
                    
        
                         <label>Keterangan Tambahan Diagnosis</label>
                        <textarea class="form-control" rows="3"  name="ket_tambahan" type="text" placeholder="Deskripsi Keterangan Penyakit"></textarea>
                    
                          </div>
                          <div class="form-group col-sm-6">
                               <label>Gejala Pertama</label>
                               <br>
                                 <select class="form-control" name="q1" id="q1_select"></select>
                                <br>
                          
                               <label>Gejala Kedua</label>
                              <select class="form-control" name="q2" id="q2_select"></select>
                          <br>
          
                               <label>Gejala Ketiga</label>
                              <select class="form-control" name="q3" id="q3_select"></select>
                              <br>                
                               <label>Gejala Keempat</label>
                              <select class="form-control" name="q4" id="q4_select"></select>
                          <br>
              
                               <label>Gejala Kelima</label>
                              <select class="form-control" name="q5" id="q5_select"></select>
                          
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

                <a href="#" class="btn btn-sm btn-info btn-flat pull-left" data-target="#TambahDataDiagnosa" id="post_data" data-toggle="modal"> <span class="glyphicon glyphicon-plus"></span> Tambah Diagnosa baru</a>
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr> 
                          <th>ID Diagnosa</th> 
                          <th>Diagnosis</th>
                          <th>Gejala 1</th>
                          <th>Gejala 2</th> 
                          <th>Gejala 3</th> 
                          <th>Gejala 4</th> 
                          <th>Gejala 5</th> 
                          <th>Pengaturan</th> 
                      </tr> 
                      </thead>

                      <tbody>
                        <tr>
                          <? for($i=0;$i<count($id_result);$i++): ?>

                            <tr>
                                <td><?=$id_result[$i];?></td>
                                <td><?=$id_diagnosis[$i];?></td>
                                <td><?=$q1[$i];?></td>
                                <td><?=$q2[$i];?></td>
                                <td><?=$q3[$i];?></td>
                                <td><?=$q4[$i];?></td>
                                <td><?=$q5[$i];?></td>
                                <td>
                                <input type="text" name="diagnosis_edit_<?=$id_result[$i];?>" value="<?=$data_diagnosis[$i]['diagnosis'];?>" hidden/>
                                <input type="text" name="deskripsi_edit_<?=$id_result[$i];?>" value="<?=$data_diagnosis[$i]['deskripsi'];?>" hidden/>
                                <input type="text" name="tindak_awal_edit_<?=$id_result[$i];?>" value="<?=$data_diagnosis[$i]['tindak_awal'];?>" hidden/>
                                <input type="text" name="tindak_lanjut_edit_<?=$id_result[$i];?>" value="<?=$data_diagnosis[$i]['tindak_lanjut'];?>" hidden/>
                                <input type="text" name="ket_tambahan_edit_<?=$id_result[$i];?>" value="<?=$data_diagnosis[$i]['ket_tambahan'];?>" hidden/>

                                  <a href="#" onclick="
                                    return editDataDiagnosis(
                                              <?=$id_result[$i];?>)"
                                              >
                                    <span class="glyphicon glyphicon-pencil" style="color:green"></span>
                                  </a>
                                <a href="#" onclick="return delete_diagnosis(<?=$id_result[$i];?>)"><span class="fa fa-trash" style="float:right;color:red"></span></a></td>
                            </tr>

                            <? endfor;?>
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

        function editDataDiagnosis(id){

          var modal_edit = $(".modal_edit_div").append("<div class='modal editDataDiagnosaModal' tabindex='999' role='dialog' aria-labelledby='editDataDiagnosa'><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close delete-editModal' data-dismiss='modal' aria-label='Close' ><span>&times;</span></button><h4 class='modal-title' id='myModalLabel'>Ubah Data Diagnosis</h4><div class='alert alert-success alert-dismissable SuccessMessage' align='center'><button type='button' class='close' data-dismiss='alert'>×</button><h4>  <i class='icon fa fa-check'></i> Alert!</h4></div><div class='alert alert-success alert-dismissable ErrorMessage' align='center'><button type='button' class='close' data-dismiss='alert'>×</button><h4>  <i class='icon fa fa-check'></i> Alert!</h4></div></div><div class='modal-body'><form class='formEditDiagnosa' role='form' accept-charset='utf-8'><div class='form-group col-sm-6'><label>Nama Diagnosis</label><input class='form-control' name='diagnosis_edit' type='text' placeholder='Nama Penyakit'/><label>Deskripsi Diagnosis</label><textarea class='form-control' rows='3'  name='deskripsi_edit' type='text' placeholder='Deskripsi Penyakit'></textarea><label>Tindakan Awal Diagnosis</label><textarea class='form-control' rows='3'  name='tindak_awal_edit' type='text' placeholder='Deskripsi Tindakan Awal Penyakit'></textarea><label>Tindakan Lanjutan Diagnosis</label><textarea class='form-control' rows='3'  name='tindak_lanjut_edit' type='text'placeholder='Deskripsi Tindakan Lanjutan Penyakit'></textarea<label>Keterangan Tambahan Diagnosis</label><textarea class='form-control' rows='3'  name='ket_tambahan_edit' type='text' placeholder='Deskripsi Keterangan Penyakit'></textarea></textarea></div><div class='form-group col-sm-6'><label>Gejala Pertama</label><br><select class='form-control' name='q1' id='q1_edit'></select><br><label>Gejala Kedua</label><select class='form-control' name='q2' id='q2_edit'></select><br><label>Gejala Ketiga</label><select class='form-control' name='q3' id='q3_edit'></select><br><label>Gejala Keempat</label><select class='form-control' name='q4' id='q4_edit'></select><br><label>Gejala Kelima</label><select class='form-control' name='q5' id='q5_edit'> asdasd</select></div><button type='submit' id='formSubmit' class='btn btn-success btn-lg pull-right col-md-6'>Submit</button></form></div><div class='modal-footer'></div></div></div></div>");

          $('.SuccessMessage').hide();
          $('.ErrorMessage').hide();

          var i = 1;
          var url = '<?=site_url("dokter/get_gejalaData"); ?>';
          
          //var gejala ='<select class="form-control q'+i+'" name="q'+i+'">';
          $.get(url, function(data){
          var gejala_data = jQuery.parseJSON(data);
          var gejala_option;
          gejala_option +='<option value="0"> - </option>';
          $.each(gejala_data, function (i,d) {

              gejala_option +='<option value="'+d['id_gejala']+'"> '+d['id_gejala']+' - '+d['gejala']+'</option>';
          })
          //gejala_option+='</select>';
              $('#q1_edit').append(gejala_option);
              $('#q2_edit').append(gejala_option);
              $('#q3_edit').append(gejala_option);
              $('#q4_edit').append(gejala_option);
              $('#q5_edit').append(gejala_option);

              
          }); 



          $('.editDataDiagnosaModal').attr('id', 'editDataDiagnosaModal'+id);

          $('#editDataDiagnosaModal'+id).fadeIn(200);

         $('.formEditDiagnosa').attr('id', 'editDataDiagnosaForm_'+id);

          val_diagnosis = $('input[name=diagnosis_edit_'+id+']').val();
          val_deskripsi = $('input[name=deskripsi_edit_'+id+']').val();
          val_tindak_awal = $('input[name=tindak_awal_edit_'+id+']').val();
          val_tindak_lanjut = $('input[name=tindak_lanjut_edit_'+id+']').val();
          val_ket_tambahan = $('input[name=ket_tambahan_edit_'+id+']').val();


            $('input[name=diagnosis_edit]').val(val_diagnosis);
            $('textarea[name=deskripsi_edit]').val(val_deskripsi);
            $('textarea[name=tindak_awal_edit]').val(val_tindak_awal);
            $('textarea[name=tindak_lanjut_edit]').val(val_tindak_lanjut);
            $('textarea[name=ket_tambahan_edit]').val(val_ket_tambahan);

            $("<input type='text' value='"+id+"' hidden/>")
               .attr("id", "myfieldid")
               .attr("name", "id_diagnosis")
               .appendTo("#editDataDiagnosaForm_"+id);

            $('.formEditDiagnosa').submit(function(){
                var formclass = $(this);
                var url = '<?=site_url("dokter/edit_diagnosis");?>';
                submitFormHandler(formclass,url);

                return false;
            });


          $('.delete-editModal').click(function(){
            modal_edit.empty();
            $('#editDataDiagnosaModal'+id).fadeOut(200);

          });
        }

         function delete_diagnosis(id){
              if(confirm('apakah kamu yakin ingin menghapus data diagnosis ini ?')){
                  var url = '<?=site_url("dokter/delete_diagnosis/");?>'+'/'+id;
                  $.post(url);
                  window.setTimeout(function(){location.reload()},2000);
              }else{

              }
          }



        $( document ).ready(function(e){
            assign_select();
            $('.SuccessMessage').hide();
            $('.ErrorMessage').hide();

            $('.formAddDiagnosa').submit(function(){
                var formclass = $(this);
                var url = '<?=site_url("dokter/tambah_diagnosis");?>';
                submitFormHandler(formclass,url);

                return false;
            });



        });

    </script
  </body>
</html>

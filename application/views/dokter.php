<!DOCTYPE html>
<html lang="en">
	<head>
        <link rel="shortcut icon" href="<?=base_url('assets/images/logos.png'); ?>">
		<title>MyDoctor</title>
        <? $this->load->view('includes/header');?>
        
    </head>
    <body>
        <nav class="navbar navbar-default">

            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <span class="logo-lg"><img alt="Brand" src="<?=base_url('assets/images/logo2.png'); ?>" style="width:180px;height:50px;margin-top:-15px;margin-left:-15px;"></span>
              </a>
                
                
          </div>
            <p class="navbar-text navbar-right">Selamat Datang, <a href="login/logout" class="navbar-link"><?=$this->session->userdata('nama');?></a></p>
        </nav>
        
        <div class="col-md-10 col-md-offset-1">
<button class="btn btn-success" onclick="return assign_select()" data-toggle="modal" data-target="#TambahDataDiagnosa"><span class="glyphicon glyphicon-plus"></span> Tambah Data Diagnosa</button>
            <br>
            <br>
        <table class="table table-striped table-bordered table-hover" border="1" style="width:100%" id="gejalaTab">
            <thead>
                <tr> 
                    <th>ID Diagnosa</th> 
                    <th>Diagnosis</th>
                    <th>q1</th>
                    <th>q2</th> 
                    <th>q3</th> 
                    <th>q4</th> 
                    <th>q5</th> 
                    <th>Pengaturan</th> 
                </tr> 
            </thead>
            <tbody>
                <? for($i=0;$i<count($id_result);$i++): ?>
                <tr>
                    <td><?=$id_result[$i];?></td>
                    <td><?=$id_diagnosis[$i];?></td>
                    <td><?=$q1[$i];?></td>
                    <td><?=$q2[$i];?></td>
                    <td><?=$q3[$i];?></td>
                    <td><?=$q4[$i];?></td>
                    <td><?=$q5[$i];?></td>
                    <td><button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span> EDIT</button></td>
                </tr>

                <? endfor;?>
                
            </tbody>
        </table>
            
        <div class="modal fade" id="TambahDataDiagnosa" tabindex="-1" role="dialog" aria-labelledby="TambahDataDiagnosa" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Diagnosa</h4>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">

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
                    

                         <label>Tindakan Awal Diagnosis</label>
                        <textarea class="form-control" rows="3"  name="tindak_awal" type="text" placeholder="Deskripsi Tindakan Awal Penyakit"></textarea>
                    </div>
                    <div class="form-group col-sm-6">
                         <label>Gejala Pertama</label>
                         <br>
                         <!--
                         <input id="q1_check" type="checkbox" placeholder="Jenis Gejala Pertama"/>tambah gejala baru
                         -->
                         
                           <select class="form-control" name="q1" id="q1_select"></select>
                         
                         <!--
                         <div id="input_q1" hidden> 
                           <input class="form-control" id="q1_new" type="text" placeholder="Jenis Gejala Pertama"/>
                         </div>
                         -->
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
                        <<select class="form-control" name="q5" id="q5_select"></select>
                    
                    </div>
                    

                <div id="addSuccess" class="row" style="display: none">
                      <div id="addSuccessMessage" class="alert alert-info text-center"></div>
                </div>
                <div id="addError" class="row" style="display: none">
                      <div id="addErrorMessage" class="alert alert-danger text-center"></div>
                </div>
                <button type="submit" id="formSubmit" class="btn btn-success btn-lg pull-right col-md-6">Submit</button>
                </form>

              </div>
               </div>
            </div>
          </div>
        </div>
                        
</div>
    <script src="<?=base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.js'); ?>"></script>
    <script>
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
    $( document ).ready(function(e){

         
            
            /*
            
            var person ='<select class="form-control assesor'+i+'" name="assesor'+i+'" required><option value="HRD">HRD</option><option value="HMC">HMC</option></select><br>';
            

        document.getElementById('q1_check').addEventListener('change', function(e) {
            var el = e.target;
            //var inputs = document.getElementById('q1_check').getElementsByTagName('input');

            // If 'all' was clicked
           

                // If 'all' is checked
            if (el.checked) {
              document.getElementById("q1_new").setAttribute("name","q1");
              document.getElementById("input_q1").removeAttribute("hidden");
            }else{
              document.getElementById("q1_new").removeAttribute("name");
              document.getElementById("input_q1").setAttribute("hidden","true");
            }
        }, false);
        */
    });
    </script>

    </body>
</html>
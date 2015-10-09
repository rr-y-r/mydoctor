<? $this->load->view('includes/header');?>

<form class="formTrainingData" id="formTrainingData" role="form" accept-charset="utf-8">
id diagnosis    :<br><input type="number" name="id_diagnosis">
<br>
id gejala 1     :<br><input type="number" name="id_gejala_1">
<br>
id gejala 2     :<br><input type="number" name="id_gejala_2">
<br>
id gejala 3     :<br><input type="number" name="id_gejala_3">
<br>
id gejala 4     :<br><input type="number" name="id_gejala_4">
<br>
id gejala 5     :<br><input type="number" name="id_gejala_5">
<br>
    <input type="submit" value="Submit">
</form>

<div id="addSuccess" class="row" style="display: none">
      <div id="addSuccessMessage" class="alert alert-info text-center"></div>
</div>
<div id="addError" class="row" style="display: none">
      <div id="addErrorMessage" class="alert alert-danger text-center"></div>
</div>

<script>

    
$(document).ready(function() {
    
    $('.formTrainingData').submit(function() {
      var form = $(this);
      form.children('button').prop('disabled', true);
      $('#addSuccess').hide();
      $('#addError').hide();

      var faction = '<?=site_url('admin/addTrainingData'); ?>';
      var fdata = form.serialize();

      $.post(faction, fdata, function(rdata) {
          var json = jQuery.parseJSON(rdata);
          if (json.isSuccessful) {
              $('#addSuccessMessage').html(json.message);
              $('#addSuccess').show();
              loadTable();
          } else {
              $('#addErrorMessage').html(json.message);
              $('#addError').show();
              loadTable();
          }

          form.children('button').prop('disabled', false);
          form.children('input[name="name"]').select();
      });

      return false;
        loadTable();
    });
    

});
</script>
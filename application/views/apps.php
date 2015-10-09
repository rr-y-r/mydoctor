<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="<?=base_url('assets/images/logos.png'); ?>">
		<title>MyDoctor</title>

        <? $this->load->view('includes/header');?>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/component.css'); ?>" />
		<!-- Modernizr is used for flexbox fallback -->
		<script src="<?=base_url('assets/js/modernizr.custom.js'); ?>"></script>
        
	</head>

    <div class="modal" id="modaltutorial" tabindex="999" role="dialog" aria-labelledby="diagnosaModal" style="background : rgba(0,0,0,.5)">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
               <center>TUTORIAL MYDOCTOR</center>
              </div>
              <div class="modal-body" align="center">
                  <div class="container-fluid">
                  <img class="" src="<?=base_url('assets/images/tutorial/click+.png'); ?>" alt="1." />
                  <p> untuk memulai diagnosis, pilih menu <b>"+"</b>
                   pada gejala yang ingin dipilih, gejala dapat dipilih lebih dari satu</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/clickx.png'); ?>" alt="2." />
                  <p> jika ada kesalahan pemilihan, pilihan dapat dihapus dengan menekan <b>"x"</b>
                   pada menu navigasi pojok kanan atas</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/lanjut.png'); ?>" alt="3." />
                  <p>jika pemilihan sudah selesai, akan muncul tombol diagnosis yang menandakan bahwa gejala sudah lengkap</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/diagnosa.png'); ?>" alt="3." />
                  <p>proses verifikasi gejala yang dipilih akan ditampilkan beserta dengan tombol hasil diagnosis, klik tombol diagnosis</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/hasil.png'); ?>" alt="3." />
                  <p>Hasil diagnosis sementara berdasarkan pilihan akan ditampilkan melalui "pop-out" </p>
                   <hr>


                   <fb:login-button onlogin="checkLoginState();" id="start-apps-btn" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"> Login Dengan Facebook</fb:login-button>
                   <!--<button type="button" class="btn btn-lg btn-success" id="start-apps-btn"><b>Mulai Diagnosa !</b></button>-->
                   <div id="status"></div>atau
                   <a href="#" style="color:blue" onclick="return start_diagnose_apps()">diagnosa sebagai Guest</a>

              </div>
               </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modaluser" tabindex="999" role="dialog" aria-labelledby="userModal" style="background : rgba(0,0,0,.5)">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
               <center>TUTORIAL MYDOCTOR</center>
              </div>
              <div class="modal-body" align="center">
                  <div class="container-fluid">
                  <img class="" src="<?=base_url('assets/images/tutorial/click+.png'); ?>" alt="1." />
                  <p> untuk memulai diagnosis, pilih menu <b>"+"</b>
                   pada gejala yang ingin dipilih, gejala dapat dipilih lebih dari satu</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/clickx.png'); ?>" alt="2." />
                  <p> jika ada kesalahan pemilihan, pilihan dapat dihapus dengan menekan <b>"x"</b>
                   pada menu navigasi pojok kanan atas</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/lanjut.png'); ?>" alt="3." />
                  <p>jika pemilihan sudah selesai, akan muncul tombol diagnosis yang menandakan bahwa gejala sudah lengkap</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/diagnosa.png'); ?>" alt="3." />
                  <p>proses verifikasi gejala yang dipilih akan ditampilkan beserta dengan tombol hasil diagnosis, klik tombol diagnosis</p>
                   <hr>
                   <img class="" src="<?=base_url('assets/images/tutorial/hasil.png'); ?>" alt="3." />
                  <p>Hasil diagnosis sementara berdasarkan pilihan akan ditampilkan melalui "pop-out" </p>
                   <hr>


                   <fb:login-button onlogin="checkLoginState();" id="start-apps-btn" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"> Login Dengan Facebook</fb:login-button>
                   
                   <div id="status"></div>
                   <br>
                   <button type="button" class="btn btn-lg btn-info btn_modalLog" onclick="return loadTable()" data-toggle="modal" data-target="#modal_logDiagnosa" hidden><b>Lihat Log Diagnosa</b></button>
              </div>
               </div>
            </div>
          </div>
        </div>

        <div class="modal" id="modal_logDiagnosa" tabindex="999" role="dialog" aria-labelledby="modal_logDiagnosa" style="background : rgba(0,0,0,.5)">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
               <center>Log Diagnosa MYDOCTOR</center>
              </div>
              <div class="modal-body" align="center">
                <table class="table table-responsive no-margin" id="log_table" style="font-size:11px">
                      <thead>
                        <tr> 
                          <th>ID log</th> 
                          <th>ID Diagnosis</th> 
                          <th>Diagnosis</th> 
                          <th>Deskripsi</th> 
                          <th>Tindakan Awal</th> 
                          <th>Tindakan Lanjut</th> 
                          <th>Keterangan Tambahan</th> 
                      </tr> 
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                   <div id="status"></div>
              </div>
               </div>
            </div>
          </div>
        </div>

	<body class="base-bg">


        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->

        <div id="status"></div>
    

		<!-- Compare basket -->
		<div class="compare-basket">
            <div class="hidden">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text hidden">Compare</span></button></div>
            <button class="action action--button" id="tester">Diagnosa</button>
		</div>
		<!-- Main view -->
		<div class="view">
            
			<!-- Blueprint header -->

			<!-- Product grid -->
			<section class="grid">
                
				<!-- Products -->
                <? foreach($gejala_data as $gejala): ?>
				<div class="product product-disable" id="gejala_<?=$gejala['id_gejala']; ?>">
					<div class="product__info" data-gejala-id="<?=$gejala['id_gejala']; ?>">
						<img class="product__image" src="<?=base_url('assets/images/aid.png'); ?>" alt="Product 1" />
						<h3 class="product__title"><?=$gejala['id_gejala']; ?>. <?=$gejala['gejala']; ?></h3>
					</div>
					<label class="action action--compare-add"><input class="check-hidden data-toggle_<?=$gejala['id_gejala']; ?>" type="checkbox" value="data-toggle_<?=$gejala['id_gejala']; ?>" onclick="return toggle_result(<?=$gejala['id_gejala']; ?>)"/><i class="fa fa-plus"></i><i class="fa fa-check"></i><span class="action__text action__text--invisible">tambah gejala penyakit</span></label>
				</div>
                
                

                <? endforeach; ?>
                
			</section>

                <a href="#" data-toggle="modal" data-target="#modaluser"><img class="doctor-icon" src="<?=base_url('assets/images/gemastik.png'); ?>"></a>

            <p class="doctor-text" align="center"></p>
		</div><!-- /view -->
		<!-- product compare wrapper -->
		<section class="compare">
			<button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
            
            <button class="action--close next btn btn-lg btn-success" id="post_data" data-toggle="modal" data-target="#diagnosaModal" >Diagnosa</button>
    

            
		</section>
        
        <div class="modal fade" id="diagnosaModal" tabindex="999" role="dialog" aria-labelledby="diagnosaModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Hasil Diagnosa</h4>
                <div class="alert alert-success alert-dismissable SuccessMessage" align="center">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>  <i class="icon fa fa-check"></i> Alert!</h4>
                </div>
              </div>
              <div class="modal-body">
                  <div class="container-fluid">
                      <h5>ID Diagnosis : <span class="kode-diagnosa"></span></h5>
                      <h4 class="nama-penyakit"></h4>
                      <p class="desc-diagnosa"></p><br>
                      <h4>Tindakan Awal</h4>
                      <p class="Awal-diagnosa"></p><br>
                      <h4>Tindakan Lanjut</h4>
                      <p class="Lanjut-diagnosa"></p><br>
                      <h4>Keterangan Tambahan</h4>
                      <p class="T-diagnosa"></p>
              </div>
              <div class="simpan_log" align="center"></div>
              <div class="facebook-login-modal" align="center">
              <fb:login-button class="fb-login-button" onlogin="ShowButtonSave();" data-max-rows="1" data-size="medium" data-show-faces="false" id="facebook-save-log" data-auto-logout-link="false"> login dengan facebook untuk menyimpan hasil diagnosa </fb:login-button>
                   
                   </div>
               </div>
               
            </div>
          </div>
        </div>
        
        <div class="diagnosa-btn-txt" aria-hidden="true" >
            <h2><center>diagnosa telah selesai dilakukan, klik tombol dibawah untuk melihat hasil diagnosa</center></h2>
         <center><button class="action action--button tester1" id="tester1">lanjut</button></center>
        </div>
		<script src="<?=base_url('assets/js/classie.js'); ?>"></script>
		<script src="<?=base_url('assets/js/main.js'); ?>"></script>
        <script src="<?=base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.js'); ?>"></script>

        <script>
            var toggle_result_id;
            var length_selected;
            var data_send = [];
            var check_counter = 0;
            var click_attemp = 0;
            
            (function() {
                var data_trigger = [];
                var x_sum = 0;

                function result_validation(data_arr){
                    var url = '<?=site_url("Apps/init_grid/"); ?>';

                    $.get(url,function(data){

                    });

                }
                
            function hidden_count(){
                var data_gejala_length = $('div.product').length;
                var flag=false;

                for(var data_count = 0; data_count <= data_gejala_length; data_count++){

                    if($('#gejala_'+data_count).hasClass('product-disable')){
                        flag=true;
                    }else{
                        flag=false;
                    }

                }
                console.log('flag-> '+flag);
                
                if(flag){
                    $('.diagnosa-btn-txt').show(222);
                }else{
                    $('.diagnosa-btn-txt').hide(222);
                }
            }
                
                function addTriggerDiag(data){
                    
                    
                     //get data where_data;
                    
                    data_trigger[x_sum]=data;
                    console.log('----');
                    /*
                    for(var i=0;i< data_trigger.length;i++){
                        console.log('data  +' +data_trigger[i]);
                        }
                    */
                    for(var i=0;i< 5;i++){
                        if(data_trigger[i]==null){
                            data_trigger[i]=0;
                            //console.log('null');
                        }
                    }
                    
                    //console.log(trydata);
                    x_sum++;
                    
                    //var post_data = dataTrigger_get.serializeArray();
                    
                    check_counter++;
                    //var dataDiag_get = http_build_query(data_trigger);
                    
                    //console.log(url);
                    /*
                    $.get(url, function(data){
                        var data_pejabat = jQuery.parseJSON(data);
                    }*/
                    
                    

                    retrieveData(check_counter);
                    hidden_count();
                    
                    setTimeout(function(){
                    $('.doctor-text').empty();
                  $('.doctor-text').slideUp(0).fadeIn(2555).append('klik tombol "x" pada navbar di pojok kanan untuk<br> menghapus diagnosa yang telah dipilih');
                }, 200);
                    
                    
                    
                }

                 
                
                
                
                function initGridData(){
                    $.get('<?=site_url("Apps/init_grid/"); ?>', function(data){
                    //alert("response : "+data);
                    
                        var data_gejala_length = $('div.product').length;
                        var data_grid = jQuery.parseJSON(data);
                        var flag=true;

                        for(var data_count = 0; data_count <= data_gejala_length; data_count++){

                            $.each(data_grid,function(j,i){
                                if(data_count == i){
                                    $('#gejala_'+data_count).removeClass('product-disable').show(550);

                                    return false; 
                                }
                            });

                        }
                    });
                }
                
                function retrieveData(check_counter){
                    var dataTrigger_get =new Array('q1='+data_trigger[0],
                                                   'q2='+data_trigger[1],
                                                   'q3='+data_trigger[2],
                                                   'q4='+data_trigger[3],
                                                   'q5='+data_trigger[4]
                                                  );

                    console.log('data_trigger 0 ==>>'+dataTrigger_get[4]);
                    
                    var trydata = dataTrigger_get.join('&');
                    
                    var url = '<?=site_url("Apps/test_print/"); ?>'+'/'+check_counter;
                    if(check_counter != 0){
                        
                    
                        $.post(url,trydata,function(data){
                           // alert("response : "+data);
                            var data_gejala_length = $('div.product').length;
                            var data_grid = jQuery.parseJSON(data);
                            var flag=true;

                            //enable all grid then disable it by post

                            for(var data_count = 0; data_count <= data_gejala_length; data_count++){
                                $('#gejala_'+data_count).addClass('product-disable').hide(550);
                            }

                            for(var data_count = 0; data_count <= data_gejala_length; data_count++){
                                $.each(data_grid,function(j,i){
                                    //code here later
                                    var trigger_count = data_grid[check_counter];
                                    //console.log(data_grid[check_counter]);
                                    $.each(trigger_count,function (j,i){
                                       if(data_count == i){
                                            $('#gejala_'+data_count).removeClass('product-disable').show(550);
                                           
                                        }
                                        
                                    });
                                    

                                        //console.log('trigger_count ->'+data_grid);
 
                                    /*

                                    if(data_count == i){
                                        $('#gejala_'+data_count).removeClass('product-disable');

                                        return false; 
                                    }
                                    */
                                });

                            }
                        });
                    
                    }
                    
                    
                    if(check_counter == 0){
                        initGridData();
                    }
                }

                
                function removeTriggerDiag(data){
                    var url; //get data where_data;

                    data_trigger.splice(x_sum,1); 
                    console.log('----');
                    for(var i=0;i< data_trigger.length;i++){
                        if(data_trigger[i]==data){
                            data_trigger.splice(i,1);
                            x_sum--;
                            }
                        //console.log('current  +' +data_trigger[i]);
                        }
                    
                    for(var i=0;i< data_trigger.length;i++){

                        console.log('current  +' +data_trigger[i]);
                        }
                    //console.log('current  ' +data_trigger[x]);
                    console.log('----');
                    
                    check_counter--;
                    
                    retrieveData(check_counter);
                    $('.diagnosa-btn-txt').hide(222);
                }

                var viewEl = document.querySelector('.view'),
                    gridEl = viewEl.querySelector('.grid'),
                    items = [].slice.call(gridEl.querySelectorAll('.product')),
                    basket;

                // the compare basket
                function CompareBasket() {
                    this.el = document.querySelector('.compare-basket');
                    this.compareCtrl = this.el.querySelector('.action--compare');
                    this.compareWrapper = document.querySelector('.compare'),
                    this.closeCompareCtrl = this.compareWrapper.querySelector('.action--close')

                    this.itemsAllowed = 5;
                    this.totalItems = 0;
                    this.items = [];

                    // compares items in the compare basket: opens the compare products wrapper
                    this.compareCtrl.addEventListener('click', this._compareItems.bind(this));
                    // close the compare products wrapper
                    var self = this;
                    this.closeCompareCtrl.addEventListener('click', function() {
                        // toggle compare basket
                        classie.add(self.el, 'compare-basket--active');
                        // animate..
                        classie.remove(viewEl, 'view--compare');
                    });
                }

                CompareBasket.prototype.add = function(item) {
                    // check limit
                    if( this.isFull() ) {
                        return false;
                    }

                    classie.add(item, 'product--selected');

                    // create item preview element
                    var preview = this._createItemPreview(item);
                    // prepend it to the basket
                    this.el.insertBefore(preview, this.el.childNodes[0]);
                    // insert item
                    this.items.push(preview);

                    this.totalItems++;
                    if( this.isFull() ) {
                        classie.add(this.el, 'compare-basket--full');
                    }

                    classie.add(this.el, 'compare-basket--active');
                    
                    var data = item.querySelector('[data-gejala-id]').getAttribute(["data-gejala-id"]);
                    console.log('compare basket prototype ==>'+item);
                    addTriggerDiag(data);

                    click_attemp = click_attemp+1;
                    console.log('click_attemp  '+click_attemp);
                };

                CompareBasket.prototype._createItemPreview = function(item) {
                    var self = this;

                    var preview = document.createElement('div');
                    preview.className = 'product-icon';
                    preview.setAttribute('data-idx', items.indexOf(item));

                    preview.setAttribute('basket_index', 5-click_attemp);

                    //console.log('prototype data-idx =>>'+preview.getAttribute('data-idx'));
                    //if(click_attemp == 1){
                        var removeCtrl = document.createElement('button');
                        removeCtrl.className = 'action action--remove';


                        removeCtrl.innerHTML = '<i class="fa fa-remove"></i><span class="action__text action__text--invisible">Remove product</span>';
                        removeCtrl.addEventListener('click', function() {
                            self.remove(item);
                        });

                        var productImageEl = item.querySelector('img.product__image').cloneNode(true);

                        preview.appendChild(productImageEl);
                        preview.appendChild(removeCtrl);
                    //}if(click_attemp > 1){

                    //}
                    var productInfo = item.querySelector('.product__info').innerHTML;

                    preview.setAttribute('data-info', productInfo);


                    return preview;
                };

                CompareBasket.prototype.remove = function(item) {
                    classie.remove(this.el, 'compare-basket--full');
                    classie.remove(item, 'product--selected');
                    var preview = this.el.querySelector('[data-idx = "' + items.indexOf(item) + '"]');
                    this.el.removeChild(preview);
                    this.totalItems--;

                    var indexRemove = this.items.indexOf(preview);
                    this.items.splice(indexRemove, 1);

                    if( this.totalItems === 0 ) {
                        classie.remove(this.el, 'compare-basket--active');
                    }

                    // checkbox
                    var checkbox = item.querySelector('.action--compare-add > input[type = "checkbox"]');
                    if( checkbox.checked ) {
                        checkbox.checked = false;
                    }
                    
                    var data = item.querySelector('[data-gejala-id]').getAttribute(["data-gejala-id"]);

                    click_attemp = click_attemp-1;
                    console.log('click_attemp  '+click_attemp);
                    
                    removeTriggerDiag(data);
                };

                CompareBasket.prototype._compareItems = function() {
                    var self = this;

                    // remove all previous items inside the compareWrapper element
                    [].slice.call(this.compareWrapper.querySelectorAll('div.compare__item')).forEach(function(item) {
                        self.compareWrapper.removeChild(item);
                    });

                    for(var i = 0; i < this.totalItems; ++i) {
                        var compareItemWrapper = document.createElement('div');
                        compareItemWrapper.className = 'compare__item';

                        var compareItemEffectEl = document.createElement('div');
                        compareItemEffectEl.className = 'compare__effect';

                        compareItemEffectEl.innerHTML = this.items[i].getAttribute('data-info');
                        compareItemWrapper.appendChild(compareItemEffectEl);

                        this.compareWrapper.insertBefore(compareItemWrapper, this.compareWrapper.childNodes[0]);
                    }

                    setTimeout(function() {
                        // toggle compare basket
                        classie.remove(self.el, 'compare-basket--active');
                        // animate..
                        classie.add(viewEl, 'view--compare');
                    }, 25);
                };

                CompareBasket.prototype.isFull = function() {
                    return this.totalItems === this.itemsAllowed;
                };
                

                function init() {
                    // initialize an empty basket
                    basket = new CompareBasket();
                    initEvents();
                }

                function initEvents() {
                    items.forEach(function(item) {
                        var checkbox = item.querySelector('.action--compare-add > input[type = "checkbox"]');
                        checkbox.checked = false;
                        

                        // ctrl to add to the "compare basket"
                        checkbox.addEventListener('click', function(ev) {
                            //var data = item.querySelector('[data-gejala-id]').getAttribute(["data-gejala-id"]);
                            if( ev.target.checked ) {
                                if( basket.isFull() ) {
                                    ev.preventDefault();
                                    return false;
                                }
                                basket.add(item);
                                //x++;
                                //addTriggerDiag(data);
                                //console.log('data click -> '+data2);
                            }
                            else {
                                basket.remove(item);
                                //x--;
                                //removeTriggerDiag(data);
                            }
                        });
                    });
                }

                init();

            })();
            
            
            
            $( document ).ready(function(e){

                $('.SuccessMessage').hide();

                $('.btn_modalLog').hide();

                $('#modaltutorial').fadeIn(1000,function(){
                    $('body').css("overflow","hidden");

                    $('#start-apps-btn').click(function(){
                        $('#modaltutorial').fadeOut(1000);
                        $('body').css("overflow-y","scroll");
                    });
                });


                $('.doctor-icon').slideUp(0).fadeIn(2555);
                $('.doctor-text').slideUp(0).delay(555).fadeIn(2555).append('Selamat Datang Di aplikasi MyDoctor');
                
                setTimeout(function(){
                    $('.doctor-text').empty();
                  $('.doctor-text').slideUp(0).fadeIn(2555).append('Untuk Memulai diagnosa,<br>Silahkan Memilih Data Diagnosis dengan menekan <br>tombol "+" pada kanan atas icon');
                }, 5500);
                
                 $('.tester1').click(function(e){
                        $("#tester").click();
                        //console.log('TRUE');
                    });
                
                $('.diagnosa-btn-txt').hide(222);
                
                $.get('<?=site_url("Apps/init_grid/"); ?>', function(data){
                    //alert("response : "+data);
                    
                        var data_gejala_length = $('div.product').length;
                        var data_grid = jQuery.parseJSON(data);
                        var flag=true;

                        for(var data_count = 0; data_count <= data_gejala_length; data_count++){
                            $('#gejala_'+data_count).hide(250);
                            $.each(data_grid,function(j,i){
                                if(data_count == i){
                                    $('#gejala_'+data_count).removeClass('product-disable').show(850);

                                    return false; 
                                }
                            });

                        }
                    });
                
                
                /*
                for(var z = 0;z<){
                    $('#gejala_'+data_count).removeClass('product-disable').show(550);
                }
                */
                
            
                 $("#tester").click(function(e) {
                        e.preventDefault();
                        $(".action--compare").click();

                        //get div count
                        length_selected = $(".product-icon").length;

                        //select div by count -> eq <- number of dat
                       //var data_compare =  $(".product-icon:eq(1)");

                      // console.log(length_selected);

                       return length_selected;
                    });



                    $('#post_data').click(function(e){
                        //console.log(length_selected );
                        for(var i=0;i< length_selected;i++){
                            data_send[i]=parseInt($(".product-icon:eq("+i+")").attr('data-idx'))+1;
                            //console.log('data 2 send->'+data_send[i]);
                            var check_get = i+1;
                        }
                        console.log('check get ->'+check_get);
                        
                        var dataSend_get =new Array('q1='+data_send[0],
                                                   'q2='+data_send[1],
                                                   'q3='+data_send[2],
                                                   'q4='+data_send[3],
                                                   'q5='+data_send[4]
                                                  );

                        //console.log('[data_send 1,2,3,4,5]'+data_send[0]+data_send[1]+data_send[2]+data_send[3]+data_send[4]);
                    
                        var data_result = dataSend_get.join('&');
                        
                        
                        var url_result = '<?=site_url("Apps/get_diagnosa_result/"); ?>'+'/'+check_get;
                        //$data_result = j
                        
                        $.post(url_result,data_result,function(data){
                            var data_diagnosis = jQuery.parseJSON(data);
                            $.each(data_diagnosis, function (i,d) {
                                $(".kode-diagnosa").empty();
                                $(".hasil-diagnosa").empty();
                                $(".nama-penyakit").empty();
                                $(".desc-diagnosa").empty();
                                $(".Awal-diagnosa").empty();
                                $(".Lanjut-diagnosa").empty();
                                $(".T-diagnosa").empty();
                                $(".nama-penyakit").append(d['diagnosis']);
                                $(".desc-diagnosa").append(d['deskripsi']);
                                $(".Awal-diagnosa").append(d['tindak_awal']);
                                $(".Lanjut-diagnosa").append(d['tindak_lanjut']);
                                $(".T-diagnosa").append(d['ket_tambahan']);
                                $(".kode-diagnosa").append(d['id_diagnosis']);
                            });

                        });
                        $("#diagnosaModal").modal();
                    });

                $('.data-test').hide();
                
                
                
                
            });
            
            


            function toggle_result($id){
                //console.log("id data click="+$id);

                toggle_result_id=$id;
                
                length_selected = $(".product-icon").length;
                
                var x = 1;

                        //select div by count -> eq <- number of dat
                       //var data_compare =  $(".product-icon:eq(1)");

                //console.log('length data -> '+length_selected);
                
                for(var i=0;i<= length_selected;i++){
                    data_send[i]=$(".product-icon:eq("+i+")").attr('data-idx');
                     
                    console.log('data send->'+data_send[i]);
                }
                
                return toggle_result;
            }
            
            
            
            
            /*
             $("#tester").click(function(e) {
                    e.preventDefault();
                    $(".action--compare").click();
                 
                    var data_test = $(".product-icon:eq(2)").length();
                 
                    console.log(data_test);
                });
            
            $('.data-test').hide();
            
            */
        
        </script>
        <script>
        function start_diagnose_apps(){
            $('#modaltutorial').fadeOut(1000);
            $('body').css("overflow-y","scroll");

        }

          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1692830527617734',
              xfbml      : true,
              version    : 'v2.4'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>
          // This is called with the results from from FB.getLoginStatus().
          function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
              // Logged into your app and Facebook.
              testAPI();
              start_diagnose_apps();
              //console.log(response.authResponse['userID']);
              $('.btn_modalLog').show();
              $(".facebook-login-modal").hide();

            } else if (response.status === 'not_authorized') {
              // The person is logged into Facebook, but not your app.
              document.getElementById('status').innerHTML = 'Please log ' +
                'into this app.';

                $('.btn_modalLog').hide();
            } else {
              // The person is not logged into Facebook, so we're not sure if
              // they are logged into this app or not.
              document.getElementById('status').innerHTML = 'Please log ' +
                'into Facebook.';
                $('.btn_modalLog').hide();
            }

            if(response.status ==='unknown'){
                $('.btn_modalLog').hide();
            }
          }

          function loadTable()
            {
                
                FB.getLoginStatus(function(response) {
                    var user_id = response.authResponse['userID'];
                      FB.api('/me', function(response) {

                      var facebook_name = response.name;
                      console.log(user_id);


                    var url = '<?=site_url("apps/get_log_byid"); ?>'+'/'+user_id;
                        $('#log_table tbody').fadeOut(200).empty();
                    
                        $.get(url, function(data){
                            var data_log = jQuery.parseJSON(data);
                            $.each(data_log, function (i,d) {

                                var row='<tr>';
                                row+='<tr>';
                               
                               $.each(d, function(j, e) {
                                   if(d['facebook_id']== e || d['nama']== e){
  
                                   }else{
                                        row+='<td style=""><b>'+e+'</b></td>';
                                       }

                                    
                               });
 
                               row+='</tr>';
                               $('#log_table tbody').fadeIn(1000).append(row);

                            })
                        }); 

                    });
                });
            }; 



          function saveLog(){

             $('.simpan-data-diagnosa').prop('disabled', true);

            var id_diagnosis =  $('.kode-diagnosa').text();
            var diagnosis =  $('.nama-penyakit').text();
            var deskripsi = $('.desc-diagnosa').text();
            var tindak_awal =  $('.Awal-diagnosa').text();
            var tindak_lanjut =  $('.Lanjut-diagnosa').text();
            var ket_tambahan =  $('.T-diagnosa').text();
            //var url_getDate = '<?=site_url("apps/savelog"); ?>'+'?diagnosis='+query+'&endDate='+String(endDate);
            
            FB.getLoginStatus(function(response) {
                var user_id = response.authResponse['userID'];
                  FB.api('/me', function(response) {

                  var facebook_name = response.name;
                  console.log(user_id);
                  console.log(facebook_name);


                  var url_log = '<?=site_url("apps/save_log"); ?>'+'?id_diagnosis='+id_diagnosis+'&user_id='+user_id+'&facebook_name='+facebook_name+'&diagnosis='+diagnosis+'&deskripsi='+deskripsi+'&tindak_awal='+tindak_awal+'&tindak_lanjut='+tindak_lanjut+'&ket_tambahan='+ket_tambahan;

                    $.post(url_log, function(rdata) {
                        var json = jQuery.parseJSON(rdata);
                        if (json.isSuccessful) {

                            $('.simpan-data-diagnosa').text('Data Berhasil Disimpan');

                            $('.SuccessMessage').html(json.message);
                            $('.SuccessMessage').show();
                            $('.SuccessMessage').fadeOut(10000);

                            $('.simpan-data-diagnosa').fadeOut(2000).prop('disabled', false).fadeIn(2000).text('Simpan Data Diagnosa');
                        }

                    });

                });
            });
            
            
          }



          // This function is called when someone finishes with the Login
          // Button.  See the onlogin handler attached to it in the sample
          // code below.
          function ShowButtonSave(){
            FB.getLoginStatus(function(response) {
              console.log(response);
              if(response.status==='connected'){
                 start_diagnose_apps();
                $('.btn_modalLog').show();
                $('.simpan_log').empty();
                $('.simpan_log').append("<button class='btn btn-success simpan-data-diagnosa' style='float:right'>Simpan Data Diagnosa</button>");
                $('.simpan-data-diagnosa').attr("onclick","return saveLog()");
                $("#facebook-save-log").hide();
            }
            });
          }






          function checkLoginState() {
            FB.getLoginStatus(function(response) {
              console.log(response);
              if(response.status==='connected'){
                 start_diagnose_apps();
                $('.btn_modalLog').show();
                $('.simpan_log').empty();
                $('.simpan_log').append("<button class='btn btn-success simpan-data-diagnosa' style='float:right'>Simpan Data Diagnosa</button>");
                $('.simpan-data-diagnosa').attr("onclick","return saveLog()");
                $(".facebook-login-modal").hide();
            }else{
                $('.btn_modalLog').hide();
                $(".facebook-login-modal").show();
            }
            });
          }


          window.fbAsyncInit = function() {
          FB.init({
            appId      : '1692830527617734',
            cookie     : true,  // enable cookies to allow the server to access 
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.2' // use version 2.2
          });

          // Now that we've initialized the JavaScript SDK, we call 
          // FB.getLoginStatus().  This function gets the state of the
          // person visiting this page and can return one of three states to
          // the callback you provide.  They can be:
          //
          // 1. Logged into your app ('connected')
          // 2. Logged into Facebook, but not your app ('not_authorized')
          // 3. Not logged into Facebook and can't tell if they are logged into
          //    your app or not.
          //
          // These three cases are handled in the callback function.

          FB.getLoginStatus(function(response) {
            statusChangeCallback(response);

            if(response.status==='connected'){
                 start_diagnose_apps();
                $('.btn_modalLog').show();
                $('.simpan_log').empty();
                $('.simpan_log').append("<button class='btn btn-success simpan-data-diagnosa' style='float:right'>Simpan Data Diagnosa</button>");
                $('.simpan-data-diagnosa').attr("onclick","return saveLog()");    
            }else{
                $('.simpan_log').empty();
                $('.facebook-login-modal').show();
                
            }
          });

          };

          // Load the SDK asynchronously
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));

          // Here we run a very simple test of the Graph API after login is
          // successful.  See statusChangeCallback() for when this call is made.
          function testAPI() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me', function(response) {
              console.log('Successful login for: ' + response.name);
              document.getElementById('status').innerHTML =
                'Thanks for logging in, ' + response.name + '!';


            });
          }

          
        </script>
	</body>
</html>

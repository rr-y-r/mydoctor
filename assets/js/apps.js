var toggle_result_id;
            var length_selected;
            var data_send = [];
            var check_counter = 0;
            
            (function() {
                var data_trigger = [];
                var x_sum = 0;
                
                function addTriggerDiag(data){
                     //get data where_data;
                    
                    data_trigger[x_sum]=data;
                    console.log('----');
                    for(var i=0;i< data_trigger.length;i++){
                        console.log('data  +' +data_trigger[i]);
                        }
                    
                    for(var i=0;i< 5;i++){
                        if(data_trigger[i]==null){
                            data_trigger[i]=0;
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
                }
                
                function initGridData(){
                    $.get('<?=site_url("Admin/init_grid/"); ?>', function(data){
                    //alert("response : "+data);
                    
                        var data_gejala_length = $('div.product').length;
                        var data_grid = jQuery.parseJSON(data);
                        var flag=true;

                        for(var data_count = 0; data_count <= data_gejala_length; data_count++){

                            $.each(data_grid,function(j,i){
                                if(data_count == i){
                                    $('#gejala_'+data_count).removeClass('product-disable');

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
                    
                    var trydata = dataTrigger_get.join('&');
                    
                    var url = '<?=site_url("Admin/test_print/"); ?>'+'/'+check_counter;
                    if(check_counter != 0){
                        
                    
                        $.post(url,trydata,function(data){
                            alert("response : "+data);
                            var data_gejala_length = $('div.product').length;
                            var data_grid = jQuery.parseJSON(data);
                            var flag=true;

                            //enable all grid then disable it by post

                            for(var data_count = 0; data_count <= data_gejala_length; data_count++){
                                $('#gejala_'+data_count).addClass('product-disable');
                            }

                            for(var data_count = 0; data_count <= data_gejala_length; data_count++){
                                $.each(data_grid,function(j,i){
                                    //code here later
                                    var trigger_count = data_grid[check_counter];
                                    //console.log(data_grid[check_counter]);
                                    $.each(trigger_count,function (j,i){
                                       if(data_count == i){
                                        $('#gejala_'+data_count).removeClass('product-disable');

                                        }
                                    });
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
                    //console.log(data);
                    addTriggerDiag(data);
                };

                CompareBasket.prototype._createItemPreview = function(item) {
                    var self = this;

                    var preview = document.createElement('div');
                    preview.className = 'product-icon';
                    preview.setAttribute('data-idx', items.indexOf(item));

                    var removeCtrl = document.createElement('button');
                    removeCtrl.className = 'action action--remove';
                    removeCtrl.innerHTML = '<i class="fa fa-remove"></i><span class="action__text action__text--invisible">Remove product</span>';
                    removeCtrl.addEventListener('click', function() {
                        self.remove(item);
                    });

                    var productImageEl = item.querySelector('img.product__image').cloneNode(true);

                    preview.appendChild(productImageEl);
                    preview.appendChild(removeCtrl);

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
            
            
            
            
            /*
             $("#tester").click(function(e) {
                    e.preventDefault();
                    $(".action--compare").click();
                 
                    var data_test = $(".product-icon:eq(2)").length();
                 
                    console.log(data_test);
                });
            
            $('.data-test').hide();
            
            */
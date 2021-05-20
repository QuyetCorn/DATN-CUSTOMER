@extends('user.master')
@section('content')
    

<section class="bread-crumb clearfix">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">  
            <div class="col-xs-12 a-left">
                <ul class="breadcrumb">					
                    <li class="home">
                        <a itemprop="url" href="trangchu" ><span >Trang chủ</span></a>						
                        <span class="mr_lr"> <i class="fa fa-angle-right"></i> </span>
                    </li>
                    
                    <li><strong><span >người dùng</span></strong><li>
                    
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product margin-top-40" itemscope itemtype="http://schema.org/Product">	
    <meta itemprop="url" content="//zmarket.mysapo.net/balo-mikkor-irvin-charcoal-orange">
    <meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/286/794/products/1-3.jpg?v=1517327927920">
    <div class="container bg_white">

    <!-- ADD DIV -->


                                
         
            <div id="main_product" class="details-product col-lg-9 col-md-9 col-sm-12 col-xs-12">	
                
            
                <div class="details">
                    <div class="rows">
                        <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col_large_default large-image"  >
                                
                                        <img style=" border: 1px #d4d4d4 solid; padding: 10px;border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;" class="img-responsive col-sm-8" alt="Balo Mikkor Irvin Charcoal/Orange" src="assets/images/khanh.jpg" data-zoom-image="https://bizweb.dktcdn.net/100/286/794/products/1-3.jpg?v=1517327927920"/>
                                    
                                </div>
                               
                                
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-pro">
                            <div class="title_pr">
                                <h1 class="title-product" itemprop="name">Tên Người Dùng</h1>
                                
                                <div class="reviews_details_product">
                                    <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="9724997"></div>
                                </div>
                                
                            </div>
                            

    <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">


                                <div class="taxable">
                                    <span class="valibled">Email: </span>
                                    
                                        <span>
                                            
                                            123@admin
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">SDT: </span>
                                    
                                        <span>
                                            
                                            123@admin
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">Địa Chỉ: </span>
                                    
                                        <span>
                                            
                                            123@admin
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">Giới tính: </span>
                                    
                                        <span>
                                            
                                            123@admin
                                            
                                        </span>
                                
                                </div>
    </div>

                            <div class="form-product col-sm-12 form-border margin-bottom-10">
                               
                                    <div class="box-variant clearfix ">
                                        
                                        <input type="hidden" name="variantId" value="15530094" />
                                        
                                    </div>
                                    <div class="form-group form_button_details ">                           
                                        <button type="submit" class="btn btn-lg button_cart_buy_enable add_to_cart " id="btn-add">
                                            <i class="fa fa-shopping-basket hidden"></i>&nbsp;&nbsp;<span>Cập nhật Thông Tin</span>
                                        </button>									
                                        <a class="btn btn-lg button_cart_buy_enable add_to_cart " href=".btn-submit"> Đổi Mật Khẩu </a>
                                        

                                    </div>
                                    
                        
                            </div>
                            
                                                        
                        </div>
                    </div>
                </div>
                <!-- Tab -->

    </div>

                                    </div>
                                </div>	
                                
                            </div>
                        </div>
                        

                    </div>
                </div>
                






                <!-- Endtab -->
                </div>
            </div>
        </div>	
        
 </section>
	<!-- for register popup -->
	
    <div class="modal fade" id="formModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">Create Todo</h4>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter title" value="">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Enter Description" value="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                        </button>
                        <input type="hidden" id="todo_id" name="todo_id" value="0">
                    </div>
                </div>
            </div>
        </div>
	<!-- //for register popup -->
    
<script type="text/javascript">
    $(document).ready(function() {
                $(".btn-submit").click(function(e){
                    e.preventDefault();

                    var _token = $("input[name='_token']").val();
                    var email = $("#email").val();
                    var pswd = $("#pwd").val();
                    var address = $("#address").val();

                    $.ajax({
                        url: "{{ route('ajax.request.store') }}",
                        type:'POST',
                        data: {_token:_token, email:email, pswd:pswd,address:address},
                        success: function(data) {
                        printMsg(data);
                        }
                    });
                }); 

                function printMsg (msg) {
                if($.isEmptyObject(msg.error)){
                    console.log(msg.success);
                    $('.alert-block').css('display','block').append('<strong>'+msg.success+'</strong>');
                }else{
                    $.each( msg.error, function( key, value ) {
                    $('.'+key+'_err').text(value);
                    });
                }
                }
            });
   
</script>






    
<link href="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/bpr-products-module.css?1618737291739" rel="stylesheet" type="text/css" />
<div class="sapo-product-reviews-module"></div>
    


@endsection	


    <script type='text/javascript'>
    
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css");
    </script>
</body>
</html>
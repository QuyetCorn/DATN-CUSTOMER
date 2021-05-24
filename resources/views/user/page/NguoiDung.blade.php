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
                                <h1 class="title-product" itemprop="name">{{$user->ho_ten}}</h1>
                                
                                <div class="reviews_details_product">
                                    <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="9724997"></div>
                                </div>
                                
                            </div>
                            

    <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">


                                <div class="taxable">
                                    <span class="valibled">Email: </span>
                                    
                                        <span>
                                            
                                        {{$user->email}}
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">SDT: </span>
                                    
                                        <span>
                                            
                                        {{$user->sdt}}
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">Địa Chỉ: </span>
                                    
                                        <span>
                                            
                                        {{$user->dia_chi}}
                                            
                                        </span>
                                
                                </div>
                                <div class="taxable">
                                    <span class="valibled">Giới tính: </span>
                                    
                                        <span>
                                            
                                        {{$user->gioi_tinh}}
                                            
                                        </span>
                                
                                </div>
    </div>

                            <div class="form-product col-sm-12 form-border margin-bottom-10">
                               
                                    <div class="box-variant clearfix ">
                                        
                                        <input type="hidden" name="variantId" value="15530094" />
                                        
                                    </div>
                                    <div class="form-group form_button_details ">                           
                                        <button type="submit" class="btn btn-lg button_cart_buy_enable add_to_cart" onclick= "edit_khachhang({{ $user->id }})">
                                            <i class="fa fa-shopping-basket hidden"></i>&nbsp;&nbsp;<span>Cập nhật Thông Tin</span>
                                        </button>									
                                        <button type="button" class="btn btn-lg button_cart_buy_enable add_to_cart " data-toggle="modal" data-target="#Doi-Password">
                                        Đổi Mật Khẩu
                                        </button>

                                      
                                    
                        
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
      <!-- Modal password -->
        <div class="modal fade" id="Doi-Password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="password">Đổi Mật Khẩu</h5>
                    
                </div>
                <div class="modal-body">
                <form id="form-password" >
				{{ csrf_field() }}
						<div class="form-sub-w3ls">
							<input placeholder="Mật Khẩu"  type="password" required="" name="txtPassword" id="Password">
							
						</div>
                        <div class="form-sub-w3ls">
							<input placeholder="Mật Khẩu Mới"  type="password" required="" id="Newpassword">
						
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập Lại Mật Khẩu"  type="password" required="" id="Repassword">
							
						</div>
					</div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
				</form>
                </div>
               
                </div>
            </div>
            </div>

        </div>
         <!-- Modal update -->
         <div class="modal fade" id="update-khachhang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="update">Đổi thông tin</h5>
                    
                </div>
                <div class="modal-body">
                <form id="form-update" >
				{{ csrf_field() }}
                        <input type="hidden" id="id" name="id">
						<div class="form-sub-w3ls">
							<input placeholder="họ tên" type="text" required="" name="name" id="name">
							
						</div>
                        <div class="form-sub-w3ls">
							<input placeholder="Số Điện Thoại"type="text" required="" name="phone" id="phone">
						
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Địa Chỉ"type="text" required="" name="lat" id="lat">
							
						</div>
                        <div class="form-sub-w3ls">
							<input placeholder="Giới Tính"  type="text" required="" name="type" id="type">
							
						</div>
					</div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
				</form>
                </div>
               
                </div>
            </div>
            </div>

        </div>
	<!-- //for register popup -->



    
<link href="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/bpr-products-module.css?1618737291739" rel="stylesheet" type="text/css" />
<div class="sapo-product-reviews-module"></div>



<script type="text/javascript">
           
        $("#form-password").submit(function(e){
            e.preventDefault();
            var pswd = $("#Password").val();
            var newpswd = $("#Newpassword").val();
            var repswd = $("#Repassword").val();
            $.ajax({
                url: "{{ route('doipassword',$user->id)}}",
                type:'POST',
                data: {
                    Password :pswd,
                    Newpassword :newpswd,
                    Repassword :repswd
                },
                success: function(response) {
                  $("#form-password").reset();
                  $("#Doi-Password").modal("hide");
                },
                orror: function(response) {
                  $("#Doi-Password").modal("hide");
                },
            });
        });
        
	</script>    

<script type="text/javascript">
           
        function edit_khachhang(id)
        {
            $.get('/edits_khachhang/'+id, function(users){
                $('#id').val(users.id);
                $('#name').val(users.ho_ten);
                $('#phone').val(users.sdt);
                $('#lat').val(users.dia_chi);
                $('#type').val(users.gioi_tinh);
                $("#update-khachhang").modal('toggle');
            })
            
        }
        $("#form-update").submit(function(e){
            e.preventDefault();
            var id= $('#id').val();
            var name= $('#name').val();
             var phone=  $('#phone').val();
             var lat = $('#lat').val();
            var type = $('#type').val();
            $.ajax({
                url: "{{ route('update_nguoidung')}}",
                type:'PUT',
                data: {
                    id:id,
                    name:name,
                    phone:phone,
                    lat:lat,
                    types:type,
                },
                success: function(response) {
                  $("#form-update").reset();
                  $("#form-update").modal("hide");
                },
            });
        });
        
	</script>    

@endsection	

    <script type='text/javascript'>
    
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
        function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css");
    </script>
</body>
</html>
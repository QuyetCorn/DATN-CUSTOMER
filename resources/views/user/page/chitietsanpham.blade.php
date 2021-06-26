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
                        
                        
                        <li>
                            <a itemprop="url" href="{{route('loai_sp',$loai_sp->id)}}"><span >{{$loai_sp->ten_loai}}</span></a>					
                            <span class="mr_lr"> <i class="fa fa-angle-right"></i> </span>
                        </li>
                        
                        <li><strong><span >{{$chitietsanpham->ten_sp}}</span></strong><li>
                        
                    </ul>
                </div>
            </div>
        </div>
</section>

<section class="product margin-top-40" itemscope itemtype="http://schema.org/Product">	
    <meta itemprop="url" content="//zmarket.mysapo.net/balo-mikkor-irvin-charcoal-orange">
    <meta itemprop="image" content="//bizweb.dktcdn.net/thumb/grande/100/286/794/products/1-3.jpg?v=1517327927920">
    <div class="container bg_white">
        <div class="row row_product">
            <div id="sidebar_product" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_product_details">
                <div class="wol_product">
                    <div class="dear_title">
                        <h2 class="title_head_ border_content">
                            <a href="frontpage" title="Sản phẩm bán chạy">
                                Sản phẩm SALE</a>
                        </h2>
                    </div>
                    <div class="clearfix"></div>
                        <div class="product_col_dets row">
                            <div class="wrap_owl_topsale col-lg-12 col-md-12 col-xs-12">
                                <div  class="owl_col_details owl-carousel owl-theme " data-nav="true" data-lg-items="1" data-md-items="1" data-height="false" data-xs-items="1" data-sm-items="1" data-margin="15">

                                    <div class="item">
                                    @foreach($sanphamsale as $sps)
                                        <div class="hot_sale_product">
                                            <div class="item-img-horizontal">
                                                
                                                <a href="{{route('chitietsanpham',$sps->id)}}" class="product-image" title="">
                                                    <img src="assets/images/{{$sps->hinh_anh}}" alt="{{$sps->ten_sp}}">
                                                </a>
                                                
                                            </div>
                                            <div class="item-info-horizontal">
                                                <h3 class="item-name text2line">
                                                    <a href="{{route('chitietsanpham',$sps->id)}}" title="{{$sps->ten_sp}}">
                                                        {{$sps->ten_sp}}
                                                    </a>
                                                </h3>
                                                
                                                
                                                <div class="price-box clearfix">			
                                                    
                                                    <span class="price product-price-old">
                                                        {{number_format($sps->gia)}}đ			
                                                    </span>		
                                                        
                                                    <span class="price product-price">{{number_format($sps->gia*((100-$sps->giam_gia)/100))}}đ</span>
                                                </div>		
                                                
                                                
                                            </div>
                                        </div>
                                    @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div id="main_product" class="details-product col-lg-9 col-md-9 col-sm-12 col-xs-12">	
                <div class="details">
                    <div class="rows">
                        <div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">

                            <div class="row">
                                <div class="col_large_default large-image">
                                    @if($chitietsanpham->phan_tram_giam>0)
                                        <span class="sale_count details__"><span class="bf_ sale___">
                                        - {{$chitietsanpham->phan_tram_giam}}%
                                            </span></span>
                                    @endif


                                    <a href="assets/images/{{$chitietsanpham->hinh_anh}}" class="large_image_url checkurl"  data-rel="prettyPhoto[product-gallery]" >
                                        
                                        <img id="img_01" class="img-responsive" alt="{{$chitietsanpham->ten_sp}}" src="assets/images/{{$chitietsanpham->hinh_anh}}" data-zoom-image="assets/images/{{$chitietsanpham->hinh_anh}}"/>
                                    </a>

                                    <div class="hidden">
                                        
                                        <div class="item">
                                            <a href="assets/images/{{$chitietsanpham->hinh_anh}}" data-image="assets/images/{{$chitietsanpham->hinh_anh}}" data-zoom-image="assets/images/{{$chitietsanpham->hinh_anh}}" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>	
                                        
                                        
                                        
                                        
                                        <!-- <div class="item">
                                            <a href="https://bizweb.dktcdn.net/100/286/794/products/2-3.jpg?v=1517327927920" data-image="https://bizweb.dktcdn.net/100/286/794/products/2-3.jpg?v=1517327927920" data-zoom-image="https://bizweb.dktcdn.net/100/286/794/products/2-3.jpg?v=1517327927920" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>	
                                        
                                        
                                        
                                        
                                        <div class="item">
                                            <a href="https://bizweb.dktcdn.net/100/286/794/products/3-3.jpg?v=1517327927920" data-image="https://bizweb.dktcdn.net/100/286/794/products/3-3.jpg?v=1517327927920" data-zoom-image="https://bizweb.dktcdn.net/100/286/794/products/3-3.jpg?v=1517327927920" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>	
                                        
                                        
                                        
                                        
                                        <div class="item">
                                            <a href="https://bizweb.dktcdn.net/100/286/794/products/4-2.jpg?v=1517327927920" data-image="https://bizweb.dktcdn.net/100/286/794/products/4-2.jpg?v=1517327927920" data-zoom-image="https://bizweb.dktcdn.net/100/286/794/products/4-2.jpg?v=1517327927920" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>	
                                        
                                        
                                        
                                        
                                        <div class="item">
                                            <a href="https://bizweb.dktcdn.net/100/286/794/products/5.jpg?v=1517327927920" data-image="https://bizweb.dktcdn.net/100/286/794/products/5.jpg?v=1517327927920" data-zoom-image="https://bizweb.dktcdn.net/100/286/794/products/5.jpg?v=1517327927920" data-rel="prettyPhoto[product-gallery]">										
                                            </a>
                                        </div>	 -->
                                        
                                    </div>
                                </div>
                                
                                <div id="gallery_02" class="col-sm-12 col-xs-12 col-lg-5 col-md-5 owl_width no-padding owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl" data-loop="false" data-lg-item="3" data-md-items="3" data-sm-items="3" data-xs-items="3" data-margin="10">
                                    
                                    <div class="item">
                                        <a>
                                            <img data-img="assets/images/{{$chitietsanpham->hinh_anh}}" src="assets/images/{{$chitietsanpham->hinh_anh}}" alt="{{$chitietsanpham->ten_sp}}">
                                        </a>
                                    </div>
                                    
                                    <!-- <div class="item">
                                        <a href="#" data-image="https://bizweb.dktcdn.net/100/286/794/products/2-3.jpg?v=1517327927920" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/2-3.jpg?v=1517327927920">
                                            <img data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/2-3.jpg?v=1517327927920" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/2-3.jpg?v=1517327927920" alt="Balo Mikkor Irvin Charcoal/Orange">
                                        </a>
                                    </div>
                                    
                                    <div class="item">
                                        <a href="#" data-image="https://bizweb.dktcdn.net/100/286/794/products/3-3.jpg?v=1517327927920" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/3-3.jpg?v=1517327927920">
                                            <img data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/3-3.jpg?v=1517327927920" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/3-3.jpg?v=1517327927920" alt="Balo Mikkor Irvin Charcoal/Orange">
                                        </a>
                                    </div>
                                    
                                    <div class="item">
                                        <a href="#" data-image="https://bizweb.dktcdn.net/100/286/794/products/4-2.jpg?v=1517327927920" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/4-2.jpg?v=1517327927920">
                                            <img data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/4-2.jpg?v=1517327927920" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/4-2.jpg?v=1517327927920" alt="Balo Mikkor Irvin Charcoal/Orange">
                                        </a>
                                    </div>
                                    
                                    <div class="item">
                                        <a href="#" data-image="https://bizweb.dktcdn.net/100/286/794/products/5.jpg?v=1517327927920" data-zoom-image="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/5.jpg?v=1517327927920">
                                            <img data-img="//bizweb.dktcdn.net/thumb/1024x1024/100/286/794/products/5.jpg?v=1517327927920" src="//bizweb.dktcdn.net/thumb/small/100/286/794/products/5.jpg?v=1517327927920" alt="Balo Mikkor Irvin Charcoal/Orange">
                                        </a>
                                    </div> -->
                                    
                                </div> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-pro">
                            <div class="title_pr">
                                <h1 class="title-product" itemprop="name">{{$chitietsanpham->ten_sp}}</h1>
                                
                                <div class="reviews_details_product">
                                    <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="9724997">
                                    </div>
                                </div>
                                
                            </div>
                            

                            <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">


                                @if($chitietsanpham->giam_gia>0)
                                    <span class="special-price">
                                        <span class="price product-price">{{number_format($chitietsanpham->gia*((100-$chitietsanpham->giam_gia)/100))}}đ</span>
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>
                                    <span class="old-price">
                                        <span class="price" itemprop="priceSpecification">
                                            
                                        {{number_format($chitietsanpham->gia)}}đ
                                            
                                        </span>
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>
                                @else
                                    <span class="special-price">
                                        <span class="price product-price" itemprop="price">{{number_format($chitietsanpham->gia)}}đ</span>
                                        <meta itemprop="priceCurrency" content="VND">
                                    </span>
                                @endif



                                @if($chitietsanpham->tinh_trang==1)
                                    <div class="taxable">
                                        <span class="valibled">Tình trạng:</span>
                                        <span style="color:green;">
                                            <span style="font-size: 17px; font-weight: bold;">
                                                
                                                Còn hàng
                                                
                                            </span>
                                        </span>
                                    </div>
                                @else
                                    <div class="taxable">
                                        <span class="valibled">Tình trạng:</span>
                                        <span style="color:red;">
                                            <span>
                                                
                                                Hết hàng
                                                
                                            </span>
                                        </span>
                                    </div>
                                @endif

                            </div>


                            <div class="vender_">
                                <ul>
                                    <li>
                                        <span>Thương hiệu:</span> 
                                        <span style="font-size: 16px; font-weight: bold;  color:green;" >{{$chitietsanpham->thuong_hieu}}</span>
                                    </li>
                                    <li><span>Giảm giá 10% cho hoá đơn trên 500k</span></li>
                                    <li><span>Miễn phí giao hàng trong bán kính 5km</span></li>
                                    <li>
                                        <span>Bảo hành:</span> 
                                        <span class="bold" style="font-size: 16px; font-weight: bold;  color:green;">Trọn đời</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="form-product col-sm-12 form-border">
                                <form action="{{route('cart-add',$chitietsanpham->id)}}" method="GET">
                                    
                                    <div class="form-group form_button_details ">
                                        <!-- <header class="not_bg hidden">Số lượng:</header>
                                        <div class="custom input_number_product custom-btn-number form-control">									
                                            <button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</button>
                                                <input type="text" id="qtym" name="soluong" value="1"  onkeyup="valid(this,'numbers')" onkeypress='validate(event)' class="form-control prd_quantity">
                                                <input name="sanphamId_hidden" type="hidden" value="{{$chitietsanpham->id}}"/>
                                            <button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</button>
                                        </div> -->
                                                                            
                                        <button type="submit" class="btn btn-lg  btn-cart button_cart_buy_enable add_to_cart btn_buy" title="Cho vào giỏ hàng">
                                            <i class="fa fa-shopping-basket hidden" ></i>&nbsp;&nbsp;
                                            <span style="font-size: 16px; font-weight: bold;"  >THÊM VÀO GIỎ HÀNG</span>
                                        </button>									
                                    </div>
                                </form>
                            </div>
                            
                            
                            <!-- <div class="social-sharing margin-bottom-10">
                                <span class="ttt">Tags: </span>
                                <div class="share_add tags_name">
                                    
                                    <a href="/collections/all/balo">Balo</a>,						
                                    
                                    <a href="/collections/all/demnguoc-2018-5-31">demnguoc_2018/5/31</a>						
                                    
                                </div>
                            </div> -->
                            
                            
                            <!-- <div class="social-sharing ">
                                <span class="ttt">Chia sẻ: </span>
                                <div class="addthis_inline_share_toolbox share_add">
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4"></script>
                                </div>
                            </div> -->
                                                        
                        </div>
                    </div>
                </div>
                <!-- Tab -->
                <div class="tabss">
                    <div class="row margin-top-30 xs-margin-top-15 margin-bottom-40">
                        
                        <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">
                            <!-- Nav tabs -->
                            <div class="product-tab e-tabs">
                                <ul class="tabs tabs-title clearfix">	
                                    
                                    <li class="tab-link" data-tab="tab-1">
                                        <h3><span>Thông tin sản phẩm</span></h3>
                                    </li>																	 
                                    
                                    <li class="tab-link" data-tab="tab-3">
                                        <h3><span>Đánh giá(APP)</span></h3>
                                    </li>																	
                                    
                                </ul>																									

                                
                                <div id="tab-1" class="tab-content">
                                    <div class="rte">
                                        <p><strong>{{$chitietsanpham->ten_sp}}</strong><br />
                                            - Chất Liệu: &nbsp;{{$chitietsanpham->chat_lieu}}<br />
                                            - Số Ngăn: &nbsp;{{$chitietsanpham->so_ngan}}<br />
                                            - Màu: &nbsp;{{$chitietsanpham->mau_sac}}<br />
                                            - Khối Lượng: &nbsp;{{$chitietsanpham->khoi_luong}}<br />
                                            - Kích Thước (DàixRộngxCao): &nbsp;{{$chitietsanpham->kich_thuoc}}<br />
                                            - Tải Trọng: &nbsp;{{$chitietsanpham->tai_trong}}<br>
                                            - Ngăn laptop: &nbsp;{{$chitietsanpham->ngan}}</p>
                                        <p style="text-align: center;">&nbsp;</p>
                                        <p style="text-align: center;">&nbsp;</p>
                                        <p style="text-align: center;">
                                        <img alt="{{$chitietsanpham->ten_sp}}" data-thumb="original" original-height="800" original-width="800" src="assets/images/{{$chitietsanpham->hinh_anh}}" /></p>                                 
                                    </div>	
                                </div>	
                                
                                
                                <div id="tab-2" class="tab-content">
                                    <div class="rte">
                                        Các nội dung Hướng dẫn mua hàng viết ở đây	
                                    </div>
                                </div>	
                                
                                
                                <div id="tab-3" class="tab-content">
                                    <div class="rte">
                                        <div id="sapo-product-reviews" class="sapo-product-reviews" data-id="9724997">
                                            <div id="sapo-product-reviews-noitem" style="display: none;">
                                                <div class="content">
                                                    <p data-content-text="language.suggest_noitem"></p>
                                                    <div class="product-reviews-summary-actions">
                                                        <button type="button" class="btn-new-review" onclick="BPR.newReview(this); return false;" data-content-str="language.newreview"></button>
                                                    </div>
                                                    <div id="noitem-bpr-form_" data-id="formId" class="noitem-bpr-form" style="display:none;"><div class="sapo-product-reviews-form"></div></div>
                                                </div>
                                            </div>

                                    </div>

                                </div>
                            </div>	
                                
                        </div>
                    </div>
                        

                </div>
            </div>
                


                    <section class="section_product_loopp">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dear_title">
                                <h2 class="title_head_ border_content">
                                    <a href="san-pham-khuyen-mai" title="Sản phẩm liên quan">Sản phẩm tương tự</a>
                                </h2>
                            </div>

                            <section class="products-view products-view-grid collection_reponsive">        
                                @foreach($sanphamtuongtu as $sp)
                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 product-col">
                                        <div class="item saler_item">
                                                            
                                            <div class="product-box">															
                                                <div class="product-thumbnail">
                                                    @if($sp->phan_tram_giam>0)
                                                    <span class="sale_count">
                                                        <span class="bf_">- {{$sp->phan_tram_giam}}% </span>
                                                    </span>
                                                    @endif
                                                    <a href="{{route('chitietsanpham',$sp->id)}}" class="image_link display_flex" data-images="assets/images/{{$sp->hinh_anh}}"  title="{{$sp->ten_sp}}">
                                                        <img class="img-responsive lazyload" src="assets/images/{{$sp->hinh_anh}}" data-src="assets/images/{{$sp->hinh_anh}}" alt="{{$sp->ten_sp}}"/>
                                                    </a>

                                                    <div class="product-action-grid clearfix">
                                                        <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9746938" enctype="multipart/form-data">
                                                            <div>
                                                                <a title="xem nhanh" href="{{route('chitietsanpham',$sp->id)}}" data-handle="giay-converse-star-collar-break" class="button_wh_40 btn_view right-to quick-view"><i class="fa fa-search"></i>
                                                                    <span class="tooltips qv"><span>Xem nhanh</span></span>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="product-info">
                                
                                                    <div class="reviews-product-list grid_reviews">
                                                        <div class="bizweb-product-reviews-badge" data-id="9746938"></div>
                                                    </div>
                                
                                                    <h3 class="product-name"><a class="text2line" href="{{route('chitietsanpham',$sp->id)}}" title="{{$sp->ten_sp}}">{{$sp->ten_sp}}</a></h3>

                                                    @if($sp->giam_gia>0)
                                                    <div class="price-box clearfix">			
                                                        <span class="price product-price-old">
                                                        {{number_format($sp->gia)}}đ		
                                                        </span>		
                                                        <span class="price product-price">{{number_format($sp->gia*((100-$sp->giam_gia)/100))}}đ</span>
                                                    </div>
                                                    @else
                                                    <span class="price product-price">{{number_format($sp->gia)}}đ</span>
                                                    @endif

                                
                                
                                                    <div class="action__">
    
                                                        <form action="{{route('cart-add',$sp->id)}}" method="GET">
                                                            <div>
                                                                <input type="hidden"/>
                                                                <button class=" cart_button_style btn-cart left-to add_to_cart" title="Thêm vào giỏ hàng">
                                                                    <span>
                                                                        <span class="fa fa-shopping-basket"></span>
                                                                    </span>
                                                                    Giỏ hàng
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>			
                                        </div>  
                                    </div>
                                    @endforeach
                            </section>
                        </div>
                    </section>



            
                <!-- Endtab -->
            </div>
        </div>
    </div>	
</section>


<script>



    $(document).ready(function (e) {

        var sale_count = $('.details-product .product-detail-left .sale_count .bf_');
        if (sale_count == '-0%') {
            console.log('1');
            sale_count.text('-1%');
        } else if (sale_count == '-100%') {
            sale_count.text('-99%');
            console.log('2');
        }

        $("#gallery_02").owlCarousel({
            navigation : true,
            nav: true,
            navigationPage: false,
            navigationText : false,
            slideSpeed : 10,
            pagination : true,
            dots: false,
            margin: 4,
            autoHeight:true,
            autoplay:false,
            autoplayTimeout:false,
            autoplayHoverPause:true,
            loop: false,
            responsive: {
                0: {
                    items: 4
                },
                543: {
                    items: 4
                },
                768: {
                    items: 4
                },
                991: {
                    items: 4
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });

        $('#gallery_02 img, .swatch-element label').click(function(e){
            e.preventDefault();
            var ths = $(this).attr('data-img');
            $('.large-image .checkurl').attr('href', ths);

            $('.large-image .checkurl img').attr('src', ths);

            /*** xử lý active thumb -- ko variant ***/
            var thumbLargeimg = $('.details-product .large-image a').attr('href').split('?')[0];
            var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
            var url = [];

            $('#gallery_02 .owl-item .item').each(function(){
                var srcImg = '';
                $(this).find('a img').each(function(){
                    var current = $(this);
                    if(current.children().size() > 0) {return true;}
                    srcImg += $(this).attr('src');
                });
                url.push(srcImg);
                var srcimage = $(this).find('a img').attr('src').split('?')[0];
                if (srcimage == thumbLargeimg) {
                    $(this).find('a').addClass('active');
                } else {
                    $(this).find('a').removeClass('active');
                }
            });
        })

    });

</script>

<script>

setTimeout(function(){

    $('.sapo-product-reviews-badge').click(function(e) {

        $('.product-tab .tab-link').removeClass('current');

        $('.product-tab .tab-link:nth-child(3)').addClass('current');

        $('.product-tab .tab-content').removeClass('current');

        $('.product-tab #tab-3').addClass('current');

        $('html, body').animate({

            scrollTop: $('.product-tab').offset().top

        }, 500);

    })

}, 500)

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
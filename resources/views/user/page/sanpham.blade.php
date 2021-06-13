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
                    
                    
                    <li><strong ><span >Tất cả sản phẩm</span></strong></li>

                    @if(Session::get('message'))
                        <div class="alert alert-success" style='text-align: center;'>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                            
                </ul>
            </div>
        </div>
    </div>
</section>  

<div class="container margin-bottom-15 bg_white">
<div class="wrp_border_collection">
    <div class="row">
        <section class="main_container collection collection_container col-lg-9 col-md-9 col-sm-12 col-lg-push-3 col-md-push-3">
            <div class="page_title margin-top-5">
                <h1 class="title_page_h1"><span>Tất cả sản phẩm</span> </h1>
            </div>
            
            <div class="category-products products">
                    
                <div class="sortPagiBar">
<div class="srt">
    <div class="wr_sort col-sm-12">
        <div class="text-sm-right">
            <div class="sortPagiBar sortpage text-sm-right">
                <div id="sort-by">
                    <label class="left hidden-xs">Sắp xếp: </label>
                    <div class="border_sort">
                        <select onChange="sortby(this.value)">
                            <option class="valued" value="default">Mặc định</option>
                            <option value="price-asc">Giá tăng dần</option>
                            <option value="price-desc">Giá giảm dần</option>
                            <option value="alpha-asc">Từ A-Z</option>
                            <option value="alpha-desc">Từ Z-A</option>
                            <option value="created-asc">Mới đến cũ</option>
                            <option value="created-desc">Cũ đến mới</option>
                        </select>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>
</div>


<section class="products-view products-view-grid collection_reponsive">
    <div class="row">
        @foreach($sanpham as $sp)
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
                            <div class="price-box clearfix">
                                <span class="price product-price">{{number_format($sp->gia)}}đ</span>
                            </div>
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
<!--End 1 sp  -->

<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 product-col">
<!-- <div class="item saler_item"> -->
    <div class="product-box">															
        <div class="product-thumbnail">
        </div>
    </div>			
</div>
    
</section>		
                
</div>
</section>
        
        <aside class="dqdt-sidebar sidebar left left-content col-xs-12 col-lg-3 col-md-3 col-sm-12  col-lg-pull-9 col-md-pull-9">
            

<div class="aside-filter">
<div class="filter-container thismobile">	
    <div class="filter-container__selected-filter" style="display: none;">
        <div class="filter-container__selected-filter-header clearfix">
            <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
            <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="filter-container__selected-filter-list">
            <ul></ul>
        </div>
    </div>
</div>
<div class="aside-title-filter">
    <h2><span>Tìm theo</span></h2>
</div>



<aside class="aside-item filter-price">
    <div class="aside-title aside-title-fillter">
        <div class="title_module"><h2><span>Khoảng giá</span></h2></div>
    </div>
    <div class="aside-content filter-group">
        <ul>
             
            
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-duoi-100-000d">
                        <input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
                        <i class="fa"></i>
                        Giá dưới 100.000đ
                    </label>
                </span>
            </li>

                                                        
            
            
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-100-000d-200-000d">
                        <input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>100000 AND <200000)" data-operator="OR">
                        <i class="fa"></i>
                        100.000đ - 200.000đ							
                    </label>
                </span>
            </li>	
                                                        
            
            
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-200-000d-300-000d">
                        <input type="checkbox" id="filter-200-000d-300-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 300.000đ" value="(>200000 AND <300000)" data-operator="OR">
                        <i class="fa"></i>
                        200.000đ - 300.000đ							
                    </label>
                </span>
            </li>	
                                                        
            
            
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-300-000d-500-000d">
                        <input type="checkbox" id="filter-300-000d-500-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="300.000đ - 500.000đ" value="(>300000 AND <500000)" data-operator="OR">
                        <i class="fa"></i>
                        300.000đ - 500.000đ							
                    </label>
                </span>
            </li>	
                                                        
            
            
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-500-000d-1-000-000d">
                        <input type="checkbox" id="filter-500-000d-1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1.000.000đ" value="(>500000 AND <1000000)" data-operator="OR">
                        <i class="fa"></i>
                        500.000đ - 1.000.000đ							
                    </label>
                </span>
            </li>	
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-tren1-000-000d">
                        <input type="checkbox" id="filter-tren1-000-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 1.000.000đ" value="(>1000000)" data-operator="OR">
                        <i class="fa"></i>
                        Giá trên 1.000.000đ
                    </label>
                </span>
            </li>
                                                        
            
                                            
        </ul>
    </div>
</aside>

<aside class="aside-item filter-tag-style-1">
    <div class="aside-title aside-title-fillter">
        <div class="title_module"><h2><span>Màu sắc</span></h2></div>
    </div>
    <div class="aside-content filter-group">
        <ul>
             
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-vang">
                        <input type="checkbox" id="filter-vang" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Vàng" value="(Vàng)" data-operator="OR">
                        <i class="fa"></i>
                        Vàng
                    </label>
                </span>
            </li>	
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-tim">
                        <input type="checkbox" id="filter-tim" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Tím" value="(Tím)" data-operator="OR">
                        <i class="fa"></i>
                        Tím
                    </label>
                </span>
            </li>	
            



            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-do">
                        <input type="checkbox" id="filter-do" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Đỏ" value="(Đỏ)" data-operator="OR">
                        <i class="fa"></i>
                        Đỏ
                    </label>
                </span>
            </li>	
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-xanh">
                        <input type="checkbox" id="filter-xanh" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Xanh" value="(Xanh)" data-operator="OR">
                        <i class="fa"></i>
                        Xanh
                    </label>
                </span>
            </li>	
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-hong">
                        <input type="checkbox" id="filter-hong" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Hồng" value="(Hồng)" data-operator="OR">
                        <i class="fa"></i>
                        Hồng
                    </label>
                </span>
            </li>	
            
            
            
            <li class="filter-item filter-item--check-box filter-item--green">
                <span>
                    <label for="filter-cam">
                        <input type="checkbox" id="filter-cam" onchange="toggleFilter(this)" data-group="tag1" data-field="tags" data-text="Cam" value="(Cam)" data-operator="OR">
                        <i class="fa"></i>
                        Cam
                    </label>
                </span>
            </li>	
            

        </ul>
    </div>
</aside>



</div>
<script>
var selectedSortby;
var tt = 'Thứ tự';
var selectedViewData = "data";
var filter = new Bizweb.SearchFilter()

filter.addValue("collection", "collections", "1436287", "AND");

function toggleFilter(e) {
    _toggleFilter(e);
    renderFilterdItems();
    doSearch(1);
}
function _toggleFilterdqdt(e) {
    var $element = $(e);
    var group = 'Khoảng giá';
    var field = 'price_min';
    var operator = 'OR';	 
    var value = $element.attr("data-value");	
    filter.deleteValuedqdt(group, field, value, operator);
    filter.addValue(group, field, value, operator);
    renderFilterdItems();
    doSearch(1);
}

function _toggleFilter(e) {
    var $element = $(e);
    var group = $element.attr("data-group");
    var field = $element.attr("data-field");
    var text = $element.attr("data-text");
    var value = $element.attr("value");
    var operator = $element.attr("data-operator");
    var filterItemId = $element.attr("id");

    if (!$element.is(':checked')) {
        filter.deleteValue(group, field, value, operator);
    }
    else{
        filter.addValue(group, field, value, operator);
    }

    $(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
}

function renderFilterdItems() {
    var $container = $(".filter-container__selected-filter-list ul");
    $container.html("");

    $(".filter-container input[type=checkbox]").each(function(index) {
        if ($(this).is(':checked')) {
            var id = $(this).attr("id");
            var name = $(this).closest("label").text();

            addFilteredItem(name, id);
        }
    });

    if($(".filter-container input[type=checkbox]:checked").length > 0)
        $(".filter-container__selected-filter").show();
    else
        $(".filter-container__selected-filter").hide();
}
function addFilteredItem(name, id) {
    var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fa fa-close'></i> {1}</a></li>";
    filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
    filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
    filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
    var $container = $(".filter-container__selected-filter-list ul");
    $container.append(filteredItemTemplate);
}
function removeFilteredItem(id) {
    $(".filter-container #" + id).trigger("click");
}
function clearAllFiltered() {
    filter = new Bizweb.SearchFilter();
    
    filter.addValue("collection", "collections", "1436287", "AND");
    

    $(".filter-container__selected-filter-list ul").html("");
    $(".filter-container input[type=checkbox]").attr('checked', false);
    $(".filter-container__selected-filter").hide();

    doSearch(1);
}
function doSearch(page, options) {
    if(!options) options = {};
           //NProgress.start();
           $('.aside.aside-mini-products-list.filter').removeClass('active');
           awe_showPopup('.loading');
           filter.search({
               view: selectedViewData,
               page: page,
               sortby: selectedSortby,
               success: function (html) {
                   var $html = $(html);
                   // Muốn thay thẻ DIV nào khi filter thì viết như này
                   var $categoryProducts = $($html[0]); 
                   var xxx = $categoryProducts.find('.call-count');
                   $('.tt span').text(xxx.text());

                   $(".category-products").html($categoryProducts.html());
                   pushCurrentFilterState({sortby: selectedSortby, page: page});
                   awe_hidePopup('.loading');
                   initQuickView();
                   $('.add_to_cart').click(function(e){
                       e.preventDefault();
                       var $this = $(this);						   
                       var form = $this.parents('form');						   
                       $.ajax({
                           type: 'POST',
                           url: '/cart/add.js',
                           async: false,
                           data: form.serialize(),
                           dataType: 'json',
                           error: addToCartFail,
                           beforeSend: function() {  
                               if(window.theme_load == "icon"){
                                   awe_showLoading('.btn-addToCart');
                               } else{
                                   awe_showPopup('.loading');
                               }
                           },
                           success: addToCartSuccess,
                           cache: false
                       });
                   });
                   $('html, body').animate({
                       scrollTop: $('.category-products').offset().top
                   }, 0);

                   // setTimeout(function(){					 
                   // 	owl_thumb_image();
                   // 	hover_thumb_image();
                   // },200);
                   // count_product();
                   
                   resortby(selectedSortby);
                   callbackW();
                   $('.open-filters').removeClass('open');
                   $('.dqdt-sidebar').removeClass('open');
                   $('.tt span').text(xxx.text());
                   if (window.BPR !== undefined){
                   return window.BPR.initDomEls(), window.BPR.loadBadges();
               }


                }
            });		

        }

        function sortby(sort) {			 
            switch(sort) {
                case "price-asc":
                selectedSortby = "price_min:asc";					   
                break;
                case "price-desc":
                selectedSortby = "price_min:desc";
                break;
                case "alpha-asc":
                selectedSortby = "name:asc";
                break;
                case "alpha-desc":
                selectedSortby = "name:desc";
                break;
                case "created-desc":
                selectedSortby = "created_on:desc";
                break;
                case "created-asc":
                selectedSortby = "created_on:asc";
                break;
                default:
                selectedSortby = "";
                break;
            }

            doSearch(1);
        }

        function resortby(sort) {
            switch(sort) {				  
                case "price_min:asc":
                tt = "Giá tăng dần";
                break;
                case "price_min:desc":
                tt = "Giá giảm dần";
                break;
                case "name:asc":
                tt = "Từ A-Z";
                break;
                case "name:desc":
                tt = "Từ Z-A";
                break;
                case "created_on:desc":
                tt = "Cũ đến mới";
                break;
                case "created_on:asc":
                tt = "Mới đến cũ";
                break;
                default:
                tt = "Mặc định";
                break;
            }			   
            $('#sort-by > div > select .valued').html(tt);


        }


        function _selectSortby(sort) {			 
            resortby(sort);
            switch(sort) {
                case "price-asc":
                selectedSortby = "price_min:asc";
                break;
                case "price-desc":
                selectedSortby = "price_min:desc";
                break;
                case "alpha-asc":
                selectedSortby = "name:asc";
                break;
                case "alpha-desc":
                selectedSortby = "name:desc";
                break;
                case "created-desc":
                selectedSortby = "created_on:desc";
                break;
                case "created-asc":
                selectedSortby = "created_on:asc";
                break;
                default:
                selectedSortby = sort;
                break;
            }
        }

        function toggleCheckbox(id) {
            $(id).click();
        }

        function pushCurrentFilterState(options) {

            if(!options) options = {};
            var url = filter.buildSearchUrl(options);
            var queryString = url.slice(url.indexOf('?'));			  
            if(selectedViewData == 'data_list'){
                queryString = queryString + '&view=list';				 
            }
            else{
                queryString = queryString + '&view=grid';				   
            }

            pushState(queryString);
        }

        function pushState(url) {
            window.history.pushState({
                turbolinks: true,
                url: url
            }, null, url)
        }
        function switchView(view) {			  
            switch(view) {
                case "list":
                selectedViewData = "data_list";					   
                break;
                default:
                selectedViewData = "data";

                break;
            }			   
            var url = window.location.href;
           var page = getParameter(url, "page");
           if(page != '' && page != null){
               doSearch(page);
           }else{
               doSearch(1);
           }
        }

        function selectFilterByCurrentQuery() {
            var isFilter = false;
            var url = window.location.href;
            var queryString = decodeURI(window.location.search);
            var filters = queryString.match(/\(.*?\)/g);
            if(queryString) {
               isFilter = true;
           }
            if(filters && filters.length > 0) {
                filters.forEach(function(item) {
                    item = item.replace(/\(\(/g, "(");
                    var element = $(".filter-container input[value='" + item + "']");
                    element.attr("checked", "checked");
                    _toggleFilter(element);
                });

                isFilter = true;
            }

            var sortOrder = getParameter(url, "sortby");
            if(sortOrder) {
                _selectSortby(sortOrder);
            }

            if(isFilter) {
                doSearch(1);
            }
        }

        function getParameter(url, name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(url);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        $( document ).ready(function() {
            selectFilterByCurrentQuery();
            $('.filter-group .filter-group-title').click(function(e){
                $(this).parent().toggleClass('active');
            });

            $('.filter-mobile').click(function(e){
                $('.aside.aside-mini-products-list.filter').toggleClass('active');
            });

            $('#show-admin-bar').click(function(e){
                $('.aside.aside-mini-products-list.filter').toggleClass('active');
            });

            $('.filter-container__selected-filter-header-title').click(function(e){
                $('.aside.aside-mini-products-list.filter').toggleClass('active');
            });
        });
    </script>	

            <span class="border-das-sider"></span>
        </aside>
        <div id="open-filters" class="open-filters hidden-lg hidden-md">
            <span class="fter">
                <i class="fa fa-filter"></i>
                <span>Lọc</span>
            </span>
        </div>
        
    </div>
</div>
</div>
    
@endsection


    
</body>
</html>


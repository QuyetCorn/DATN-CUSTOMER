<div class="header_top_bar hidden-xs hidden-sm">
        <div class="container">
            <div class="rowx">
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs top_content_">
                    <ul class="contact_top">

                        <li class="li_contact"><span><span class="ti ti-headphone-alt"></span> Hotline: <a href="tel:0368003626">0368003626</a></span>

                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs top_content_">
                    <ul class="contact_top right">
                        <li class="li_contact"><span><span class="ti ti-location-pin"></span> <a href="/he-thong-cua-hang">Địa điểm các cửa hàng <i class="fa fa-angle-down"></i></a></span>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <div class="wrap_header_top">
        <div class="header_top">
            <div class="topbar_wrap">
                <div class="container">
                    <div class="">
                        <div class="head_content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="menu-bar hidden-md hidden-lg">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <div class="logo_top col-lg-3 col-md-3">
    
                                    <a href="trangchu" class="logo-wrapper ">
                                        <img src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/logo.png?1618737291739" alt="logo ">
                                    </a>
    
                                </div>
                                <!-- Support -->
                                <div class="search_header col-lg-6 col-md-6 col-sm-12 hidden-xs">
                                    <div class="header_searchs">
                                        <form action="{{route('search')}}" method="get" class="input-group search-bar" role="search">
                                            <input type="text" name="key" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text">
                                            <span class="input-group-btn">
                                                <button class="btn icon-fallback-text">
                                                    Tìm Kiếm
                                                </button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <!-- Endsupport -->
                                <div class="header_top_cart col-lg-3 col-md-3 col-sm-4">
                                    <div class="search-cart ">
                                        <div class="private login_register_ hidden-sm hidden-xs">
                                            <div class="wrap_log">
                                                <span class="ti_login ti_ ti-user"></span>
                                                <div class="log">
                                                    <ul>
                                                    @if(Auth::check())
                                                    <li><a class="text-color"href="{{route('nguoidung',Auth::user()->id)}}">{{Auth::user()->ten}}</a>
                                                    <li><a class="text-color" href="dangxuat" title="Đăng xuất">Đăng Xuất</a>
                                                    @else
                                                    <li><a class="text-color" href="dangnhapdangky" title="Đăng nhập">Đăng nhập hoặc Đăng ký</a>
                                                    @endif
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="top-cart-contain">
                                            <div class="mini-cart cart_hover text-xs-center" onclick="window.location.href='giohang'">
                                                <div class="heading-cart">
                                                    <span class="cart_num_x hidden-lg">
                                                        <span class="cartCount  count_item_pr"></span>
                                                    </span>
                                                    <span class="cart-icon"></span>
                                                    <a class="mr_top" href="giohang">
                                                        <span class="cart_num" id="cart-total">
                                                            <span class="color_">
                                                                @if(Session::has('cart'))
                                                                    <span class="cartCount  count_item_pr">{{Session('cart')->tongSL}} </span>
                                                                @endif
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="top-cart-content">
                                                    <ul id="cart-sidebar" class="mini-products-list count_li">
                                                        <li class="list-item">
                                                            <ul></ul>
                                                        </li>
                                                        <li class="action">
                                                            <ul>
                                                                <li class="li-fix-1">
                                                                    <div class="top-subtotal">
                                                                        Tổng tiền thanh toán:
                                                                        <span class="price"></span>
                                                                    </div>
                                                                </li>
                                                                <li class="li-fix-2" style="">
                                                                    <div class="actions">
                                                                        <a href="giohang" class="btn btn-primary">
                                                                            <span>Giỏ hàng</span>
                                                                        </a>
                                                                        <a href="thanhtoan" class="btn btn-checkout btn-gray">
                                                                            <span>Thanh toán</span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="top-cart-contain f-right hidden-lg hidden-md hidden">
                                            <div class="mini-cart text-xs-center">
                                                <div class="heading-cart">
                                                    <a href="/cart">
                                                        <span class="background_cart"><i class="fa fa-shopping-cart fa-flip-horizontal"></i></span>
                                                        <span class="cart_num"><span class="cartCount  count_item_pr"></span></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="header_search_ col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-lg hidden-md hidden-sm">
                            <div class="search_full">
                                <form class="form_search" action="/search" method="get" role="search">
                                    <input type="search" name="query" value="" placeholder="Tìm kiếm" class="input_search" autocomplete="off">
                                    <span class="input-group-btn">
                                        <button class="btn icon-fallback-text">
                                            <i class="icon-magnifier icons"></i>
                                        </button>
                                    </span>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site_menu_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs menu_vertical">
                    <div class="menu_ lineheight55">
                        <div class="title_menu">
                            <span class="nav_button"><span class="fa fa-align-left"></span></span>
                            <span class="title_">DANH MỤC SẢN PHẨM</span>
                            <i class="fa fa-caret-down"></i>
    
                        </div>
                        <div class="list_menu_header">
                            <ul class="ul_menu">
    
                                @foreach($loai_sp as $loaisp)
                                <li class="nav_item lv1">
                                    <a style="font-weight: bold;" href="{{route('loai_sp',$loaisp->id)}}" title="{{$loaisp->ten}}">{{$loaisp->ten}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 hidden-sm hidden-xs menu_main_">
                    <nav class="hidden-sm hidden-xs nav-main lineheight55 nav-widths">
                        <div class="menu_hed head_1">
                            <ul class="nav nav_1">
    
    
                                <li class=" nav-item nav-items active ">
                                    <a href="trangchu" class="nav-link">
                                        TRANG CHỦ </a>
                                </li>
    
    
    
                                <li class=" nav-item nav-items ">

                                    <a href="gioithieu" class="nav-link">

                                        GIỚI THIỆU </a>
                                </li>
    
    
    
                                <li class="menu_hover nav-item nav-items ">
                                    <a href="sanpham" class="nav-link ">
                                        SẢN PHẨM <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                                    <ul class="dropdown-menu border-box">
    
                                    @foreach($loai_sp as $loaisp)
                                        <li class="nav_item lv1">
                                        
                                            <a class="nav-link" href="{{route('loai_sp',$loaisp->id)}} title="{{$loaisp->ten}}">{{$loaisp->ten}}</a>
                                        
                                        </li>
                                    @endforeach
    
                                    </ul>
                                </li>
     
                                <li class=" nav-item nav-items ">

                                    <a href="{{route('sanphamsale')}}" class="nav-link">
                                            SẢN PHẨM SALE </a>
                                </li>

                                <li class=" nav-item nav-items ">

                                    <a href="{{route('sanphamnew')}}" class="nav-link">
                                            SẢN PHẨM MỚI </a>
                                </li>


                                <li class=" nav-item nav-items ">

                                    <a href="lienhe" class="nav-link">
                                            LIÊN HỆ </a>
                                </li>
    
    
                            </ul>
                        </div>
                    </nav>
                    <div class=" hidden-sm hidden-xs contact_phone_menu menu_index_phone">
                        <!-- <a href="/collections/all">Đặc Biệt</a> -->
                        <!-- <a href="sanpham">
                            Black Friday
    
                            <img src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/icon-hot.png?1618737291739" alt="Hot" />
    
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="hidden">SMarket - </h1>
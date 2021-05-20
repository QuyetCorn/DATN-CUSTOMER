<div id="popup-cart" class="modal fade" role="dialog">
        <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
                Bạn đã thêm <span class="cart-popup-name"></span> vào giỏ hàng
            </div>
            <div class="title-quantity-popup left_" onclick="window.location.href='/cart';">
                Giỏ hàng của bạn <span class="hidden count_item_pr"></span>
            </div>
            
            <div class="content-popup-cart">
                <div class="thead-popup">
                    <div style="width: 49.75%;" class="text-left">Sản phẩm</div>
                    <div style="width: 15%;" class="text-center">Giá</div>
                    <div style="width: 20%;" class="text-center">Số lượng</div>
                    <div style="width: 15%;" class="text-right">Tổng tiền</div>
                </div>
                <div class="tbody-popup scrollbar-dynamic">
                </div>
                <div class="tfoot-popup">
                    <div class="tfoot-popup-1 clearfix">
                        <div class="title-quantity-popup popup-total right_ bottom_">
                            <p class="tongtien">Tổng số thành tiền: <span class="total-price"></span></p>
                        </div>
                        <div class="pull-left popup-ship">
                            <p class="hidden">Miễn phí giao hàng toàn quốc</p>
                            <a class="hidden button btn-continue" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua hàng</span></span></a>
                        </div>
                        <div class="pull-right popup-total">
                            <p class="hidden">Phí vận chuyển: <span class="vanchuyen">Tính khi thanh toán</span></p>
                            <p class="tongtien hidden">Tổng tiền: <span class="total-price"></span></p>
                            <a class="button btn-proceed-checkout" title="Tiến hành đặt hàng" href="/checkout"><span>Tiến hành thanh toán</span></a>
                        </div>
                    </div>
                    <div class="tfoot-popup-2 clearfix">
                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-close"></i></a>
        </div>
    
    </div>
    <div id="myModal" class="modal fade" role="dialog">
</div>
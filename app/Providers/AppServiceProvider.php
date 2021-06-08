<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LoaiSanPham;
use App\Models\GioHang;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('user.layout.header',function($view){
            $loai_sp = LoaiSanPham::all();
            $view->with('loai_sp',$loai_sp);
        });

        view()->composer('user.page.giohang',function($view){
            if(Session('cart')) {
                $oldCart = Session::get('cart');
                $cart = new GioHang($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
}

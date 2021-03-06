<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\KhachHang;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    


//Gr User
Route::group(['namespace' => 'User'], function() {
    //Đăng nhập đăng ký đăng xuất
    Route::get('/dangnhapdangky', 'DangNhapDangKyController@index')->name('dangnhapdangky');
    Route::post('/dangnhap','DangNhapDangKyController@kiemTraDangNhap')->name('dangnhap');
    Route::get('/dangxuat','DangNhapDangKyController@dangxuat')->name('dangxuat');
    Route::post('/dangky','DangNhapDangKyController@Dangky')->name('dangky');
   
   //người dùng
    Route::get('/nguoidung/{id}','khachhangController@nguoidung')->name('nguoidung');
    Route::post('/doipassword/{id}','khachhangController@doipassword')->name('doipassword');
    Route::get('/edits_khachhang/{id}','khachhangController@getedit_khachhang');
    Route::put('/edit_khachhang','khachhangController@edit_khachhang')->name('update_nguoidung');
    Route::post('/edit_Image/{id}','khachhangController@edit_hinhanh')->name('update_image');
    
    //page
    Route::get('/', 'TrangChuController@index')->name('trangchu');
    Route::get('/trangchu', 'TrangChuController@index')->name('trangchu');

    Route::get('/sanpham', 'SanPhamController@index')->name('sanpham');
    Route::get('/sanpham/new', 'SanPhamController@new')->name('sanphamnew');
    Route::get('/sanpham/sale', 'SanPhamController@sale')->name('sanphamsale');
    
    Route::get('/chitietsanpham/{id}', 'CTSPController@index')->name('chitietsanpham');

    Route::get('/gioithieu', 'GioiThieuController@index')->name('gioithieu');

    Route::get('/lienhe', 'LienHeController@index')->name('lienhe');

    Route::get('/loai_sp/{type}', 'LoaiSPController@index')->name('loai_sp');


    Route::get('/giohang', 'GioHangController@index')->name('giohang');
    Route::get('/cart-add/{id}','GioHangController@cartAdd')->name('cart-add');
    Route::get('/cart-del/{id}','GioHangController@cartDel')->name('cart-del');
    Route::get('/update-cart-qty/{id}','GioHangController@updateCartQty')->name('update-cart-qty');
    
    Route::get('/dathang', 'DatHangController@index')->name('dathang');
    Route::post('/dat-hang','DatHangController@datHang')->name('dat-hang');


    Route::get('/search', 'TrangChuController@search')->name('search');

    Route::get('/chinhsachthanhtoan', 'TrangChuController@chinhsachthanhtoan')->name('chinhsachthanhtoan');
    Route::get('/chinhsachdoitrabaohanh', 'TrangChuController@chinhsachdoitrabaohanh')->name('chinhsachdoitrabaohanh');

    Route::post('/vacancies/searchcat', 'SanPhamController@searchcat');

    Route::post('insert-rating','CTSPController@insert_rating')->name('insert_rating');


});



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


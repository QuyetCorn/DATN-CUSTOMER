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
Route::group(['middleware' => 'guest', 'namespace' => 'User'], function() {
    Route::get('/dangnhapdangky', 'DangNhapDangKyController@index')->name('dangnhapdangky');
    Route::post('/dangnhap','DangNhapDangKyController@kiemTraDangNhap')->name('dangnhap');
    Route::get('/dangxuat','DangNhapDangKyController@dangXuat')->name('dangxuat');
});

//Gr User
Route::group(['namespace' => 'User'], function() {
    Route::get('/trangchu', 'TrangChuController@index')->name('trangchu');
    Route::get('/sanpham', 'SanPhamController@index')->name('sanpham');
    Route::get('/tintuc', 'TinTucController@index')->name('tintuc');
    Route::get('/chitietsanpham', 'CTSPController@index')->name('chitietsanpham');
    Route::get('/chitiettintuc', 'TinTucController@chitiettintuc')->name('chitiettintuc');

    // Route::get('/dangnhapdangky', 'DangNhapDangKyController@index')->name('dangnhapdangky');
    // Route::post('dangnhap','DangNhapDangKyController@kiemTraDangNhap')->name('dangnhap');

    Route::get('/giohang', 'GioHangController@index')->name('giohang');
    Route::get('/thanhtoan', 'ThanhToanController@index')->name('thanhtoan');
    Route::get('/gioithieu', 'GioiThieuController@index')->name('gioithieu');
    Route::get('/lienhe', 'LienHeController@index')->name('lienhe');

    // Danh muc
    Route::get('/balo', 'DanhMucController@baloIndex')->name('balo');
    Route::get('/tuixach', 'DanhMucController@tuixachIndex')->name('balo');
    Route::get('/vali', 'DanhMucController@valiIndex')->name('vali');
    Route::get('/xemthem', 'DanhMucController@xemthemIndex')->name('xemthem');
    Route::get('/sanphamkhuyenmai', 'DanhMucController@sanphamkhuyenmaiIndex')->name('sanphamkhuyenmai');
    Route::get('/sanphammoi', 'DanhMucController@sanphammoiIndex')->name('sanphammoi');
    Route::get('/sanphamnoibat', 'DanhMucController@sanphamnoibatIndex')->name('sanphamnoibat');
});


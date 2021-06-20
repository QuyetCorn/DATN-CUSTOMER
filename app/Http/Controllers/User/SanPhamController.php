<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;

class SanPhamController extends Controller
{
    public function index() {
        $sanpham = ChiTietSanPham::All();
        return view('user.page.sanpham',compact('sanpham'));
    }
    public function new() {
        $sanpham = ChiTietSanPham::where('new',1)->get();
        return view('user.page.sanpham',compact('sanpham'));
    }

    public function sale() {
        $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->get();
        return view('user.page.sanpham',compact('sanpham'));
    }
}

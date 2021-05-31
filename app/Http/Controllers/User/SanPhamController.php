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
}

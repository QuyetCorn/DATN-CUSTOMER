<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;
use App\Models\LoaiSanPham;

class LoaiSPController extends Controller
{
    public function index($type) {
        $loaisp = LoaiSanPham::where('id',$type)->get();
        $sp_theoloai = ChiTietSanPham::where('loai_sp_id',$type)->get();
        return view('user.page.loai_sp',compact('sp_theoloai','loaisp'));
    }
}

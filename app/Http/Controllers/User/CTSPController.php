<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;
use App\Models\LoaiSanPham;

class CTSPController extends Controller
{
    public function index(Request $req,$type) {
        $chitietsanpham = ChiTietSanPham::where('id',$req->id)->first();
        $loai_sp = LoaiSanPham::where('id',$type)->first();
        $sanphamsale = ChiTietSanPham::where('giam_gia','<>',0)->paginate(6);
        $sanphamtuongtu = ChiTietSanPham::where('loai_sp_id',$chitietsanpham->loai_sp_id)->get();
        return view('user.page.chitietsanpham',compact('chitietsanpham','sanphamtuongtu','loai_sp','sanphamsale'));
    }
}

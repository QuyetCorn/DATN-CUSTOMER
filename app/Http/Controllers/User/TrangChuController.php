<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\SupSlide;
use App\Models\ChiTietSanPham;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
class TrangChuController extends Controller
{
    public function index() {
        $slide = Slide::all();
        $sup_slide = SupSlide::paginate(2);
        $sanpham = ChiTietSanPham::All();
        $sp_moi = ChiTietSanPham::where('new',1)->get();
        $sanphamsale = ChiTietSanPham::where('giam_gia','<>',0)->get();
        return view('user.page.trangchu',compact('slide','sup_slide','sanpham','sanphamsale','sp_moi'));
    }

    public function search(Request $req) {
        $sanpham = ChiTietSanPham::where('ten_sp','like','%'.$req->key.'%')
                                ->orWhere('gia',$req->key)
                                ->get();
        return view('user.page.search',compact('sanpham'));
    }
}

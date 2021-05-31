<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\SupSlide;
use App\Models\ChiTietSanPham;

class TrangChuController extends Controller
{
    public function index() {
        $slide = Slide::all();
        $sup_slide = SupSlide::paginate(2);
        $sanpham = ChiTietSanPham::All();
        // $sanphamsale = ChiTietSanPham::where();
        return view('user.page.trangchu',compact('slide'),compact('sup_slide','sanpham'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;
use App\Models\GioHang;
use Illuminate\Support\Facades\Session;



class GioHangController extends Controller
{
    public function cartAdd(Request $req, $id) {
        $sanpham = ChiTietSanPham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->add($sanpham, $id);
        $req->session()->put('cart',$cart);

        return redirect()->back()->with('message', 'Thêm vào giỏ hàng thành công !');
    }

    public function cartDel(Request $req, $id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back()->with('message', 'Xóa sản phẩm thành công !');
    }

    public function index(Request $req)
    {
        $chitietsanpham = ChiTietSanPham::where('id',$req->id)->first();
        return view('user.page.giohang');
    }

    public function updateCartQty(Request $req, $id) {
        $sanpham = ChiTietSanPham::find($id);
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $quantity = $req->quantity;
        $cart->updateQty($sanpham,$quantity,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back()->with('message', 'Cập nhập số lượng thành công! ');
    }
}

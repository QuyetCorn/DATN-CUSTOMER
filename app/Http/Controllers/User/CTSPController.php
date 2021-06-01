<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;

class CTSPController extends Controller
{
    public function index(Request $req) {
        $chitietsanpham = ChiTietSanPham::where('id',$req->id)->first();
        return view('user.page.chitietsanpham',compact('chitietsanpham'));
    }
}

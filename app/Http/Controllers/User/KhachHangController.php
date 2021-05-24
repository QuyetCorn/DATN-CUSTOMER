<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\KhachHang;
use Session;
class KhachHangController extends Controller
{
    public function nguoidung($id) {
        $user = khachhang::findOrFail($id);
        return view('user.page.NguoiDung',compact('user'));
    }
    
    public function doipassword($id,request $request) {
        $user = khachhang::findOrFail($id);
        $pass = Hash::make($request->txtpassword);
        if(Auth::check($pass, $user->password))
        {
            $this->validate($request, [
                'txtpassword' => 'required',
            ]);
            $user->password = Hash::make($request->txtpassword);
            $user->save();
        }
        return view('user.page.NguoiDung',compact('user'));
         
    }
    public function edit_khachhang($id){
        $user = khachhang::findOrFail($id);
        return view('user.page.NguoiDung',compact('user'));
    }
    public function edit(request $request){
        $user = khachhang::find( $request->id);
        return view('user.page.NguoiDung',compact('user'));
    }
}

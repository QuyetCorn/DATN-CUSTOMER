<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\KhachHang;
use App\Classes\Helper;
use Session;
class KhachHangController extends Controller
{
    public function nguoidung($id) {
        $user = khachhang::findOrFail($id);
        return view('user.page.NguoiDung',compact('user'));
    }

    public function getedit_doipassword($id){
        $user = khachhang::findOrFail($id);
        return response()->json($user);
    }
    
    public function doipassword(request $request) {
        $user = khachhang::findOrFail($request->id);
        $pass = Hash::make($request->password);
        if(Auth::check($pass, $user->password))
        {
            $user->password = $pass;
            $user->save();
            return back()->with('message','Email hoặc mật khẩu chưa chính xác!');
        }
        return back()->with('message','Email hoặc mật khẩu chưa chính xác!');
         
    }
    public function getedit_khachhang($id){
        $user = khachhang::findOrFail($id);
        return response()->json($user);
    }

    public function edit_khachhang(request $request){

        //$data=$request->validate([
        //    'lat' => 'required',
        //    'name' => 'required',
        //    'phone' => 'required',
        //    'type' => 'required',
        //]);
      
        //$khachhang->update($data);

        $user = khachhang::find( $request->id);
       // $user->hinh_dai_dien = Helper::imageUpload($request->image);
        $user->ho_ten=$request->name;
        $user->sdt=$request->phone;
        $user->dia_chi=$request->lat;
        $user->gioi_tinh= $request->type;
        $user->save();
        return view('user.page.NguoiDung',compact('user'));
    }
}

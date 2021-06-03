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

    public function doipassword($id,request $request) {
        $user = khachhang::find($id);
        $pass = $request->Password;
        if(Hash::check($pass,$user->password))
            { 
                if($request->Repassword==$request->Newpassword)
                {
                    $user->password = Hash::make($request->Newpassword);
                    $user->save();
                    Session::flash('message', 'đổi mật khẩu thành công!');
                }
                else
                Session::flash('message', 'nhập lại không trùng khớp!');
           }
        else
            Session::flash('message', 'mật khẩu không trùng khớp!');
        return back();
         
    }
    public function getedit_khachhang($id){
        $user = khachhang::findOrFail($id);
        return response()->json($user);
    }

    public function edit_IMG(Request $request, Khachhang $khachhang){
        $data['image'] = Helper::imageUpload($request);
        if($khachhang->update($data))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return back();
    }


    public function edit_khachhang(request $request){
        $user = khachhang::find( $request->id);
        $user->ho_ten=$request->name;
        $user->sdt=$request->phone;
        $user->dia_chi=$request->lat;
        $user->gioi_tinh= $request->type;
        if( $user->save())
        Session::flash('message', 'đổi thông tin thành công!');
        return view('user.page.NguoiDung',compact('user'));
    }
}

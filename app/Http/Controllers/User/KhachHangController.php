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
        return view('user.page.nguoi-dung.nguoidung',compact('user'));
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
                    Session::flash('message', 'Đổi mật khẩu thành công!');
                }
                if($request->Password==$request->Newpassword)
                {
                    Session::flash('message', 'Mật khẩu mới phải khác với mật khẩu cũ!');
                }
                else
                Session::flash('message', 'Nhập lại không trùng khớp!');
           }
        else
            Session::flash('message', 'Mật khẩu không chính xác!');
        return back();
         
    }
    public function getedit_khachhang($id){
        $user = khachhang::find($id);
        return response()->json($user);
    }

    public function edit_hinhanh($id,Request $request){
        $user = khachhang::findOrFail($id);
        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('assets/images'), $imageName);
                $user->hinh_dai_dien=$imageName;
            }
        }
        if($user->save())
            Session::flash('message', 'Cập nhập hình ảnh thành công!');
        else
            Session::flash('message', 'Cập nhập hình ảnh thất bại!');
        return back(); 
            
    }


    public function edit_khachhang(request $request){
        $user = khachhang::find( $request->id);
        $user->ten=$request->name;
        $user->sdt=$request->phone;
        $user->dia_chi=$request->lat;
        $user->gioi_tinh= $request->type;
        if( $user->save())
        Session::flash('message', 'Đổi thông tin thành công!');
        return view('user.page.nguoi-dung.nguoidung',compact('user'));
        return back();
    }
}

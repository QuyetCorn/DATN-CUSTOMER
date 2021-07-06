<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\KhachHang;

class DangNhapDangKyController extends Controller
{
    //
    public function index(){
        return view('user.dangnhapdangky');
    }
    public function __construct()
    {
    }

    public function dangky(Request $request) {

        $this->validate($request,
            [
                'txtemail'=>'required|email|unique:khach_hang,email',
                'txtpassword'=>'required|min:6|',
                'txtname'=>'required',
                'txtphone'=>'required|min:10|',
                'txtrepassword'=>'required|same:txtpassword'
            ],
            [
                'txtemail.required'=>'Vui lòng nhập email!',
                'txtemail.email'=>'Không đúng định dạng email!',
                'txtemail.unique'=>'Email đã tồn tại!',

                'txtpassword.required'=>'Vui lòng nhập mật khẩu!',
                'txtpassword.min'=>'Mật khẩu ít nhất 6 ký tự!',
                
                'txtname.required'=>'Vui lòng nhập họ tên!',

                'txtphone.required'=>'Vui lòng nhập số điện thoại!',
                'txtphone.min'=>'Số điện thoại không đúng định dạng!',

                'txtrepassword.required'=>'Vui lòng nhập nhập lại mật khẩu!',
                'txtrepassword.same'=>'Mật khẩu không trùng khớp!',
                
            ]
            );

        $user = new khachhang;
        $user->ten = $request->txtname;
        $user->email = $request->txtemail;
        $user->sdt = $request->txtphone;
        $user->password = Hash::make($request->txtpassword);
        $user->vai_tro_id = 1;
        $user->save();
        return back()->with('message','Đăng ký thành công !');          
    }


    public function kiemTraDangNhap(Request $request){
 
        $this->validate($request,
        [
           'email'=>'required|email',
           'password'=>'required|min:6|max:20',
        ],
        [
            'email.required'=>'Vui lòng nhập Email',
            'email.email'=>'Email không đúng định dạng!',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự!',
            'password.max'=>'Mật khẩu không quá 20 ký tự!'
        ]);
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        
        $credentials = [
            'email'         => $request->email,
            'password'      => $request->password
        ];

        if(Auth::attempt($credentials,$remember_me)) {
            return redirect()->route('trangchu');
        } else{
            return back()->with('message','Email hoặc mật khẩu chưa chính xác!');
        }
    }

    public function dangxuat() {
        Auth::logout();
        return back();
    }

  
}

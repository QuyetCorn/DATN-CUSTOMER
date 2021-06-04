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
        $user = new khachhang;
        $email = KhachHang::where('email','Like',$request->txtemail) ->first();
        if($email){
            return back()->with('message','Email đã tồn tại!');
        }
        else{
            if($request->txtrepassword==$request->txtpassword)
            {
            $user->ho_ten = $request->txtname;
            $user->email = $request->txtemail;
            $user->password = Hash::make($request->txtpassword);
            $user->vaitro = 0;
            $user->save();
            return back()->with('message','Đăng ký thành công !');;
            }
            else
            return back()->with('message','nhập lại mật khẩu không chính xác!');
         }
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
        ]
        );
        
        $credentials = [
            'email'         => $request->email,
            'password'      => $request->password
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('trangchu');
        } else{
            return back()->with('message','Email hoặc mật khẩu chưa chính xác!');
        }
    }

    public function dangxuat() {
        Auth::logout();
        return redirect()->route('trangchu');
    }

  
}

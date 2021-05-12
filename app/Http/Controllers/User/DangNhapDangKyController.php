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

        // $email = KhachHang::where('email','=',$request->email)->first();
        // $password = KhachHang::where('password','=',$request->password)->first();
        // if($email) {
        //     if($password) {
        //         $request->session()->put('LoggedUser',$email->id);
        //         return redirect()->route('trangchu');
        //     }else{
        //         return back()->with('message','Mật khẩu không chính xác!');
        //     }
        // } else {
        //     return back()->with('message','Email đăng nhập không tồn tại!');
        // }

        // $email = KhachHang::where('email','=',$request->email)->first();
        // //$password = KhachHang::where('password','=',$request->password)->first();
        // if($email) {
        //     if(Hash::check($request->password,$email->password)) {
        //         $request->session()->put('LoggedUser',$email->id);
        //         return redirect('trangchu');
        //     }else{
        //         return back()->with('message','Mật khẩu không chính xác!');
        //     }
        // } else {
        //     return back()->with('message','Email đăng nhập không tồn tại!');
        // }
    }

    public function dangXuat() {
        Auth::logout();
        return redirect()->route('trangchu');
    }
}

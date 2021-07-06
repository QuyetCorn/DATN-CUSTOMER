<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachDatHang;
use App\Models\HoaDon;
use App\Models\GioHang;
use App\Models\ChiTietHoaDon;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\User\datetime;

class DatHangController extends Controller
{
    public function index(){
        return view('user.page.dat-hang.dathang');
    }

    public function datHang(Request $req) {
        $this->validate($req,
            [
                'phone'=>'min:10',
            ],
            [
                'phone.min'=>'Số điện thoại không đúng định dạng!',
            ]
            );

        $giohang = Session::get('cart');
        $khachdathang = new KhachDatHang;
        $khachdathang->email = $req->email;
        $khachdathang->ten = $req->hoten;
        $khachdathang->gioi_tinh = $req->gioitinh;
        $khachdathang->sdt = $req->sdt;
        $khachdathang->dia_chi = $req->diachi;
        $khachdathang->save();

        $hoadon = new HoaDon;
        $hoadon->khach_dat_hang_id = $khachdathang->id;
        $hoadon->ngay_dat = date('Y-m-d');
        $hoadon->tong_tien = $giohang->tongTien;
        $hoadon->ghi_chu = $req->ghichu;
        $hoadon->save();

        foreach($giohang->items as $key => $value) {
            $chitiethoadon = new ChiTietHoaDon;
            $chitiethoadon->hoa_don_id = $hoadon->id;
            $chitiethoadon->san_pham_id = $key;
            $chitiethoadon->so_luong = $value['so_luong'];
            $chitiethoadon->don_gia = ($value['gia']/$value['so_luong']);
            $chitiethoadon->thanh_tien = ($value['gia']/$value['so_luong'])*$value['so_luong'];
            $chitiethoadon->save();
        }
        Session::forget('cart');
        return redirect()->route('trangchu')->with('message','Đặt hàng thành công !');

    }
}

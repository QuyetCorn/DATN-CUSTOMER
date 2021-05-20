<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;
    protected $table = "chi_tiet_sp";

    public function loaisanpham() {
        return $this->belongsTo('App\LoaiSanPham','loai_sp_id','id');
    }

    // public function chitiethoadon() {
    //     return $this->hasMany('App\ChiTietHoaDon','san_pham_id','id');
    // }

    public function nhasanxuat() {
        return $this->hasOne('App\NhaSanXuat','nha_sx_id','id');
    }
}

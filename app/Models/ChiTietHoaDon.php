<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    use HasFactory;
    protected $table = "chi_tiet_hoa_don";

    // public function sanpham() {
    //     return $this->belongsTo('App\SanPham','san_pham_id','id');
    // }
    
    public function hoadon() {
        return $this->belongsTo('App\HoaDon','hoa_don_id','id');
    }

}

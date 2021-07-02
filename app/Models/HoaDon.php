<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $table = "hoa_don";

    public function chitiethoadon() {
        return $this->hasMany('App\ChiTietHoaDon','hoa_don_id','id');
    }

    public function khachdathang() {
        return $this->belongsTo('App\KhachHang','khach_dat_hang_id','id');
    }
}

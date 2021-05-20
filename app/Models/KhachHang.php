<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $table = "khach_hang";

    public function hoadon() {
        return $this->hasMany('App\HoaDon','khach_hang_id','id');
    }
}

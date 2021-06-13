<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachDatHang extends Model
{
    use HasFactory;
    protected $table = "khach_dat_hang";

    public function hoadon() {
        return $this->hasMany('App\HoaDon','khach_dat_hang_id','id');
    }
}

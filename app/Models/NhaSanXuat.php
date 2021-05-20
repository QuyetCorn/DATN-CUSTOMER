<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaSanXuat extends Model
{
    use HasFactory;
    protected $table = "nha_san_xuat";

    public function chitietsanpham() {
        return $this->belongsTo('App\ChiTietSanPham','nha_sx_id','id');
    }
}

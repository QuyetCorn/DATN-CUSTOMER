<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    use HasFactory;
    protected $table = "loai_sp";

    public function chitietsanpham() {
        return $this->hasMany('App\ChiTietSanPham','loai_sp_id','id	');
    }
}

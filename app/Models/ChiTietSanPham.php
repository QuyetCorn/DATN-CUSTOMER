<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPham extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_sp';
    // protected $casts = ['hinh_anh'  => 'json'];
    // protected $appends = ['anh_chi_tiet_sp'];
    // protected $fillable = [
    //     'san_pham_id',
    //     'loai_sp_id',
    //     'nha_sx_id',
    //     'ten_sp',
    //     'gia',
    //     'mo_ta',
    //     'mau_sac',
    //     'so_luong',
    //     'giam_gia',
    //     'hinh_anh',
    //     'chat_lieu',
    //     'so_ngan',
    //     'khoi_luong',
    //     'kich_thuoc',
    //     'tai_trong',
    //     'ngan_lap',
    //     'tinh_trang'
    // ];

    public function loaisanpham() {
        return $this->belongsTo('App\LoaiSanPham','loai_sp_id','id');
    }

    // public function chitiethoadon() {
    //     return $this->hasMany('App\ChiTietHoaDon','san_pham_id','id');
    // }

    public function nhasanxuat() {
        return $this->hasOne('App\NhaSanXuat','nha_sx_id','id');
    }

    // public function getAnhChiTietSpAttribute() {
    //     if (empty($this->hinh_anh)) {
    //         return null;
    //     }
    //     $arrImgs = [];
    //     foreach ($this->hinh_anh as $img) {
    //         $arrImgs[] = request()->getSchemeAndHttpHost(). "/anh_ctsp/{$img}";
    //     }
    //     return $arrImgs;
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = "slide";
    
    public function posts()
    {
        return $this->hasManyThrough(
            'App\ChiTietHoaDon',
            'App\ChiTietSanPham',
            'san_pham_id', // khóa ngoại của bảng trung gian
            'chi_tiet_hoa_don_id', // khóa ngoại của bảng mà chúng ta muốn gọi tới
            'id', //trường mà chúng ta muốn liên kết ở bảng đang sử dụng
            'id' // trường mà chúng ta muốn liên kết ở bảng trung gian.
        );
    }

}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSanPham;

class SanPhamController extends Controller
{
    public function index() {
        // $sanpham = ChiTietSanPham::All();
        $sanpham = ChiTietSanPham::where('tinh_trang','1')->get();

        if(isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if($sort_by=='tang-dan') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($sort_by=='giam-dan') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('gia','DESC')->get();
            }
            elseif($sort_by=='moi-cu') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('created_at','DESC')->get();
            }
            elseif($sort_by=='cu-moi') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('created_at','ASC')->get();
            }
            elseif($sort_by=='A-Z') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('ten_sp','ASC')->get();
            }
            elseif($sort_by=='Z-A') {
                $sanpham = ChiTietSanPham::where('tinh_trang','1')->orderby('ten_sp','DESC')->get();
            }

        }

        if(isset($_GET['price'])) {
            $price = $_GET['price'];

            if($price=='1') {
                $sanpham = ChiTietSanPham::where('gia','<',300000)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='2') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[300000, 500000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='3') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[500000, 700000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='4') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[700000, 1000000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='5') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1000000, 1200000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='6') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1200000, 1500000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='7') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1500000, 2000000])->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='8') {
                $sanpham = ChiTietSanPham::where('gia','>',2000000)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }

        }

        return view('user.page.sanpham',compact('sanpham'));
    }
    public function new() {
        $sanpham = ChiTietSanPham::where('new',1)->get();
        

        if(isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if($sort_by=='tang-dan') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($sort_by=='giam-dan') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('gia','DESC')->get();
            }
            elseif($sort_by=='moi-cu') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('created_at','DESC')->get();
            }
            elseif($sort_by=='cu-moi') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('created_at','ASC')->get();
            }
            elseif($sort_by=='A-Z') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('ten_sp','ASC')->get();
            }
            elseif($sort_by=='Z-A') {
                $sanpham = ChiTietSanPham::where('new',1)->where('tinh_trang','1')->orderby('ten_sp','DESC')->get();
            }

        }

        if(isset($_GET['price'])) {
            $price = $_GET['price'];

            if($price=='1') {
                $sanpham = ChiTietSanPham::where('gia','<',300000)->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='2') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[300000, 500000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='3') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[500000, 700000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='4') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[700000, 1000000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='5') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1000000, 1200000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='6') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1200000, 1500000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='7') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1500000, 2000000])->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($price=='8') {
                $sanpham = ChiTietSanPham::where('gia','>',2000000)->where('new',1)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }

        }
  
        return view('user.page.sanpham',compact('sanpham'));
    }

    public function sale() {
        $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->get();

        if(isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if($sort_by=='tang-dan') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('gia','ASC')->get();
            }
            elseif($sort_by=='giam-dan') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('gia','DESC')->get();
            }
            elseif($sort_by=='moi-cu') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('created_at','DESC')->get();
            }
            elseif($sort_by=='cu-moi') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('created_at','ASC')->get();
            }
            elseif($sort_by=='A-Z') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('ten_sp','ASC')->get();
            }
            elseif($sort_by=='Z-A') {
                $sanpham = ChiTietSanPham::where('giam_gia','<>',0)->where('tinh_trang','1')->orderby('ten_sp','DESC')->get();
            }

        }

        if(isset($_GET['price'])) {
            $price = $_GET['price'];
            
            if($price=='1') {
                $sanpham = ChiTietSanPham::where('gia','<',300000)->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='2') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[300000, 500000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='3') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[500000, 700000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='4') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[700000, 1000000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='5') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1000000, 1200000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='6') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1200000, 1500000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='7') {
                $sanpham = ChiTietSanPham::whereBetween('gia',[1500000, 2000000])->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }
            elseif($price=='8') {
                $sanpham = ChiTietSanPham::where('gia','>',2000000)->where('giam_gia','<>',0)->where('tinh_trang','1')->get();
            }

        }

        return view('user.page.sanpham',compact('sanpham'));

    }

    public function searchcat()
    {
    
        $cat = \Input::get('cat');
    
        $cat = (int) $cat;
    
        $vacancies = \Vacancy::where('category_id', '=', $cat)->get();
    
        return \View::make('vacancies.empty')->with('vacancies', $vacancies); 
    
    }
}

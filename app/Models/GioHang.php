<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class GioHang
{
	public $items = null;
	public $tongSL = 0;
	public $tongTien = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->tongSL = $oldCart->tongSL;
			$this->tongTien = $oldCart->tongTien;
		}
	}

	public function add($item, $id){
		$gia = 0;
		if($item->giam_gia!=0){
			   $gia = $item->gia*((100-$item->giam_gia)/100);
		}else{
			   $gia = $item->gia;
		}
		$giohang = ['so_luong'=>0, 'gia' => $gia, 'item' => $item];
		if($this->items){
			   if(array_key_exists($id, $this->items)){
					  $giohang = $this->items[$id];
			   }
		}
		$giohang['so_luong']++;
		$giohang['gia'] = $gia * $giohang['so_luong'];
		$this->items[$id] = $giohang;
		$this->tongSL++;
		$this->tongTien += $gia;
  	}


	//xóa cart
	public function removeItem($id){
		$this->tongSL -= $this->items[$id]['so_luong'];
		$this->tongTien -= $this->items[$id]['gia'];
		unset($this->items[$id]);
	}

	public function updateQty($item,$qty, $id){
		if($qty != $this->items[$id]['so_luong']){
			$gia = 0;
			if($item->giam_gia!=0){
				$gia = $item->gia*((100-$item->giam_gia)/100);
			}else{
				$gia = $item->gia;
			}
			if($this->items){
				if(array_key_exists($id, $this->items)){
						$giohang = $this->items[$id];
				}
			}
			$giohang['so_luong']=$qty;
			$giohang['gia'] = $gia * $giohang['so_luong'];
			$this->items[$id] = $giohang;

			$tt=$this->items[$id]['so_luong'] - $this->tongSL;
			
			$this->tongSL+=$tt;
			$this->tongTien += $gia;
		}
	}
}

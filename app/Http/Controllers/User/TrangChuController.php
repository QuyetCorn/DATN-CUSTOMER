<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\SupSlide;

class TrangChuController extends Controller
{
    public function index() {
        $slide = Slide::all();
        $sup_slide = SupSlide::all();

        return view('user.page.trangchu',compact('slide'),compact('sup_slide'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\DanhMuc;
use App\TheLoai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        return view('home',$data);
    }
    public function home(){
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        $data['theloai'] = TheLoai::getTheLoai();
        return view('index',$data);
    }
    
    public function category(){
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        $data['theloai'] = TheLoai::getTheLoai();
        return view('page.danhmuc',$data);        
    }
}

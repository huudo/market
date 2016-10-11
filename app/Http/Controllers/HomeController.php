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
    public function home(){
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        $data['theloai'] = TheLoai::getTheLoai();
        return view('index',$data);
    }
    public function category($menu){
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        $data['theloai'] = TheLoai::getTheLoai();

        $danhmuc = DanhMuc::getInfoPage($menu);
        $data['page'] = $danhmuc;
        $data['listMenu'] = DanhMuc::getListMenu($menu);
        return view('page.danhmuc',$data);        
    }

    public function product($menu,$slug){
        $data['danhmuc'] = DanhMuc::getDanhMuc();
        $data['theloai'] = TheLoai::getTheLoai();
        $danhmuc = DanhMuc::getInfoPage($menu);
        $data['page'] = $danhmuc;
        $data['listMenu'] = DanhMuc::getListMenu($menu);

        return view('page.sanpham',$data);
    }
}

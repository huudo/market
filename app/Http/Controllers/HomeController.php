<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\DanhMuc;
use App\TheLoai;
use App\SanPham;

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
        $data['products'] = SanPham::getProduct();
        return view('page.sanpham',$data);
    }

    public function addToCart(){
        $data = Input::all();   
        Session::push('cart.id', $data['id']);
        return $data['id'];
    }

    public function payment(){
        $listProductId = Session::get('cart.id');
        $listProduct = SanPham::getListProduct($listProductId);
        $data['products'] = $listProduct;
        return view('page.thanhtoan',$data);
    }
}

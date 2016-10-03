@extends('layouts.default')
@section('content')
    <div class='banner-page'>
        <img src="{{Asset('public/images/Sup_5.jpg')}}">
    </div>
    <div class="text-page">
        <span id="commonText" class="CommonText">FRUITS &amp; VEGETABLES</span>
        <span id="commonText2" class="CommonTex2"> 310 Products.</span>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 list-category">
            <img src="{{Asset('public/images/banner1.jpg')}}">      
        </div>
        <div class="col-md-6 col-xs-12 list-category">
            <img src="{{Asset('public/images/banner2.jpg')}}">      
        </div>
         <div class="col-md-6 col-xs-12 list-category">
            <img src="{{Asset('public/images/banner2.jpg')}}">      
        </div>
         <div class="col-md-6 col-xs-12 list-category">
            <img src="{{Asset('public/images/banner1.jpg')}}">      
        </div>

    </div>
    <div class="text-page">
        <span id="commonText" class="CommonText">SẢN PHẨM NỔI BẬT</span>
    </div>
    <div class="line-page">

    </div>
    <div class="row">
        <div class="list-product">
            <div class='col-md-3 col-xs-4 product'>
                <img src="{{Asset('public/images/product.jpg')}}">
                
                <div class='bottom-product'>
                    <div class="name-product">
                        <a href="" class="link-product">Tên sản phẩm</a>
                    </div>
                    
                    <div class="price">
                        <p>Giá cả</p>
                    </div>
                    <div class="action-buy">

                    </div>
                </div>
            </div>
            <div class='col-md-3 col-xs-4 product'>
                <img src="{{Asset('public/images/product.jpg')}}">
                
                <div class='bottom-product'>
                    <div class="name-product">
                        <a href="" class="link-product">Tên sản phẩm</a>
                    </div>
                    
                    <div class="price">
                        <p>Giá cả</p>
                    </div>
                    <div class="action-buy">

                    </div>
                </div>
            </div>
            <div class='col-md-3 col-xs-4 product'>
                <img src="{{Asset('public/images/product.jpg')}}">
                
                <div class='bottom-product'>
                    <div class="name-product">
                        <a href="" class="link-product">Tên sản phẩm</a>
                    </div>
                    
                    <div class="price">
                        <p>Giá cả</p>
                    </div>
                    <div class="action-buy">

                    </div>
                </div>
            </div>
            <div class='col-md-3 col-xs-4 product'>
                <a href="#"><img src="{{Asset('public/images/product.jpg')}}"></a>                
                <div class='bottom-product'>
                    <div class="name-product">
                        <a href="#" class="link-product">Tên sản phẩm</a>
                    </div>
                    
                    <div class="price">
                        <p>Giá cả</p>
                    </div>
                    <div class="action-buy">

                    </div>
                </div>
            </div>
            <div class='col-md-3 col-xs-4 product'>
                <img src="{{Asset('public/images/product.jpg')}}">
                
                <div class='bottom-product'>
                    <div class="name-product">
                        <a href="" class="link-product">Tên sản phẩm</a>
                    </div>
                    
                    <div class="price">
                        <p>Giá cả</p>
                    </div>
                    <div class="action-buy">

                    </div>
                </div>
            </div>



        </div>
    </div>
@stop
@extends('layouts.default')
@section('content')
    <div class="text-page">
        <span id="commonText" class="CommonText">Rau xanh</span>
        <span id="commonText2" class="CommonTex2"> 310 Products.</span>
    </div>
    <div class="line-page">

    </div>
        <div class="row" style="padding-top: 10px;">
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
                        <div class="action-buy" tittle ="12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
@stop

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
            @foreach($products as $product)
                <div class='col-md-3 col-xs-4 product'>
                    <img src="{{Asset('public/images/')}}/{{$product['img']}}">
                    
                    <div class='bottom-product'>
                        <div class="name-product">
                            <a href="" class="link-product">{{$product['name']}}</a>
                        </div>
                        
                        <div class="price">
                            <p>Giá cả</p>
                        </div>
                        <button type="button" class="action-buy" data-toggle="modal" tittle="{{$product['id']}}" data-target="#myModal"></button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">                            
                              <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{{$product['name']}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the modal.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="">Thanh Toán</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>    
    </div>    
@stop

<html>

<head>
    <title>Dịch vụ đi chợ thuê</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
</head>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap-theme.min.css')}}>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href={{Asset('public/css/style.css')}}>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/default.css')}}>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/reponsive.css')}}>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/jcarousel.responsive.css')}}>
    <script type="text/javascript" src={{Asset('public/js/jquery213.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/api.jquery.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/bootstrap.min.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/nav-menu.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/jquery.jcarousel.min.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/jcarousel.responsive.js')}}></script>
<body>
    @include('includes.header')
     <div class="container">
        <div class="row">
            <div class="nav-menu-left col-md-3 col-xs-12 col-sm-12">
                <div class="menu-active">
                    <span>SHOP ONLINE</span>
                    <span class="menuicon" style="background: url(&quot;http://d1z88p83zuviay.cloudfront.net/Images/menuicon1.jpg&quot;) no-repeat scroll;"> </span>
                </div>
                <ul id="navigation" class="hidden-xs hidden-sm">
                     @foreach($danhmuc as $key)
                        <li class="navigation-li">
                            <a href="#">{{$key['name']}}</a>
                            <div class="hidden-sm hidden-md hidden-xs danh-muc">
                                    <div class="top-danh-muc">
                                        <span>{{$key['name']}}</span>
                                    </div>                                            
                                    <ul>
                                        @foreach($theloai[$key['id'] - 1] as $test)
                                            <li>{{$test['name']}}</li>
                                        @endforeach
                                    </ul>
                                   
                            </div>
                        </li>
                    @endforeach           
                </ul>
            </div>
            <div class="col-md-9 hidden-xs hidden-sm">
                <div class="top_menu">
                    <ul class="">

                    </ul>   
                </div>
                
            </div>
            <div class="row"> 
                <div class="col-md-12 hidden-xs link-top">
                    <span>Trang chủ / <a href="">danh-muc</a></span>
                </div>
                <div class="menu-left col-md-3 hidden-xs hidden-sm">
                    <span class="menu-left-tittle">{{$page['name']}}</span>
                    <ul class="left-menu">
                        
                        @foreach($listMenu as $menu)
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>  {{$menu['name']}}</a></li>
                        @endforeach
                    </ul>
                    <div class="banner-left">
                        <img src="{{Asset('public/images/banner-left.jpg')}}">
                    </div>
                </div>
                <div class="col-md-9 col-xs-12 col-sm-12 content-page">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>    
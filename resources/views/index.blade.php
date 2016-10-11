<html>

<head>
    <title>Dịch vụ đi chợ thuê</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
</head>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap-theme.min.css')}}>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href={{Asset('public/css/style.css')}}>
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
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-menu-left col-md-3 col-xs-12 col-sm-12">
                        <div class="menu-active">
                            <span>SHOP ONLINE</span>
                            <span class="menuicon" style="background: url(&quot;http://d1z88p83zuviay.cloudfront.net/Images/menuicon1.jpg&quot;) no-repeat scroll;"> </span>
                        </div>
                        <ul id="navigation" class="hidden-xs hidden-sm">
                            @foreach($danhmuc as $key)
                                <li class="navigation-li">
                                    <a href="{{URL::to('danh-muc/')}}/{{$key['slug']}}" class="only">{{$key['name']}}</a>
                                    <div class="hidden-sm hidden-md hidden-xs danh-muc">
                                            <div class="top-danh-muc">
                                                <span>{{$key['name']}}</span>
                                            </div>                                            
                                            <ul>
                                                @foreach($theloai[$key['id'] - 1] as $test)
                                                    <a href="{{URL::to('danh-muc/')}}/{{$key['slug']}}/{{$test['slug']}}"><li>{{$test['name']}}</li></a>
                                                @endforeach
                                            </ul>
                                           
                                    </div>
                                </li>
                            @endforeach
                           
                        </ul>
                        <div class="banner-left hidden-xs hidden-sm">
                            <img src="{{Asset('public/images/banner-left.jpg')}}">
                        </div>
                    </div>
                    <div class="slide-banner col-md-9 col-xs-12 col-sm-12">
                        <div class="nav-top hidden-sm hidden-md hidden-xs">
                            <ul>
                                <li>

                                </li>
                            </ul>
                        </div>
                        <div class="slide-show">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                <div class="item active">
                                  <img src="{{Asset('public/images/1.jpg')}}" alt="...">
                                  <div class="carousel-caption">
                                     
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="{{Asset('public/images/2.jpg')}}" alt="...">
                                  <div class="carousel-caption">
                                      
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="{{Asset('public/images/3.jpg')}}" alt="...">
                                  <div class="carousel-caption">
                                     
                                  </div>
                                </div>
                                </div>
                            </div> <!-- Carousel -->
                        </div>
                        <div class="row">
                            <div class="box col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="{{Asset('public/images/box1.jpg')}}"></a>
                            </div>
                            <div class="box col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="{{Asset('public/images/box2.jpg')}}"></a>
                            </div>
                            <div style="clear:both" class="hidden-lg hidden-md"></div>
                            <div class="box col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="{{Asset('public/images/box3.jpg')}}"></a>
                            </div>
                             <div class="box col-md-3 col-sm-6 col-xs-6">
                                <a href="#"><img src="{{Asset('public/images/box4.jpg')}}"></a>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
            <div class="row">
                 <div class="col-md-12">
                    <div class="content">
                        <div class="head-content">
                            <h2>HÔM NAY <span>ĂN GÌ</span> </h2>
                        </div>
                        <div class="jcarousel-wrapper">
                            <div class="jcarousel" data-jcarousel="true">
                                <ul style="left: -200px; top: 0px;">
                                    <li style="width: 200px;"><img src="{{Asset('public/images/3.jpg')}}" alt="Image 1"></li>                                    
                                    <li style="width: 200px;"><img src="{{Asset('public/images/1.jpg')}}" alt="Image 2"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/2.jpg')}}" alt="Image 3"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/3.jpg')}}" alt="Image 4"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/box1.jpg')}}" alt="Image 5"></li>
                                </ul>
                            </div>
                            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="head-content">
                            <h2>MUA HÀNG <span>THEO MÓN</span> </h2>
                        </div>
                        <div class="jcarousel-wrapper">
                            <div class="jcarousel" data-jcarousel="true">
                                <ul style="left: -200px; top: 0px;">
                                    <li style="width: 200px;"><img src="{{Asset('public/images/3.jpg')}}" alt="Image 1"></li>                                    
                                    <li style="width: 200px;"><img src="{{Asset('public/images/1.jpg')}}" alt="Image 2"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/2.jpg')}}" alt="Image 3"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/3.jpg')}}" alt="Image 4"></li>
                                    <li style="width: 200px;"><img src="{{Asset('public/images/box1.jpg')}}" alt="Image 5"></li>
                                </ul>
                            </div>
                            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.footer')
</body>
</html>
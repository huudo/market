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
                            <li>
                                <a href="#">Patas</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Patas</h3>
                                    <div><img src="http://placekitten.com/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Golden Snub-Nosed</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Golden Snub-Nosed</h3>
                                    <div><img src="http://placekitten.com/g/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Duoc Langur</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Duoc Langur</h3>
                                    <div><img src="http://placekitten.com/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Baby Pygmy Marmoset</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Baby Pygmy Marmoset</h3>
                                    <div><img src="http://placekitten.com/g/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Black Lion Tamarin</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Black Lion Tamarin</h3>
                                    <div><img src="http://placekitten.com/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Monk Saki</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Monk Saki</h3>
                                    <div><img src="http://placekitten.com/g/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Gabon Talapoin</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Gabon</h3>
                                    <div><img src="http://placekitten.com/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Grivet</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Grivet</h3>
                                    <div><img src="http://placekitten.com/g/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Red Leaf</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>Red Leaf</h3>
                                    <div><img src="http://placekitten.com/320/240"></div>
                                </div>
                            </li>
                            <li>
                                <a href="#">King Colobus</a>
                                <div class="hidden-sm hidden-md hidden-xs">
                                    <h3>King Colobus</h3>
                                    <div><img src="http://placekitten.com/g/320/240"></div>
                                </div>
                            </li>
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
                    <span class="menu-left-tittle">RAU & TRÁI CÂY</span>
                    <ul class="nav-menu-left">
                        <span>Rau&Trái cây</span>
                        <li>Rau xanh</li>
                        <li>Củ quả</li>
                        <li>Rau sống</li>
                        <li>Trái cây</li>
                    </ul>
                </div>
                <div class="col-md-9 col-xs-12 col-sm-12 content-page">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>    
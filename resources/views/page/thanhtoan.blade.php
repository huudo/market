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
    <script type="text/javascript" src={{Asset('public/js/jquery213.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/api.jquery.js')}}></script>
    <script type="text/javascript" src={{Asset('public/js/bootstrap.min.js')}}></script>
<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($products as $product)
                       {{$product['id']}}</br>
                    @endforeach
                </div>  
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>
</html>
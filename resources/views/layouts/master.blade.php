<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap css file-->
  <link rel="stylesheet" href="{{ URL::to('src/css/bootstrap.min.css')}}">
  <!-- Font awesome css file-->
  <link href="{{ URL::to('src/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{ URL::to('src/css/superslides.css')}}">
    <!-- Slick slider css file -->
    <link href="{{ URL::to('src/css/slick.css')}}" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href="{{ URL::to('src/css/jquery.circliful.css')}}">  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="{{ URL::to('src/css/animate.css')}}"> 
    <!-- preloader -->
    <link rel="stylesheet" href="{{ URL::to('src/css/queryLoader.css')}}" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{ URL::to('src/css/jquery.tosrus.all.css')}}" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="{{ URL::to('src/css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{ URL::to('src/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('src/css/slider.css')}}">
    <!--<link href="{{asset('src/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('src/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('src/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('src/css/main.css')}}" rel="stylesheet">-->
    <!-- Google fonts -->
    <link href="{{ URL::to('http://fonts.googleapis.com/css?family=Merriweather')}}" rel='stylesheet' type='text/css'>   
    <link href="{{ URL::to('http://fonts.googleapis.com/css?family=Varela')}}" rel='stylesheet' type='text/css'>
  
  
  @yield('styles') 
</head>
<body>
    @include('includes.header')

    <div class="main">
        @yield('content')  
    </div>
    @include('includes.footer')
    <!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->
    <script src="{{ URL::to('src/js/jequery.min.css')}}"></script>
    <!-- Preloader js file -->
    <!--<script src="{{ URL::to('src/js/queryloader2.min.js')}}" type="text/javascript"></script>-->
    <!-- For smooth animatin  -->
    <script src="{{ URL::to('src/js/wow.min.js')}}"></script>  
    <!-- Bootstrap js -->
    <script src="{{ URL::to('src/js/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{ URL::to('js/slick.min.js')}}"></script>
    <!-- superslides slider -->
    <script src="{{ URL::to('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ URL::to('src/js/jquery.animate-enhanced.min.js')}}"></script>
    <script src="{{ URL:: to('src/js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src="{{ URL::to('src/js/jquery.circliful.min.js')}}"></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="{{ URL::to('js/jquery.tosrus.min.all.js')}}"></script>   
   
    <!-- Custom js-->
    <script src="{{ URL::to('src/js/custom.js')}}"></script>
</body>
</html>
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
<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default" role="navigation">  <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin <span>Dashboard</span></a>

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li><a href="create_teacher">Add Teacher</a></li>
                        <li><a href="create_student">Add Student</a></li>
                        <li><a href="create_subject">Add Subject</a></li>
                        <li><a href="create_course">Add Course</a></li>
                        {{--<li><a href="">Add Events</a></li>--}}
                        <li><a href="create_notice">Add Notices</a></li>
                        <li><a href="create_routine">Add Routine</a></li>

                        {{--<li><a href="{{url('home')}}">Login</a></li>--}}
                    </ul>
                </div><!--/.nav-collapse -->
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{ url('/dashboard') }}">Home</a></li>--}}
                    {{--</ul>--}}

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <!-- END MENU -->
</header>
<!--=========== END HEADER SECTION ================-->
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
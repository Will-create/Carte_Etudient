<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link href="{{asset('asset/img/favicon.png')}}" rel="shortcut icon">

  <title>Creative - Bootstrap Admin Template</title>
  <!-- Bootstrap CSS -->
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('asset/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('asset/css/elegant-icons-style.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/font_awesome.min.css')}}" rel="stylesheet">
  <!-- full calendar css-->
  <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet">
  <link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
  <!-- easy pie chart-->
  <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen">
  <!-- owl carousel -->
  <link href="{{asset('asset/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('asset/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link href="{{asset('ass
  et/css/fullcalendar.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/xcharts.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
      <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                  @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
       
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
  


 

            
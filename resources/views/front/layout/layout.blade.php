<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
  	<meta name="description" content="Best Survey System in Bangladesh">
  	<meta name="keywords" content="#">
  	<meta name="author" content="Md. Imranul Islam">
    <title>Survey</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta property="og:url" content="https://fatmonk.studio/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Laal Pion">
    <meta property="og:description" content="#">
    <meta property="og:image" content="">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="https://fatmonk.studio/">
    <meta name="twitter:title" content="Survey project">
    <meta name="twitter:description" content="#">
    <meta name="twitter:image" content="#">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('frontend/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="{{asset('frontend/css/site.css')}}">
      <!-- Favicon Icon-->
    <link rel="icon" href="{{asset('frontend/images/fab-icon-32-32.png')}}" type="image/gif" sizes="16x16">
    @stack('styles')
    <style type="text/css">
      .dropdown:hover>.dropdown-menu {
      display: block;
    }
    </style>
  </head>
  <div class="container-fluid">
  <header>
  <div class="navigation"id="nav">
    <div class="row justify-content-center">
      <div class="col-lg-9 nav-content">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand pl-4" id="main-nav"href="https://fatmonk.studio/">    
            <img class="nav-img img-fluid"src="{{asset('frontend/images/logo.png')}}" />
          </a>
          <button id="topbar-menu-icon" class="navbar-toggler fas fa-bars mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div id="topbar-menu" class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ URL::to('/services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('service_zone') ? 'active' : '' }}" href="{{ URL::to('/service_zone') }}">Service Zone</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}" href="{{ URL::to('/contactus') }}">Contact Us</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link {{ request()->is('admin/login') ? 'active' : '' }}" href="{{ route('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  </header>
  <body>
      @yield('content')
    <div id="show_modal">
      <div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              </div>
            </div>
          </div>
      </div>
    </div>

     <!-- footer -->
  
    <div class="row footer justify-content-center">

      <div class="col-md-4">
        <a href="https://fatmonk.studio/">    
            <img class="nav-img img-fluid"src="{{asset('frontend/images/footer-logo.png')}}" />
          </a>
      </div>
      <div class="col-md-4">
        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a>
        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ URL::to('/services') }}">Services</a>
        <a class="nav-link {{ request()->is('service_zone') ? 'active' : '' }}" href="{{ URL::to('/service_zone') }}">Service Zone</a>
         <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}" href="{{ URL::to('/contactus') }}">Contact Us</a>
      </div>
      <div class="col-md-4 middled">
        <div class="social-div">
            <div class="row social">
              <a href="https://www.facebook.com/fatmonkhere"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/facebook.svg')}}">
                </a>
                 <a href="https://www.linkedin.com/company/fatmonk/mycompany/verification/"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/linkedin.svg')}}">
                </a>
                <a href="https://www.instagram.com/fatmonkstudio/"target="_blank">
                  <img class="img-fluid line" src="{{asset('frontend/images/social-icon/insta.svg')}}">
                </a>
            </div>
          </div>
      </div>
    <div class="col-md-12">
      <div class="row copyright justify-content-center">
        <div class="col-xl-8 col-lg-12">
          <div class="row mobile-order">
            <div class="col-lg-12">
              <p class="text-center">Copyright © 2022 Fatmonk team. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
  <script  src="{{asset('frontend/dist/js/popper.min.js')}}"></script>
  <script  src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>
  <script  src="{{asset('frontend/js/nav.js')}}"></script>

  <script>
      $(document).ready(function() {
      });
    </script>
      <!-- load scripts from external pages -->
  @stack('scripts')
  </body>
</html>
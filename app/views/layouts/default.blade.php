<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>
                @section('title')
                MGT Stock
                @show
        </title>
        @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here" />
        @show
        @section('meta_author')
        <meta name="author" content="Jon Doe" />
        @show
        @section('meta_description')
        <meta name="description" content="" />
        @show
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('/assets/css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/bootstrap/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/styles.min.css')}}">		
    </head>

    <body>
            <!-- Fixed navbar -->
            <nav class="navbar green" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> MGT Stock</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>                   
                  </ul>
                  <ul class="nav navbar-nav pull-right">
                    @if (Auth::check())
                    @if (Auth::user()->hasRole('admin'))
                    <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                    @endif
                    <li><a href="{{{ URL::to('users') }}}">Signed in as {{{ Auth::user()->fullname }}}</a></li>
                    <li><a href="{{{ URL::to('users/logout') }}}">Sign out</a></li>
                    @else
                    <li {{ (Request::is('users/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('users/login') }}}">Sign in</a></li>
                    <li {{ (Request::is('users/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('users/create') }}}">Sign up</a></li>
                    @endif
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
            
            <!-- Container -->
            <div class="container" role="main">
                    <!-- Notifications -->
                    @include('notifications')
                    <!-- ./ notifications -->                    
                    <!-- Content -->
                    @yield('content')
                    <!-- ./ content -->                       
            </div>
            <!-- ./ container -->


<footer role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr />
                <p class="text-center">Designed and built with all the love in the world by CodeTiburon &amp; Interactivated.</p>
                <p class="text-center">
                    <a href="#">About</a> |
                    <a href="#">Terms &amp; Conditions</a> |
                    <a href="#">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</footer>

        <!-- Javascripts -->
        <script src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>        
        <script src="{{asset('assets/js/app.min.js')}}"></script>

        @yield('scripts')
    </body>
</html>

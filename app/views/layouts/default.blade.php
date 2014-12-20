<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>
                @section('title')
                mgtStock
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
        <link rel="stylesheet" href="{{asset('/assets/css/vendors.min.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">		
    </head>

    <body>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">mgtstock</a>
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
                    <li><a href="{{{ URL::to('user') }}}">Signed in as {{{ Auth::user()->username }}}</a></li>
                    <li><a href="{{{ URL::to('user/logout') }}}">Sign out</a></li>
                    @else
                    <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Sign in</a></li>
                    <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">Sign up</a></li>
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
        <!-- Javascripts -->
        <script src="{{asset('/js/vendors.min.js')}}"></script>
        <script src="{{asset('/js/app.js')}}"></script>

        @yield('scripts')
    </body>
</html>

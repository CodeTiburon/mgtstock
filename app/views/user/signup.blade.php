@extends('layouts.default')
@section('title')
Sign in ::
@parent
@stop

{{-- Content --}}
@section('content')
<form class="form-signin" method="POST" action="{{ URL::to('users/create') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">    
    <h2 class="form-signin-heading">Create your account</h2>
    <label for="inputName" class="sr-only">Name</label>
    <input type="text" name="username" id="inputName" class="form-control" placeholder="Full name" required autofocus>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
    <input type="password" name="confirm_password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
    @if ( Session::get('error') )
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
  @stop
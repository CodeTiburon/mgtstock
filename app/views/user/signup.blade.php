@extends('layouts.default')
@section('title')
Sign in ::
@parent
@stop

{{-- Content --}}
@section('content')

<div class="page-head">
    <h1>Registration</h1>
</div>

<p>Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt. </p>

<div class="row">
    <div class="col-md-4">
        <form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
            <fieldset>
                <div class="form-group">
                        <label for="username">Full name</label>
                        <input class="form-control" placeholder="Full name" type="text" name="fullname" id="fullname" value="{{{ Input::old('fullname') }}}">
                </div>
                <div class="form-group">
                    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                </div>
                <div class="form-group">
                    <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                </div>
                <div class="form-actions form-group">
                  <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="col-md-8">
        <h5>Some important notes</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet magna eget magna aliquam, sit amet varius dui consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Aliquam est lacus, finibus euismod tristique id, suscipit ac ligula. Aenean vel feugiat dui. Nulla facilisi. Fusce volutpat accumsan urna sit amet eleifend. Proin tincidunt commodo ex, quis fringilla nisi scelerisque eget.</p>
        <p> Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt.</p>
    </div>
</div>

@stop

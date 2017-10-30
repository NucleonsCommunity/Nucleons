@extends('layouts.app')

@section('content')
    <div class="modal-dialog modal-dialog_2">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    <div class="head_4">
                        <p>Login</p>
                    </div>
                </h4>
            </div>
            <div class="modal-body">
                <form class="register" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="section form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username" class="field prepend-icon">
                            <input type="text" name="email" id="username" placeholder="Username">
                            <label for="username" class="field-icon">
                                <i class="fa fa-user"></i>
                            </label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="section form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="field prepend-icon">
                            <input type="password" name="password" id="password" placeholder="Password">
                            <label for="password" class="field-icon">
                                <i class="fa fa-lock"></i>
                            </label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                    <div class="section">
                        <div class="submit"><input type="submit" value="Login"></div>
                    </div>
                    <ul class="new">
                        <li class="new_left"><p><a href="{{ route('password.request') }}">Forgot Password ?</a></p></li>
                        <li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                        <div class="clearfix"></div>
                    </ul>
                </form>
            </div>
        </div>
    </div>

@endsection

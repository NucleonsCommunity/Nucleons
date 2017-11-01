@extends('layouts.app')

@section('content')
    <div class="modal-dialog dialog_3">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel"><div class="head_4">
                        <p>Register</p>
                    </div></h4>
            </div>
            <form name="row" class="register" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="gate" aria-label="...">
                            </span>
                            <label class="form-control"> GATE </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="ssc" aria-label="...">
                            </span>
                            <label class="form-control"> SSC </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="banking" aria-label="...">
                            </span>
                            <label class="form-control"> Banking </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox" name="ies" aria-label="...">
                            </span>
                            <label class="form-control"> IES </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="section form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="field prepend-icon">
                        <input type="text" name="name" id="name" placeholder="Name" required autofocus>
                        <label for="name" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </label>
                </div>

                <div class="section form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                    <label for="phone" class="field prepend-icon">
                        <input type="number" name="number" id="number" placeholder="Number" required>
                        <label for="number" class="field-icon">
                            <i class="fa fa-phone"></i>
                        </label>
                        @if ($errors->has('number'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                        @endif
                    </label>
                </div>

                <div class="section form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="field prepend-icon">
                        <input type="text" name="email" id="Email id" placeholder="Email" required>
                        <label for="email id" class="field-icon">
                            <i class="fa fa-envelope"></i>
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
                    <label for="password" class="field prepend-icon">
                        <input type="password" name="password_confirmation" id="password" placeholder="Password Confirm">
                        <label for="password" class="field-icon">
                            <i class="fa fa-lock"></i>
                        </label>
                    </label>
                </div>

                <div class="section">
                    <div class="submit"><input type="submit" value="Register"></div>
                </div>

            </form>
        </div>
    </div>
@endsection

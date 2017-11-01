@extends('layouts.app')

@section('content')
    <div class="modal-dialog modal-dialog_2">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    <div class="head_4">
                        <p>Registration</p>
                    </div>
                </h4>
            </div>
            <div class="modal-body">
                <form class="register" method="POST" action="{{ route('socialite') }}" >
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value=" {{$token}}">
                    <div class="section form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                        <label for="number" class="field prepend-icon">
                            <input type="number" name="number" id="number" placeholder="Number">
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
                        <div class="submit"><input type="submit" value="Login"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

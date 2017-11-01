@extends('layouts.app')

@section('content')
    <div class="modal-dialog modal-dialog_2">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    <div class="head_3" style="text-align: center">
                        <p>Change Password</p>
                    </div>
                </h4>
            </div>
            <div class="modal-body">
                <form class="register" method="POST" action="{{ route('change_password') }}" >
                    {{ csrf_field() }}

                    <div class="section form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                        <label for="old_password" class="field prepend-icon">
                            <input type="password" name="old_password" id="old_password" placeholder="Old Password">
                            <label for="old_password" class="field-icon">
                                <i class="fa fa-lock"></i>
                            </label>
                            @if ($errors->has('old_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('old_password') }}</strong>
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
                        <div class="submit"><input type="submit" value="Save"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

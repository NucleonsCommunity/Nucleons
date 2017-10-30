@extends('layouts.app')

@section('content')
    <div class="modal-dialog dialog_3">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><div class="head_4">
                        <p>Register</p>
                    </div></h4>
            </div>
            <form name="row" class="register" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <!--
                        <div class="radio radio_1">
                            <input id="leader" type="radio" value="1">
                            <label for="leader">Leader</label>
                            <input id="company" type="radio" value="2">
                            <label for="company">Company</label>
                            <input id="trainer" type="radio" value="3">
                            <label for="trainer">Trainer</label>
                            <input id="software developer" type="radio" value="4">
                            <label for="software developer">Software Developer</label>
                            <input id="product supplier" type="radio" value="5">
                            <label for="product supplier">Product Supplier</label>
                            <input id="consultant" type="radio" value="6">
                            <label for="consultant">Consultant</label>
                            <input id="employee" type="radio" value="7">
                            <label for="employee">Employee</label>
                        </div>
                        -->
                <div class="section form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="username" class="field prepend-icon">
                        <input type="text" name="name" id="Email id" placeholder="Name">
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

                <div class="section form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="field prepend-icon">
                        <input type="text" name="email" id="Email id" placeholder="Email">
                        <label for="email id" class="field-icon">
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
                        <input type="password" name="password" id="Email id" placeholder="Password">
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
                <!--
            <div class="section">
                <label for="name" class="field prepend-icon">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select Country</option>
                        <option value="">Japan</option>
                        <option value="">Kenya</option>
                        <option value="">Dubai</option>
                        <option value="">Italy</option>
                        <option value="">Greece</option>
                        <option value="">Iceland</option>
                        <option value="">China</option>
                        <option value="">Doha</option>
                        <option value="">Irland</option>
                        <option value="">Srilanka</option>
                        <option value="">Russia</option>
                        <option value="">Hong Kong</option>
                        <option value="">Germany</option>
                        <option value="">Canada</option>
                        <option value="">Mexico</option>
                        <option value="">Nepal</option>
                        <option value="">Norway</option>
                        <option value="">Oman</option>
                        <option value="">Pakistan</option>
                        <option value="">Kuwait</option>
                        <option value="">Indonesia</option>
                        <option value="">Spain</option>
                        <option value="">Thailand</option>
                        <option value="">Saudi Arabia</option>
                        <option value="">Poland</option>
                    </select>
                    <label for="name" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
            <div class="section">
                <label for="name" class="field prepend-icon">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select State</option>
                    </select>
                    <label for="name" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
            <div class="section">
                <label for="name" class="field prepend-icon">
                    <select path="country" id="country" class="form-control input-sm">
                        <option value="">Select City</option>
                    </select>
                    <label for="name" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>
                -->
                <div class="section">
                    <div class="submit"><input type="submit" onclick="myFunction()" value="Register"></div>
                </div>
                <div class="checkbox check_1">
                    <input id="check1" type="checkbox" name="check" value="check1">
                    <label for="check1">I agree to the Terms of Service and Privacy Policy</label>
                </div>
            </form>
        </div>
    </div>
@endsection

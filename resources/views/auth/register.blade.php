@extends('frontland.layouts.app')

@section('content')

<!--Login Section-->
<section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <h2>Register News Account</h2>
                    
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input id="name" type="text" name="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="name " value="{{ old('name') }}" required>
                            </div>
                            @if ($errors->has('name'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" type="text" name="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email " value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="form-group check-box">
                                        <input type="checkbox" name="user" class="filled-in">&nbsp; <label for="account-option-1" required>Agree</label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit">Register</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>
        
            </div>
        </div>
    </section>
    <!--End Login Section-->


@endsection

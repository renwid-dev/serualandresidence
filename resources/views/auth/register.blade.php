@extends('frontland.layouts.app')

@section('content')
<!-- 
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <h4 class="center indigo-text uppercase p-t-30">{{ __('Register') }}</h4>

                <div class="p-20">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="helper-text" data-error="wrong" data-success="right">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>
                                
                                @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <p>
                            <label>
                                <input type="checkbox" name="agent" class="filled-in" />
                                <span>{{ __('Registration as Agent') }}</span>
                            </label>
                        </p>
                        
                        <div class="row">
                            <div class="input-field col s12">
                                <button type="submit" class="waves-effect waves-light btn indigo">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--Login Section-->
<section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-12 col-sm-12 col-xs-12">
                    <h2>Register News Account</h2>
                    
                    <!-- Login Form -->
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="post" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="name " required>
                            </div>
                            @if ($errors->has('name'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" placeholder="Email " required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="Password" placeholder="Password" required>
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
                                <!-- <div class="pull-left">
                                    <div class="form-group check-box">
                                        <input type="checkbox" name="shipping-option" id="account-option-1" {{ old('remember') ? 'checked' : '' }}>&nbsp; <label for="account-option-1">Remember me</label>
                                    </div>
                                </div> -->
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
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

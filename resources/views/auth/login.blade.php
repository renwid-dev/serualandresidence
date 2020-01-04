@extends('frontland.layouts.app')

@section('content')
<!--Login Section-->
<section class="login-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-md-12 col-sm-12 col-xs-12">
                <div class="login-form">

                    <h2>{{ __('Login') }}</h2>

                    <div class="p-20">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="helper-text" data-error="wrong" data-success="right">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="helper-text" data-error="wrong" data-success="right">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="form-group check-box">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp; <label for="account-option-1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="form-group no-margin">
                                            <button class="theme-btn btn-style-one" type="submit">{{ __('Login') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('password.request') }}" class="psw">Lost your password?</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--End Login Section-->

@endsection

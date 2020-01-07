@extends('frontland.layouts.app')

@section('content')

<!--Login Section-->
<section class="login-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-md-12 col-sm-12 col-xs-12">
                <div class="login-form">
                    <h2>Register News Account</h2>
                    <div class="p-20">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input id="name" type="text" name="name" placeholder="Eg: Jhon Doe" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" required>
                            </div>
                            @if ($errors->has('name'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" placeholder="Eg: 0812XXXXXXXX" required>
                            </div>
                            @if ($errors->has('phone_number'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" type="text" name="email" placeholder="Eg: Jhon@email.com" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" required>
                            </div>
                            @if ($errors->has('email'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input id="password" type="password" name="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Your Secret Word" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <div class="form-group">
                                <label>Confirmation Password</label>
                                <input type="password" name="password_confirmation" placeholder="Password confirmation must be match with password" required>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="helper-text" data-error="wrong" data-success="right">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="form-group check-box">
                                        <input type="checkbox" required name="user" class="filled-in">&nbsp; <label for="account-option-1" required>I'm agree for <span><a href="#">Privacy & policy</a></span> and <span><a href="#">Terms & Condition</a></span></label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="form-group no-margin">
                                        <button class="theme-btn btn-style-one" type="submit">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"></div>
                        </form>
                    </div>
                <!--End Login Form -->
                </div>
            </div>

        </div>
    </div>
</section>
    <!--End Login Section-->


@endsection

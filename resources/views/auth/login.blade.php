@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
                <span class="login100-form-title p-b-55">
                    Login
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-envelope"></span>
                    </span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                    <input class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="fa fa-lock"></span>
                    </span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="contact100-form-checkbox m-l-4">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" {{ old('remember') ? 'checked' : '' }} name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>
                
                <div class="container-login100-form-btn p-t-25">
                    <button class="login100-form-btn">
                        Login
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>

                <div class="text-center w-full p-t-42 p-b-22">
                    <span class="txt1">
                        Or login with
                    </span>
                </div>

                
                <a href="{{ url('/login/facebook') }}" class="btn-face m-b-10">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="{{ url('/login/google') }}" class="btn-google m-b-10">
                    <img src="assets/images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </a>
                <div class="text-center w-full p-t-115">
                    <span class="txt1">
                        Not a member?
                    </span>

                    <a class="txt1 bo1 hov1" href="{{ route('register') }}">
                        Sign up now							
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

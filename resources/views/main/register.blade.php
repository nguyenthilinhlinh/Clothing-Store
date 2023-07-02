@extends('layout.main.layoutlogin')
@section('title', 'Register')
@section('register')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login101 ">
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" id="LoginForm">
                <button type="" class="button-close"><a href="{{url('/index')}}"><i class="bi bi-x-lg"></i></a></button>
                @csrf
                <!--=====TIÊU ĐỀ======-->
                <span class="login100-form-title"><img src="{{asset('main')}}/images/fav-icon/logo1.png" alt="IMG" style="width: 30px; height: 30px">
                    <b>SIGN UP</b>
                </span>
                <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                <!-- NAME -->
                <div class="wrap-input100 validate-input">
                    <input type="text" placeholder="NAME" id="name" class="input100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-user-alt'></i>
                    </span>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- EMAIL -->
                <div class="wrap-input100 validate-input">

                    <input type="text" placeholder="EMAIL" id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-envelope'></i>
                    </span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="wrap-input100 validate-input">
                    <input placeholder="PASSWORD" id="password" type="password" class=" input100 form-control @error('password') is-invalid @enderror" name="password" required>
                    <span toggle="password" class="fas fa-eye field-icon" onclick="eyeFunction()"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-key'></i>
                    </span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- confirm password -->
                <div class="wrap-input100 validate-input">

                    <input placeholder="PASSWORD CONFIRM" id="password-confirm" type="password" class="input100 form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" required>
                    <span id="passwordtoggle" toggle="password" class="fas fa-eye field-icon" onclick="eyesFunction()"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-key'></i>
                    </span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="Privacy Policy" id=" PrivacyPolicy" {{ old('PrivacyPolicy') ? 'checked' : '' }} required>

                    <label style="color:black;" class="form-check-label" for="Privacy Policy">I agree to the
                        <span>{{ __(' Privacy Policy') }}</span>
                    </label>
                </div>
                <!--=====ĐĂNG KÝ======-->
                <div class="login-form__row">
                    <input type="submit" class="login-form__submit button button--main button--full" value="REGISTER" />
                </div>
                <div class="text-center">
                    Already have an account? <a href="{{url('/signin')}}"><b> Sign In!</b></a>
                </div>
                <div class="text-right">
                    <a href="{{url('/')}}">Back!</a>
                </div>
                {!! Form::hidden('type', 0) !!}
            </form>
        </div>
    </div>
</div>
<script type="">
    //show - hide mật khẩu
    function eyeFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text"
        } else {
            x.type = "password";
        }
    };
    function eyesFunction() {
        var x = document.getElementById("password-confirm");
        if (x.type === "password") {
            x.type = "text"
        } else {
            x.type = "password";
        }
    };
</script>
@endsection
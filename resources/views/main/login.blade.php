@extends('layout.main.layoutlogin')
@section('title', 'Login')
@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login102">
            <button type="" class="btn btn-mb-2 btn-cancel"><a href="{{url('/')}}"><i class="bi bi-x-lg"></i></a></button>
            <div class="login100-pic" data-tilt>
                <!-- hình ảnh  -->
                <img src="{{asset('main')}}/images/logo_footer.png" alt="IMG" style="align-items: center;">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <!--=====TIÊU ĐỀ======-->
                <span class="login100-form-title">
                    <b>SIGN IN</b>
                </span>
                <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                <!--===== UserName ======-->
                <div class="wrap-input100 validate-input">
                    <input type="text" placeholder="Username" id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-user-alt'></i>
                    </span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!--===== Password ======-->
                <div class="wrap-input100 validate-input">
                    <input autocomplete="off" placeholder="Password" id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span toggle="password" class="fas fa-eye field-icon show_password" onclick="myFunction()"></span>
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
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('rememberps') ? 'checked' : '' }}>

                    <label style="color:black;" class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!--=====ĐĂNG NHẬP======-->
                <div class="container-login100-form-btn">
                    <input type="submit" value="Sign In" />
                </div>

                <div class="splash__social-signup text-center">
                    <p>Don't have an account? <a href="{{url('/signup')}}" style="color: blue;">Sing Up!</a></p>
                    <!-- Developing -->
                    <!--=====LINK TÌM MẬT KHẨU======-->
                    <!-- <div class="text-right p-t-12">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div> -->
                </div>

            </form>
        </div>
    </div>
</div>

<script type="">
    //show - hide mật khẩu
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text"
        } else {
            x.type = "password";
        }
    };
</script>
@endsection
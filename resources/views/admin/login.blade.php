@extends('layout.main.layoutlogin')
@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <!-- hình ảnh  -->
                <img src="{{asset('main')}}/images/logo_footer.png" alt="IMG" style="align-items: center;">
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <!--=====TIÊU ĐỀ======-->
                <span class="login100-form-title">
                    <b>ADMINISTRATOR LOGIN</b>
                </span>
                <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" placeholder="Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                <div class="wrap-input100 validate-input">
                    <input autocomplete="off" class="input100" type="password" placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span toggle="password" class="fas fa-eye field-icon show_password" onclick="myFunction()"></span>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class='fas fa-key'></i>
                    </span>
                    @error('error')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--=====ĐĂNG NHẬP======-->
                <div class="container-login100-form-btn">
                    <input type="submit" value="Sign In" />
                </div>
                <input type="hidden" name="loginkey" value="1">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    //show - hide mật khẩu
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text"
        } else {
            x.type = "password";
        }
    }
    $(".click-eye").click(function() {
        $(this).toggleClass("bx-show bx-hide");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
@endsection
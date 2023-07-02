@extends('layout.main.layoutlogin')
@section('register')
<div class="limiter">
    <div class="container-login100">
        <div class="page page--login" data-page="login" style="width: 909.6px;">
            <div class="login">
                <div class="login__content">
                    <h2 class="login__title">Create an account</h2>
                    <div class="login-form">
                        <form id="LoginForm" method="POST" action="{{ route('createAccount') }}">
                            @csrf
                            {{-- <div class="login-form__row">
                                <label class="login-form__label">Username</label>
                                <input type="text" name="Username" value="" class="login-form__input required" />
                            </div> --}}
                            <div class="login-form__row">
                                <label class="login-form__label">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="login-form__row">
                                <label class="login-form__label">Email</label>
                                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="login-form__row">
                                <label class="login-form__label">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="login-form__row">
                                <label class="login-form__label">Password Confirm</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="login-form__row">
                                <input type="submit" class="login-form__submit button button--main button--full" value="SIGN UP" />
                            </div>
                            <div class="text-right">
                                <a href="{{url('/admin/dashboard')}}"><input type="button" class="login-form__submit button button--main button--full bg-black" value="BACK!" /></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
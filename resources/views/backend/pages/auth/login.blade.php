@extends('backend.layouts.auth')

@section('title', 'Login')

@section('form')
    <form action="{{ route('login') }}" method="post" novalidate>
        @csrf
        <div class="login-form">
            <div class="form-group">
                <label for="email" class="placeholder"><b>Email</b></label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password" class="placeholder"><b>Password</b></label>
                <a href="{{ route('password.email') }}" class="link float-right">Forget Password ?</a>
                <div class="position-relative">
                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror">
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
            </div>
            <div class="form-group form-action-d-flex mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</button>
            </div>
            <div class="login-account">
                <span class="msg">Don't have an account yet ?</span>
                <a href="{{ route('register') }}" id="show-signup" class="link">Register</a>
            </div>
        </div>
    </form>
@endsection

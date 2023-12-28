@extends('backend.layouts.auth')

@section('title', 'Reset Password')

@section('form')
    <form action="{{ route('password.update') }}" method="post" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <input type="hidden" name="email" value="{{ request()->email }}">

        <div class="login-form">
            <div class="form-group">
                <label for="password" class="placeholder"><b>New Password</b></label>
                <div class="position-relative">
                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror">
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="placeholder"><b>Confirm Password</b></label>
                <div class="position-relative">
                    <input id="password" name="password_confirmation" type="password" class="form-control">
                    <div class="show-password">
                        <i class="icon-eye"></i>
                    </div>
                </div>
            </div>
            <div class="form-action">
                <button type="submit" class="btn btn-primary float-left">Reset</button>
            </div>
        </div>
    </form>
@endsection

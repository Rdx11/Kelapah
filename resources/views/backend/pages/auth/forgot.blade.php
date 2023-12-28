@extends('backend.layouts.auth')

@section('title', 'Forgot Password')

@section('form')
    <form action="{{ route('password.email') }}" method="post" novalidate>
        @csrf
        <div class="login-form">
            <div class="form-group">
                <label for="email" class="placeholder"><b>Email</b></label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            </div>
            <div class="row form-action">
                <div class="col-md-4">
                    <a href="{{ route('login') }}" id="show-signin" class="btn btn-danger w-100 fw-bold">Back</a>
                </div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </div>
            </div>
        </div>
    </form>
@endsection

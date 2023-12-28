@extends('backend.layouts.auth')

@section('title', 'Register')

@section('form')
    <form action="{{ route('register') }}" method="post" novalidate>
        @csrf
        <div class="login-form">
            <div class="form-group">
                <label for="email" class="placeholder"><b>Name</b></label>
                <input id="email" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email" class="placeholder"><b>Email</b></label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="defaultSelect">Gender</label>
                <select class="form-control form-control" id="defaultSelect" name="gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password" class="placeholder"><b>Password</b></label>
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
            <div class="row form-action">
                <div class="col-md-6">
                    <a href="{{ route('login') }}" id="show-signin" class="btn btn-danger w-100 fw-bold">Cancel</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100 fw-bold">Register</button>
                </div>
            </div>
        </div>
    </form>
@endsection

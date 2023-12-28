@extends('backend.layouts.app')

@section('title', 'change password')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h4 class="page-title">Change Password</h4>
            <form action="{{ route('user-password.update') }}" method="post" novalidate>
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-with-nav">
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            @if ($errors->any())
                                                <x-alert/>
                                            @endif
                                            <label for="password">Old Password</label>
                                            <input type="password" name="current_password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Confirmation Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3 mb-3">
                                    <button class="btn btn-warning" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <x-footer/>
</div>
@endsection

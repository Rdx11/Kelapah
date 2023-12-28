@extends('backend.layouts.app')

@section('title', 'profile')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h4 class="page-title">User Profile</h4>
            <form action="{{ route('user-profile-information.update') }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-with-nav">
                            <div class="card-body">
                                @if ($errors->any())
                                    <x-alert/>
                                @endif
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Name" value="{{ old('email') ?? auth()->user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="0" {{ old('gender', auth()->user()->profile->gender) == '0' ? 'selected' : '' }}>Male</option>
                                                <option value="1" {{ old('gender', auth()->user()->profile->gender) == '1' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{ old('phone_number') ?? auth()->user()->profile->phone_number }}" name="phone_number" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-1">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address" rows="3">{{ old('address') ?? auth()->user()->profile->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3 mb-3">
                                    <button class="btn btn-warning">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                <div class="profile-picture">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('backend/img/profile.png') }}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-profile text-center">
                                    <div class="view-profile">
                                        <a href="#" class="btn btn-secondary btn-block">change profile</a>
                                    </div>
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

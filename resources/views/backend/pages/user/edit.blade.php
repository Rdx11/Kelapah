@extends('backend.layouts.app')

@section('title', 'edit user')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit user</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-users"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="avascirpt:void(0)">User Management</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="javascirpt:void(0)">Edit</a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-with-nav">
                            <div class="card-body">
                                @if ($errors->any())
                                    <x-alert/>
                                @endif
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Name" value="{{ old('email') ?? $user->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="0" {{ old('gender', $user->profile->gender) == '0' ? 'selected' : '' }}>Male</option>
                                                <option value="1" {{ old('gender', $user->profile->gender) == '1' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Role</label>
                                            <select class="form-control" id="gender" name="role">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}" {{ old('role', $user->getRoleNames()[0]) == $role->name ? 'selected' : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group form-group-default">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="{{ old('phone_number') ?? $user->profile->phone_number }}" name="phone_number" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-1">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address" rows="3">{{ old('address') ?? $user->profile->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3 mb-3">
                                    <a href="{{ route('user.index') }}" class="btn btn-secondary">Back</a>
                                    <button class="btn btn-warning">update</button>
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

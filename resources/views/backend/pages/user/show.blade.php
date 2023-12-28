@extends('backend.layouts.app')

@section('title', 'detail user')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h4 class="page-title">Detail User</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-with-nav">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="email" class="form-control"  value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Gender</label>
                                        <input type="email" class="form-control" value="{{ $user->profile->gender == 0 ? 'Male' : 'Female' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                        <label>Role</label>
                                        <input type="text" class="form-control" value="{{ $user->getRoleNames()[0] }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="3" disabled>{{ $user->profile->address }}</textarea>
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
        </div>
    </div>
    <x-footer/>
</div>
@endsection

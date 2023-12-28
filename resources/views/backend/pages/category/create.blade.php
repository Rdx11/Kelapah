@extends('backend.layouts.app')

@section('title', 'create category')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Create Category</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-bars-2"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="avascirpt:void(0)">Category Management</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="javascirpt:void(0)">Create</a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('category.store') }}" method="post">
                @csrf
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
                                            <label for="category">Category Name</label>
                                            <input type="text" name="name" class="form-control" id="category" placeholder="category name">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3 mb-3">
                                    <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                    <button class="btn btn-secondary" type="submit">Create</button>
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

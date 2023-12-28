@extends('backend.layouts.app')

@section('title', 'create article')

@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Create New Article</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-agenda-1"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="avascirpt:void(0)">Article Management</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="javascirpt:void(0)">Create</a>
                    </li>
                </ul>
            </div>
            <form action="{{ route('article.store') }}" method="post" novalidate>
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
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Article title" value="{{ old('title') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control form-control" id="category" name="category">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control form-control" id="status" name="status">
                                                <option value="0" {{ old('status') == '0' ? 'selected' : ''}}>publish</option>
                                                <option value="1" {{ old('status') == '1' ? 'selected' : ''}}>draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="thumbnail">Upload Thumbnail</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                  </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="thumbnail" value="{{ old('thumbnail') }}" readonly>
                                            </div>
                                        </div>
                                        <div id="holder"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3 mb-3">
                                    <a href="{{ route('article.index') }}" class="btn btn-danger" type="submit">Back</a>
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

@push('script')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{ asset('backend/js/plugin/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $('#content').summernote({
        placeholder: 'write your content in here...',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });
</script>
@endpush

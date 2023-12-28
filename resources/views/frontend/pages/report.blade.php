@extends('frontend.layouts.app')

@section('title')
Lapor Sampah
@endsection

@section('content')
<section>
    <form class="w-50 m-auto mt-5 d-flex flex-column gap-4 bg-light p-5 rounded-4" action="{{ route('store.report') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <x-alert/>
        @endif
        <div class="form-group d-flex flex-row">
            <label class="w-25 fs-6 my-auto">Judul</label>
            <input type="text" name="title" class="form-control" placeholder="judul" value="{{ old('judul') }}">
        </div>
        <div class="form-group d-flex flex-row">
            <label class="w-25 fs-6 my-auto">Lokasi</label>
            <input type="text" name="location" class="form-control" placeholder="lokasi kejadian" value="{{ old('location') }}">
        </div>
        <div class="form-group d-flex flex-row">
            <label class="w-25 fs-6 my-auto">Upload Foto :</label>
            <input class="form-control" name="photo" type="file">
        </div>
        <div class="form-group d-flex flex-row">
            <label class="w-25 fs-6 my-auto">Deskripsi</label>
            <textarea name="description" cols="120" rows="10">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success w-50 mx-auto">Submit</button>
    </form>
</section>
@endsection

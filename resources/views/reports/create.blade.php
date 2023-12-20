@extends('layouts.user')

@section('content')
<div class="col-md-12 d-flex justify-content-center align-items-center">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Tambah Laporan</h4>
                    <a href="{{ route('reports.index') }}" class="btn btn-primary btn-round ml-auto">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('reports.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Menampilkan pesan error -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- End bagian pesan error -->

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="id_user" class="col-form-label">User</label>
                                <input id="id_user" name="id_user" type="text" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user') }}" required />
                                @error('id_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Judul</label>
                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Isi judul" value="{{ old('title') }}" required />
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Isi deskripsi" name="description" id="comment" rows="5" required>{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location_report" class="col-form-label">Lokasi</label>
                            <textarea id="location_report" name="location_report" class="form-control @error('location_report') is-invalid @enderror" placeholder="Isi lokasi" value="{{ old('location_report') }}" rows="5" required></textarea>
                            @error('location_report')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment (Gambar)</label>
                            <input id="attachment" name="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" />
                            @error('attachment')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="id_category" class="col-form-label">Kategori</label>
                                <input id="id_category" name="id_category" type="text" class="form-control @error('id_category') is-invalid @enderror" placeholder="Isi kategori" value="{{ old('id_category') }}" required />
                                @error('id_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="status" class="col-form-label">Status</label>
                                <input id="status" name="status" type="text" class="form-control @error('status') is-invalid @enderror" placeholder="Isi status" value="{{ old('status') }}" required />
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="padding-top: 10px">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

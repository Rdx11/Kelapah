@extends('layouts.user')

@section('content')
<div class="col-md-12">
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
            <form action="{{ route('reports.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_user">user</label>
                        <input id="id_user" name="id_user" type="text" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user') }}" required />
                        @error('id_user')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Isi judul" value="{{ old('title') }}" required />
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Isi deskripsi" value="{{ old('description') }}"  name="description" id="comment" rows="5" required ></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="location_report">Lokasi</label>
                    <textarea id="location_report" name="location_report"  class="form-control @error('location_report') is-invalid @enderror" placeholder="Isi lokasi" value="{{ old('location_report') }}"  id="comment" rows="5" required ></textarea>
                    @error('location_report')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="date_report">Tanggal Laporan</label>
                        <input id="date_report" name="date_report" type="date" class="form-control @error('date_report') is-invalid @enderror" placeholder="Isi tanggal laporan" value="{{ old('date_report') }}" required />
                        @error('date_report')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="attachment">Attachment (PDF)</label>
                    <input id="attachment" name="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" />
                    @error('attachment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_category">Kategori</label>
                        <input id="id_category" name="id_category" type="text" class="form-control @error('id_category') is-invalid @enderror" placeholder="Isi kategori" value="{{ old('id_category') }}" required />
                        @error('id_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input id="status" name="status" type="text" class="form-control @error('status') is-invalid @enderror" placeholder="Isi status" value="{{ old('status') }}" required />
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection

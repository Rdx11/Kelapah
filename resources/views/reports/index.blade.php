@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Tambah Laporan</h4>
                <a class="btn btn-primary btn-round ml-auto" href="{{ route("reports.create") }}">
                    <i class="fa fa-plus"></i>
                    Tambah laporan
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>user</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Lampiran</th>
                            <th>Lokasi</th>
                            <th>Tanggal Laporan</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            {{-- <th>tindakan</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reports as $report)
                        <tr>
                            <td>{{ $report->id_user }}</td>
                            <td>{{ $report->title }}</td>
                            <td>{{ $report->description }}</td>
                            <td>
                                 <a href="{{ asset('attachments/' . $report->attachment) }}" target="_blank">Lihat Lampiran</a>
                            </td>
                            <td>{{ $report->location_report }}</td>
                            <td>{{ $report->date_report }}</td>
                            <td>{{ $report->id_category }}</td>
                            <td>{{ $report->status }}</td>
                            {{-- <td>
                                <div class="form-button-action">
                                    <button type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link btn-primary btn-lg">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="tooltip" title="Hapus" class="btn btn-link btn-danger">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td> --}}
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Tidak ada laporan yang tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

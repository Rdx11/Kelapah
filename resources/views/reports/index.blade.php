@extends('layouts.admin')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

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
                            <th>User</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Lampiran</th>
                            <th>Lokasi</th>
                            <th>Tanggal Laporan</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reports as $report)
                        <tr>
                            <td>{{ $report->id_user }}</td>
                            <td>{{ $report->title }}</td>
                            <td>{{ $report->description }}</td>
                            <td>
                                @if($report->attachment)
                                    <img src="{{ Storage::url($report->attachment) }}" alt="attachment" style="max-width: 50px;">
                                @else
                                    Tidak ada lampiran
                                @endif
                            </td>
                            <td>{{ $report->location_report }}</td>
                            <td>{{ $report->date_report }}</td>
                            <td>{{ $report->id_category }}</td>
                            <td>{{ $report->status }}</td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{ route('reports.edit', ['report' => $report->id_report]) }}" type="button" data-toggle="tooltip" title="Edit Task" class="btn btn-link btn-primary btn-lg">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('reports.destroy', $report->id_report) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-toggle="tooltip" title="Hapus" class="btn btn-link btn-danger" onclick="return confirm('Anda yakin ingin menghapus laporan ini?')">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9">Tidak ada laporan yang tersedia.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('backend.layouts.app')

@section('title', 'dashboard')


@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-users text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Users</p>
                                        <h4 class="card-title">{{ $users }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-agenda-1 text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Reports</p>
                                        <h4 class="card-title">{{ count($reports) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-internet text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Articles</p>
                                        <h4 class="card-title">{{ $articles }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-bars-2 text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Categories</p>
                                        <h4 class="card-title">{{ $categories }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Incoming Report</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach ($reports as $report)
                            <div class="d-flex">
                                <div class="avatar">
                                    <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                                </div>
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">{{ $report->user->name }} <span class="{{ $report->status == 0 ? 'text-warning' : 'text-success' }} pl-3">{{ $report->status == 0 ? 'PENDING' : 'CLEAR' }}</span></h6>
                                    <span class="text-muted">{{ $report->title }}</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">{{ date('d F Y | H:i', strtotime($report->created_at)) }}</small>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</div>
@endsection

@push('script')
<script src="{{ asset('backend/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script>
    $.notify({
        icon: 'flaticon-alarm-1',
        title: 'Pemberitahuan Penting!',
        message: 'Harap Lengkapi Profile Anda',
    },{
        type: 'secondary',
        placement: {
            from: "top",
            align: "right"
        },
        time: 1000,
    });
</script>
@endpush

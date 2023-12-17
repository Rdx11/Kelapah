@extends('layouts.admin')

@section('title', 'Dashboard')

@section('styles')
   
@endsection

@section('content')
    <div class="mt-2 mb-4">
        <h2 class="text-white pb-2">Welcome, Admin</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-dark bg-primary-gradient">
                <div class="card-body pb-0">
                    <div class="float-right">
                        <i class="fas fa-user fa-4x"></i>
                    </div>
                    <h2 class="mb-2">1</h2>
                    <p>Users</p>
                    <div class="pull-in sparkline-fix chart-as-background"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-secondary-gradient">
                <div class="card-body pb-0">
                    <div class="float-right">
                        <i class="fas fa-file-alt fa-4x"></i>
                    </div>
                    <h2 class="mb-2">1</h2>
                    <p>Laporan Masuk</p>
                    <div class="pull-in sparkline-fix chart-as-background"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-dark bg-success2">
                <div class="card-body pb-0">
                    <div class="float-right">
                        <i class="fas fa-check-circle fa-4x"></i>
                    </div>
                    <h2 class="mb-2">1</h2>
                    <p>Laporan Selesai</p>
                    <div class="pull-in sparkline-fix chart-as-background"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "rgba(255, 255, 255, .5)",
            fillColor: "rgba(255, 255, 255, .15)",
        });



    </script>
@endsection

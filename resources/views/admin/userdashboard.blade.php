
@extends('layouts.user')
@section('content')
<section class="header-section banner">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide backgr" data-bs-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px;">
                    <div class="carousel-item carousel-main active" data-bs-interval="10000">
                        <img src="{{ asset('img/pngtruksampah01.png') }}" class="d-block w-100 main-banner" style="aspect-ratio: 7/3;"
                            alt="...">
                        <div class="carousel-caption">
                            <h3 class="" style="background-color: #fefefe51;">Make Your Place Better</h3>
                            <p class="pb-1" style="background-color: #fefefe51;">Lorem ipsum dolor sit amet consectetur.
                            </p>
                            <button type="button" class="btn btn-success">Lapor Sekarang</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/972518.jpg" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/1111992.jpg" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/2593450.jpg" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon opacity-25" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon opacity-25" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="main-section home1 mt-space">
        <div class="container">
            <div class="backgr">
                <div class="row ps-2 pe-2">
                    <h3 class="mt-3 ms-1 mb-3">Kategori</h3>
                    <div class="d-flex flex-row justify-content-around">
                        <div class="">
                            <img src="{{ asset('img/message.svg') }}" alt="">
                            <p class="pt-2">LAPOR</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('img/calendar.svg') }}" alt="">
                            <p class="pt-2">EVENT</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('img/layers.svg') }}" alt="">
                            <p class="pt-2">ARTIKEL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section home2 mt-space">
        <div class="container">
            <div class="col-md-12">
                <h3 class="d-flex justify-content-between">Laporan
                    <a href="" class="btn">Lihat Lainnya</a>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-4 pb-2">
                    <div class="card backgr">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Velit suscipit magni pariatur
                                praesentium doloribus optio?
                            </p>
                            <p style="color: green;">Selesai</p>
                            <a href="#" class="btn btn-outline-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Velit suscipit magni pariatur
                                praesentium doloribus optio?
                            </p>
                            <p style="color: yellowgreen;">Diproses</p>
                            <a href="#" class="btn btn-outline-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor sit amet consectetur adipisicing elit. Velit suscipit magni pariatur
                                praesentium doloribus optio?
                            </p>
                            <p style="color: red;">Dalam Antrian</p>
                            <a href="#" class="btn btn-outline-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

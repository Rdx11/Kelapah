@extends('frontend.layout.main')

@section('content')
    <!-- banner -->
    <section class="header-section banner">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide backgr" data-bs-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px;">
                    <div class="carousel-item carousel-main active" data-bs-interval="100000">
                        <div class="main-banner-bg"><img src="{{ asset('frontend/aset/truksampah01.png') }}"
                                class="d-block w-100 main-banner" style="aspect-ratio: 7/3;" alt="..."></div>
                        <div class="carousel-caption">
                            <h3 class="" style="background-color: #fefefe51;">Make Your Place Better</h3>
                            <p class="pb-1" style="background-color: #fefefe51;">Lorem ipsum dolor sit amet consectetur.
                            </p>
                            <button type="button" class="btn btn-success" style="border-color: #fefefe;">Lapor
                                Sekarang</button>
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
    <!-- kategori -->
    <section class="main-section home1 mt-space">
        <div class="container">
            <div class="backgr">
                <div class="row ps-2 pe-2">
                    <h3 class="mt-3 ms-1 mb-3">Kategori</h3>
                    <div class="d-flex flex-row text-center justify-content-around">
                        <div class="d-flex flex-column justify-content-center">
                            <img src="{{ asset('frontend/aset/kategori/message.svg') }}" alt="">
                            <span class="mt-3 mb-3">LAPOR</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <img src="{{ asset('frontend/aset/kategori/calendar.svg') }}" alt="">
                            <span class="mt-3 mb-3">EVENT</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <img src="{{ asset('frontend/aset/kategori/layers.svg') }}" alt="">
                            <span class="mt-3 mb-3">ARTIKEL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- laporan -->
    <section class="main-section home2 mt-space">
        <div class="container">
            <div class="col-md-12">
                <h3 class="d-flex justify-content-between">Laporan
                    <a href="/event.html" class="btn" style="color: #198754;">Lihat Lainnya</a>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <h6 class="pb-2">Oleh: anonymous</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn" style="color:cornflowerblue;">Selengkapnya...</a>
                        </div>
                        <div class="card-footer text-body-secondary d-inline-flex justify-content-between">
                            2 days ago
                            <p>Status: <span style="color: green;">Selesai</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <h6 class="pb-2">Oleh: anonymous</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn" style="color:cornflowerblue;">Selengkapnya...</a>
                        </div>
                        <div class="card-footer text-body-secondary d-inline-flex justify-content-between">
                            2 days ago
                            <p>Status: <span style="color: yellowgreen;">Diproses</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <h6 class="pb-2">Oleh: anonymous</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn" style="color:cornflowerblue;">Selengkapnya...</a>
                        </div>
                        <div class="card-footer text-body-secondary d-inline-flex justify-content-between">
                            2 days ago
                            <p>Status: <span style="color: red;">Antrian</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event -->
    <section class="main-section home3 mt-space">
        <div class="container">
            <div class="col-md-12">
                <h3 class="d-flex justify-content-between">Event
                    <a href="/event.html" class="btn" style="color: #198754;">Lihat Lainnya</a>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/example.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset("frontend/aset/Time-event.svg") }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, facere?
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-danger" style="max-height: 2rem;">Unjoin</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/exapml.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, molestias!
                                content.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-success" style="max-height: 2rem;">Join</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 pb-2">
                    <div class="card backgr card-event">
                        <div class="card-body">
                            <img src="{{ asset('frontend/aset/dummy/exapml.jpg') }}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/aset/locate-event.svg') }}" width="20px" alt=""> Random
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/aset/Time-event.svg') }}" width="20px" alt=""> 30 Agustus 2012
                                </li>
                            </ul>
                            <p class="card-text">With supporting text below as a natural lead-in to additional Lorem
                                ipsum dolor, sit amet consectetur adipisicing elit. Molestiae, molestias!
                                content.
                            </p>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-outline-success" style="max-height: 2rem;">Join</a>
                                <div class="">
                                    <img src="{{ asset('frontend/aset/joins-event.png') }}" width="30px" alt="">
                                    <small>123 Orang</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- informasi -->
    <section class="main-section home4 mt-space">
        <div class="container">
            <div class="d-flex text-center justify-content-center align-items-center pt-3 pb-3">
                <img src="{{ asset('frontend/aset/city.svg') }}" width="100px" alt="">
                <p class="ps-3 pe-3" style="font-size: 20px;">Menbantu menjaga kebersihan di 2 Kota di Indonesia</p>
            </div>
        </div>
    </section>
@endsection
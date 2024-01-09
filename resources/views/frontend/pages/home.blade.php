@extends('frontend.layouts.app')

@section('title')
Home
@endsection

@section('content')
<!-- banner -->
<section class="header-section banner">
    <div class="container">
        <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide backgr" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner" style="border-radius: 10px;">
                <div class="carousel-item carousel-main active" data-bs-interval="10000">
                    <div class="main-banner-bg"><img src="{{ asset('frontend/asset/pngtruksampah01.png') }}"
                            class="d-block w-100 main-banner" style="aspect-ratio: 7/3;" alt="..."></div>
                    <div class="carousel-caption">
                        <h3 class="">Bersihkan, Bawa Perubahan</h3>
                        <p class="pb-1">Tindakan kecil dapat membawa dampak besar bagi masa depan.
                        </p>
                        <a href="{{ route('create.report') }}" id="laporanButton" type="button" class="btn btn-success"
                            style="border-color: #fefefe;">Lapor Sekarang</a>
                    </div>
                </div>
                @foreach ($articles as $article)
                <a href="{{ route('show.article', $article->slug) }}">
                    <div class="carousel-item">
                        <img src="{{ $article->thumbnail }}" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                        <div class="carousel-caption d-none d-md-block" style="background-color: #fefefe7b;">
                            <h5>{{ $article->title }}</h5>
                        </div>
                    </div>
                </a>
                @endforeach
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

{{-- <section class="main-section home-banner mt-space">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card">
                    <img src="{{ $article->thumbnail }}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="card-title">
                            <h4>{{ $article->title }}</h4>
                        </div>
                        <p>{!! Str::limit(strip_tags($article->content), 100, '...') !!}</p>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('show.article', $article->slug) }}" class="card-link">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

<!-- informasi -->
<section class="main-section home3 mt-space">
    <div class="container">
        <div class="d-flex text-center justify-content-center align-items-center pt-3 pb-3">
            <img src="{{ asset('frontend/asset/city.svg') }}" width="100px" alt="">
            <p class="ps-3 pe-3" style="font-size: 20px;">Membantu menjaga kebersihan di 2 Kota di Indonesia</p>
        </div>
    </div>
</section>
@endsection
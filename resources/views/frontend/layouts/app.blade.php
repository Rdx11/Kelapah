<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Preahvihear&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <section class="header-section">
        <header style="margin-bottom: 20px!important;">
            <nav class="navbar navbar-expand-lg shadow sticky-top">
                <div class="container">
                    <img src="{{ asset('backend/img/logo5.png') }}" style="background-blend-mode: color-burn;" width="10%" alt="">
                    <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-1 fs-5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="indeks.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('list.article') }}">Article</a>
                            </li>
                            @if (auth()->check())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                            </li>
                            @endif
                        </ul>
                        <form class="d-flex" role="search" id="search-form" action="#" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search-input">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <!-- banner -->
    <section class="header-section banner">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide backgr" data-bs-ride="carousel">
                <div class="carousel-inner" style="border-radius: 10px;">
                    <div class="carousel-item carousel-main active" data-bs-interval="100000">
                        <div class="main-banner-bg"><img src="{{ asset('frontend/asset/pngtruksampah01.png') }}" class="d-block w-100 main-banner" style="aspect-ratio: 7/3;"
                            alt="..."></div>
                        <div class="carousel-caption">
                            <h3 class="">Bersihkan, Bawa Perubahan</h3>
                            <p class="pb-1">Tindakan kecil dapat membawa dampak besar bagi masa depan.
                            </p>
                            <a href="{{ route('create.report') }}" id="laporanButton" type="button" class="btn btn-success" style="border-color: #fefefe;">Lapor Sekarang</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/asset/gambarsampah1.jpg') }}" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/asset/gambarsampah2.jpg') }}" class="d-block w-100"
                            style="aspect-ratio: 7/3;" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/asset/gambarsampah3.jpg') }}" class="d-block w-100"
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

    <!-- informasi -->
    <section class="main-section home3 mt-space">
        <div class="container">
            <div class="d-flex text-center justify-content-center align-items-center pt-3 pb-3">
            <img src="{{ asset('frontend/asset/city.svg') }}" width="100px" alt="">
            <p class="ps-3 pe-3" style="font-size: 20px;">Membantu menjaga kebersihan di 2 Kota di Indonesia</p>
            </div>
        </div>
    </section>

    <!-- event -->
    @yield('content')

    <!--footer-->
    <section id="tentangKami">
        <footer class="footer-section mt-space">
            <div class="container">
                <div class="footer-top text-center pt-3 pb-2">
                    <h4>Sosial media</h4>
                    <ul class="med-sos d-flex flex-row gap-2">
                        <li><img src="{{ asset('frontend/asset/icons8-instagram.svg') }}" width="40px" alt="">Instagram</li>
                        <li><img src="{{ asset('frontend/asset/icons8-facebook.svg') }}" width="40px" alt="">Facebook</li>
                        <li><img src="{{ asset('frontend/asset/icons8-youtube.svg') }}" width="40px" alt="">YouTube</li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>

    <script src="{{ asset('frontend/bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/script.js') }}"></script>

    <!-- custom script file -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var message = '{{ session('success') }}';
        function setMessage() {
            var message = message.replace(/"/g, "'");
        }

        @if (Session::has('success'))
        Swal.fire({
            icon: 'success',
            title: message,
            showConfirmButton: false,
            timer: 3000
        })
        @endif
    </script>
    @stack('script')
</body>
</html>

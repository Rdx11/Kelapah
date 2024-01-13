@extends('frontend.layouts.app')

@section('title')
Article
@endsection

@section('content')
{{-- <section>
    <div class="row mt-5 mx-5">
        @foreach ($articles as $article)
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card">
                <img src="{{ $article->thumbnail }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="card-title">
                        <h4>{{ $article->title }}</h4>
                    </div>
                    {{ Str::limit(strip_tags($article->content), 100, '...') }}
                </div>

                <div class="card-footer">
                    <a href="https://news.detik.com/berita/d-7092796/dprd-surabaya-dukung-pemkot-tindak-warga-buang-sampah-sembarangan"
                        class="card-link">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section> --}}

<!-- list-artikel -->
<section class="artikel-section">
    <div class="container-fluid flex-row d-flex">
        @php
        $checked = [];
        if(isset($_GET['filter-article'])){
        $checked = $_GET['filter-article'];
        }
        @endphp
        <div class="offcanvas myoffcanvas {{ !empty($checked) ? 'show' : '' }}" style="position: relative;"
            data-bs-scroll="true" data-bs-backdrop="false" id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header" style="border-bottom: solid #A3D8A4;">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Filter berdasarkan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{ URL::current() }}" method="GET" id="filterForm">
                    <div>
                        <div>
                            <h5>Kategori</h5>
                        </div>
                        <div class="filter-artikel">
                            <ul>
                                @foreach ($categories as $item)
                                <li onclick="submitForm()">
                                    <input type="checkbox" class="btn-check" name="filter-article[]"
                                        id="{{ $item->name }}" value="{{ $item->name }}" {{ in_array($item->name,
                                    $checked) ? 'checked' : '' }}>
                                    <label for="{{ $item->name }}" class="btn btn-outline-secondary">{{
                                        $item->name
                                        }}</label>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <script>
                            function submitForm() {document.getElementById('filterForm').submit();}
                        </script>

                    </div>
                    <div class="pt-3">
                        <a href="{{ URL::current() }}" class="btn btn-danger">Hapus Filter</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <button class="btn btn-sm btn-outline-success" style="max-height: 2rem;" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling">Filter</button>
            <div class="list-artikel pt-2">
                @foreach ($articles as $article)
                <a href="{{ route('show.article', $article->slug) }}" style="text-decoration: none;">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4  m-auto">
                                <img src="{{ $article->thumbnail }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text"><small class="text-body-secondary">{{ date('d F Y | H:i',
                                            strtotime($article->updated_at)) }}</small></p>
                                    <p class="card-text">{{ strip_tags($article->content) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- pageinasi -->
            <div class="">
                {!! $articles->links() !!}
            </div>
        </div>
    </div>

</section>

@endsection
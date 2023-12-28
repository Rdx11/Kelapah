@extends('frontend.layouts.app')

@section('title')
Article
@endsection

@section('content')
<section>
    <div class="row mt-5 mx-5">
        @foreach ($articles as $article)
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card">
                <img src="{{ $article->thumbnail }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="card-title"><h4>{{ $article->title }}</h4></div>
                   {{ Str::limit(strip_tags($article->content), 100, '...')  }}
                </div>

                <div class="card-footer">
                    <a href="https://news.detik.com/berita/d-7092796/dprd-surabaya-dukung-pemkot-tindak-warga-buang-sampah-sembarangan" class="card-link">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection

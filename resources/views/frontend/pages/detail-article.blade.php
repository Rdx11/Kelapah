@extends('frontend.layouts.app')

@section('title')
Detail Article
@endsection

@section('content')
<section>
    <!-- artikel full -->
    <div class="container backgr artikel">
        <div class="ps-2 pe-2">
            <article id="" class="p-2">
                <div class="artikel-title">
                    <h1 class="entry-title">{{ $article->title }}</h1>
                    <p style="color: #666;"> oleh
                        <a href="" rel="author">{{ $article->user->name }}</a> |
                        <span class="published">{{ date('d F Y', strtotime($article->updated_at)) }}</span> |
                        <a href="" rel="category tag">{{ $article->category->name }}</a>
                    </p>
                    <div class="d-flex justify-content-center">
                        <img src="{{ $article->thumbnail }}" alt="" class="">
                    </div>
                </div>
                <div class="entry-content">
                        {!! $article->content !!}
                </div>

            </article>
        </div>
    </div>
</section>
@endsection
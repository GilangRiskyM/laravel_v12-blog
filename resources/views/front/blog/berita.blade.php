@extends('front.layout')
@section('title', 'Berita')
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('thumbnails' . '/' . $lastData->thumbnail) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <a href="/berita/{{ $lastData->slug }}" class="text-white">
                            <h1>{{ $lastData->title }}</h1>
                        </a>
                        <span class="subheading">{{ $lastData->description }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($data as $datum)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/berita/{{ $datum->slug }}">
                            <h2 class="post-title">{{ $datum->title }}</h2>
                            <h3 class="post-subtitle">{{ $datum->description }}</h3>
                        </a>
                        <p class="post-meta">
                            Diposting oleh
                            <a href="#!">{{ $datum->user->name }}</a>
                            pada {{ $datum->created_at->isoFormat('dddd, D MMMM Y') }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach
                <!-- Pager-->
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        @if (!$data->onFirstPage())
                            <a class="btn btn-primary text-uppercase" href="{{ $data->previousPageUrl() }}">&larr; Berita
                                Terbaru</a>
                        @endif
                    </div>
                    <div>
                        @if ($data->hasMorePages())
                            <a class="btn btn-primary text-uppercase" href="{{ $data->nextPageUrl() }}">Berita Terlama
                                &rarr;</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

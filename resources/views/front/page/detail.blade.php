@extends('front.layout')
@section('title', $data->title)
@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('post_thumbnails' . '/' . $data->thumbnail) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                    <div class="post-heading">
                        <h1>{{ $data->title }}</h1>
                        <h2 class="subheading">{{ $data->description }}</h2>
                        <span class="meta">
                            Diposting oleh
                            {{ $data->user->name }}
                            pada {{ $data->created_at->isoFormat('dddd, D MMMM Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
    </article>
@endsection

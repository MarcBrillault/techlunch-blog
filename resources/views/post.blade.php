@extends('layouts.2col')

@section('seoTitle')
    {{ $post->title }}
@endsection

@section('col1')
    <!-- Title -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="#">Start Bootstrap</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on {{ $post->created_at }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Post Content -->
    @if($post->lead)
        <p class="lead">{{ $post->lead }}</p>
    @endif

    {!! Markdown::parse($post->text) !!}

    <hr>

    @include('includes.comments')
@endsection

@section('col2')
    @include('includes.search')
    @include('includes.categories')
    @include('includes.side')
@endsection
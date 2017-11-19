@extends('layouts.2col')

@section('col1')
    <h1 class="my-4">
        {{ env('APP_NAME') }}
    </h1>

    @foreach($posts as $post)
        <div class="card mb-4">
            <img class="card-img-top" src="{{ $post->homeImage }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->smallText }}</p>
                <a href="{{ route('post', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ $post->created_at }} by
                {{ $post->user->name }}
            </div>
        </div>
    @endforeach

    {{ $posts->links('paginator/home') }}
@endsection

@section('col2')
    @include('includes.search')
    @include('includes.categories')
    @include('includes.side')
@endsection
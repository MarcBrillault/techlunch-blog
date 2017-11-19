@extends('layouts.2col')

@section('col1')
    <h1 class="my-4">
        {{ env('APP_NAME') }}
    </h1>

    @foreach($posts as $post)
        <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->smallText }}</p>
                <a href="{{ route('post', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ $post->created_at }} by
                <a href="#">Start Bootstrap</a>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
@endsection

@section('col2')
    @include('includes.search')
    @include('includes.categories')
    @include('includes.side')
@endsection
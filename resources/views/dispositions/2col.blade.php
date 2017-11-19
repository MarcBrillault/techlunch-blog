@extends('main')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            @yield('col1')
        </div>
        <div class="col-md-4">
            @yield('col2')
        </div>
    </div>
@endsection
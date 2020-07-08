@extends('layouts.app')

@section('content')

    <div id="app">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">

                <page-title></page-title>

                <!-- <example-component></example-component> -->

                <div class="links">
                    <a href="/" id="current">Home</a>
                    <a href="blog">Blog</a>
                    <a href="portfolio">Portfolio</a>
                    <a href="https://github.com/ebitikofer">GitHub</a>
                    <a href="art">Art</a>
                    <a href="about">About</a>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

@endsection


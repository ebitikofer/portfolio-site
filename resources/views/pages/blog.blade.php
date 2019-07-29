@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref quarter-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <a id="l1">B<a><a id="l2">l<a><a id="l3">o<a><a id="l4">g<a>
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a id="current">Blog</a>
                <a href="portfolio">Portfolio</a>
                <a href="https://github.com/ebitikofer">GitHub</a>
                <a href="art">Art</a>
                <a href="about">About</a>
            </div>
        </div>
    </div>

@endsection

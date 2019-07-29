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
                <a id="l1">A<a><a id="l2">b<a><a id="l3">o<a><a id="l4">u<a><a id="l5">t<a>
            </div>

        <div class="links">
            <a href="/">Home</a>
            <a href="blog">Blog</a>
            <a href="portfolio">Portfolio</a>
            <a href="https://github.com/ebitikofer">GitHub</a>
            <a href="art">Art</a>
            <a id="current">About</a>
        </div>
    </div>
</div>

@endsection

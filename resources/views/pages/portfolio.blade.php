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
                <a id="l1">P<a><a id="l2">o<a><a id="l3">r<a><a id="l4">t<a><a id="l5">f<a><a id="l6">o<a><a id="l7">l<a><a id="l8">i<a><a id="l9">o<a>
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a href="blog">Blog</a>
                <a id="current">Portfolio</a>
                <a href="https://github.com/ebitikofer">GitHub</a>
                <a href="art">Art</a>
                <a href="about">About</a>
            </div>
        </div>
    </div>

@endsection

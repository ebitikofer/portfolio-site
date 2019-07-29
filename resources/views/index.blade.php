@extends('layouts.app')

@section('content')

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
            <div class="title m-b-md-ind">
                <a id="l1">E<a><a id="l2">r<a><a id="l3">i<a><a id="l4">c<a>
                <a id="l6">B<a><a id="l7">i<a><a id="l8">t<a><a id="l9">i<a><a id="l10">k<a><a id="l11">o<a><a id="l12">f<a><a id="l13">e<a><a id="l14">r<a>
            </div>

            <div class="links">
                <a href="blog" id="current">Home</a>
                <a href="blog">Blog</a>
                <a href="portfolio">Portfolio</a>
                <a href="https://github.com/ebitikofer">GitHub</a>
                <a href="art">Art</a>
                <a href="about">About</a>
            </div>
        </div>
    </div>

@endsection


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

                <type-title></type-title>

                <navigation-bar :current="'home'"></navigation-bar>

            </div>

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection


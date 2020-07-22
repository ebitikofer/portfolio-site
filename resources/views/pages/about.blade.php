@extends('layouts.app')

@section('content')

    <div id="app">

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'{{ Request::path() }}'"></header-title>

        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection

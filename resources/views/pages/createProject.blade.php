@extends('layouts.app')

@section('content')

    <div id="app">

        <?php
            $links = '[{ "id": "< portfolio", "url": "/portfolio", "isCurrent": false }]';
        ?>

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'Create Project'" :links="{{ $links }}"></header-title>

        </div>

        <div class="form-wrapper">

            {!!Form::open(['action' => 'PortfolioController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                {{Form::text('name', '', ['placeholder' => 'Project Name'])}}
                {{Form::textarea('description', '', ['placeholder' => 'Project Description'])}}
                {{Form::file('cover_image')}}
                {{Form::submit('submit')}}
            {!! Form::close() !!}

        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection


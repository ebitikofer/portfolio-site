@extends('layouts.app')

@section('content')

    <div id="app">

        <?php
            $links = '[{ "id": "< project", "url": "/portfolio/'.$project_id.'", "isCurrent": false }]';
        ?>

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'Upload Photo'" :links="{{ $links }}"></header-title>

        </div>

        <div class="form-wrapper">

            {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                {{Form::text('title', '', ['placeholder' => 'Photo Name'])}}
                {{Form::textarea('description', '', ['placeholder' => 'Photo Description'])}}
                {{Form::hidden('project_id', $project_id)}}
                {{Form::file('photo')}}
                {{Form::submit('submit')}}
            {!! Form::close() !!}

        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection


@extends('layouts.app')

@section('content')

    {!!Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        {{Form::text('title', '', ['placeholder' => 'Photo Name'])}}
        {{Form::textarea('description', '', ['placeholder' => 'Photo Description'])}}
        {{Form::hidden('project_id', $project_id)}}
        {{Form::file('photo')}}
        {{Form::submit('submit')}}
    {!! Form::close() !!}

@endsection


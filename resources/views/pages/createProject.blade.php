@extends('layouts.app')

@section('content')

    {!!Form::open(['action' => 'PortfolioController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        {{Form::text('name', '', ['placeholder' => 'Project Name'])}}
        {{Form::textarea('description', '', ['placeholder' => 'Project Description'])}}
        {{Form::file('cover_image')}}
        {{Form::submit('submit')}}
    {!! Form::close() !!}

@endsection


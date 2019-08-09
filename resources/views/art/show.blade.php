@extends('layouts.app')

@section('content')

<h1>{{$photo->title}}</h1>
<p>{{$photo->description}}</p>
<a href="/portfolio/{{$photo->project_id}}">Project</a>
<hr>
<img class="thumbnail" src="/storage/photos/{{$photo->project_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
<br><br>
{!!Form::open(['action' => ['ProjectController@destroy', $photo->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'button alert'])}}
{!! Form::close() !!}
<hr>
<small>Size: {{$photo->size}}</small>
@endsection

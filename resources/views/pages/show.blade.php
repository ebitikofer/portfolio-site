@extends('layouts.app')

@section('content')

<h1>{{$project->name}}</h1>
<a href="/portfolio">Portfolio</a>
<a href="/project/create/{{$project->id}}">Upload</a>

@if(count($project->photos) > 0)

<?php
    $colcount = count($project->photos);
    $i = 1;
?>

<div id="photos">
    <div class="grid-x text-center">
    @foreach($project->photos as $photo)
        @if($i == $colcount)
        <div class="cell small-4 end">
            <a href="/project/{{$photo->id}}">
                <img class="thumbnail scaled-thumb" src="/storage/photos/{{$photo->project_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
            </a>
            <br>
            <h4>{{$photo->title}}</h4>
        @else
        <div class="cell small-4">
            <a href="/project/{{$photo->id}}">
                <img class="thumbnail scaled-thumb" src="/storage/photos/{{$photo->project_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
            </a>
            <br>
            <h4>{{$photo->title}}</h4>
        @endif
        @if($i % 3 == 0)
            </div></div><div class="grid-x text-center">
        @else
            </div>
        @endif
        <?php $i++; ?>
    @endforeach
    </div>
</div>

@else

<div class="flex-center position-ref">
    <p>No Photos to display!</p>
</div>

@endif

@endsection

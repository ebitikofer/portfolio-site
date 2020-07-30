@extends('layouts.app')

@section('content')

    <div id="app">

        <?php
            $links = '[{ "id": "< project", "url": "/portfolio/'.$photo->project_id.'", "isCurrent": false }]';
        ?>

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'{{ $photo->title }}'" :description="'{{ $photo->description }}'" :links="{{ $links }}"></header-title>

        </div>

        <br>

        <!-- <hr> -->

        <portfolio-image link="" :src="`/storage/photos/{{ $photo->project_id }}/{{ $photo->photo }}`" :title="`{{ $photo->title }}`" :delay="0"></portfolio-image>

        <!-- <img class="thumbnail" src="/storage/photos/{{$photo->project_id}}/{{$photo->photo}}" alt="{{$photo->title}}"> -->

        <br><br>

        {!!Form::open(['action' => ['ProjectController@destroy', $photo->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'button alert'])}}
        {!! Form::close() !!}

        <!-- <hr> -->

        <small>Size: {{$photo->size}}</small>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection

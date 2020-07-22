@extends('layouts.app')

@section('content')

    <div id="app">

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'{{ Request::path() }}'"></header-title>

        </div>

        <br>

        @if(count($projects) > 0)

            <?php
                $colcount = count($projects);
                $i = 1;
            ?>

            <div id="projects">
                <div class="grid-x text-center">
                @foreach($projects as $project)
                    @if($i == $colcount)
                    <div class="cell small-4 end">
                        <a href="/portfolio/{{$project->id}}">
                            <img class="thumbnail scaled-thumb" src="/storage/project_covers/{{$project->cover_image}}" alt="{{$project->name}}">
                        </a>
                        <br>
                        <h4>{{$project->name}}</h4>
                    @else
                    <div class="cell small-4">
                        <a href="/portfolio/{{$project->id}}">
                            <img class="thumbnail scaled-thumb" src="/storage/project_covers/{{$project->cover_image}}" alt="{{$project->name}}">
                        </a>
                        <br>
                        <h4>{{$project->name}}</h4>
                    @endif
                    @if($i % 3 == 0)
                        </div>
                        </div><div class="grid-x text-center">
                    @else
                        </div>
                    @endif
                    <?php $i++; ?>
                @endforeach
                </div>
            </div>
        @else
            <div class="flex-center position-ref">
                <p>No projects to display!</p>
            </div>
        @endif

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection

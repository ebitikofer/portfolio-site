@extends('layouts.app')

@section('content')

    <div class="flex-center position-ref quarter-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <a id="l1">P<a><a id="l2">o<a><a id="l3">r<a><a id="l4">t<a><a id="l5">f<a><a id="l6">o<a><a id="l7">l<a><a id="l8">i<a><a id="l9">o<a>
            </div>

            <div class="links">
                <a href="/">Home</a>
                <a href="blog">Blog</a>
                <a id="current">Portfolio</a>
                <a href="https://github.com/ebitikofer">GitHub</a>
                <a href="art">Art</a>
                <a href="about">About</a>
            </div>

            @if(count($projects) > 0)

                <?php
                    $colcount = count($projects);
                    $i = 1;
                ?>

                <div id="projects">
                    <div class="row text-center">
                    @foreach($projects as $project)
                        @if($i == $colcount)
                        <div class="medium-4 columns end">
                            <a href="/portfolio/{{$project->id}}">
                                <img class="thumbnail" src="storage/project_covers/{{$project->cover_image}}" alt="{{$project->name}}">
                            </a>
                            <br>
                            <h4>{{$project->name}}</h4>
                        @else
                        <div class="medium-4 columns">
                            <a href="/portfolio/{{$project->id}}">
                                <img class="thumbnail" src="storage/project_covers/{{$project->cover_image}}" alt="{{$project->name}}">
                            </a>
                            <br>
                            <h4>{{$project->name}}</h4>
                        @endif
                        @if($i % 3 == 0)
                            </div></div><div class="row text-center">
                        @else
                            </div>
                        @endif
                        <?php $i++; ?>
                    @endforeach
                    </div>
                </div>
            
            @else

                <p>No projects to display!</p>
                
            @endif

        </div>

    </div>

@endsection

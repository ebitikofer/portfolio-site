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
                <div class="grid-x text-center projects-outer">
                @foreach($projects as $project)
                    @if($i == $colcount)
                    <div class="cell small-4 end">
                        <project-image :project="{{ $project }}" :delay="{{ $i }}"></project-image>
                    @else
                    <div class="cell small-4">
                        <project-image :project="{{ $project }}" :delay="{{ $i }}"></project-image>
                    @endif
                    @if($i % 3 == 0)
                        </div>
                        </div><div class="grid-x text-center projects-outer">
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

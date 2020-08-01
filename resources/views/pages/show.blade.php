@extends('layouts.app')

@section('content')

    <div id="app">

        <?php
            $links = '[{ "id": "< portfolio", "url": "/portfolio", "isCurrent": false }, { "id": "upload", "url": "/project/create/'.$project->id.'", "isCurrent": false }]';
        ?>

        <div class="flex-center position-ref quarter-height">

            <header-title :current-page="'{{ $project->name }}'" :links="{{ $links }}"></header-title>

        </div>

        <br>

        @if(count($project->photos) > 0)

            <?php
                $colcount = count($project->photos);
                $i = 1;
            ?>

            <div id="photos">
                <div class="grid-x text-center projects-outer">
                @foreach($project->photos as $photo)
                    @if($i == $colcount)
                    <div class="cell small-4 end">
                        <portfolio-image :link="`/project/{{ $photo->id }}`" :src="`/storage/photos/{{ $photo->project_id }}/{{ $photo->photo }}`" :title="`{{ $photo->title }}`" :delay="{{ $i }}"></portfolio-image>
                    @else
                    <div class="cell small-4">
                        <portfolio-image :link="`/project/{{ $photo->id }}`" :src="`/storage/photos/{{ $photo->project_id }}/{{ $photo->photo }}`" :title="`{{ $photo->title }}`" :delay="{{ $i }}"></portfolio-image>
                    @endif
                    @if($i % 3 == 0)
                        </div></div><div class="grid-x text-center projects-outer">
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

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

@endsection

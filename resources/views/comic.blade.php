@extends('layouts.main')

@section('content')
<div>
    <jumbotron id="content w-100">
        <div id="top-jumbotron" class="w-100"></div>
        <div id="single-comic">
            @foreach ($comics as $comic)
            <h1>{{ $comic['title'] }}</h1>


            @endforeach
        </div>
    </jumbotron>

</div>
@endsection
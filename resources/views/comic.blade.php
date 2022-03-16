@extends('layouts.main')

@section('content')
<div>
    <jumbotron id="content w-100">
        <div id="top-jumbotron" class="w-100"></div>
        <div id="single-comic">
            <div class="container">
                <div class="col-left">
                    <h2>{{ $comic['title'] }}</h2>
                </div>
                <div class="col-right">
                    <span>ADVERTISEMENT</span>
                    <figure>
                        <img src="{{ asset('img/adv.jpg')" alt="Logo pubblicitario">
                    </figure>
                </div>
            </div>
        </div>
    </jumbotron>

</div>
@endsection
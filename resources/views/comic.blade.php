@extends('layouts.main')

@section('content')
<div>
    <jumbotron id="content w-100">
        <div id="top-jumbotron" class="w-100"></div>
        <div id="single-comic">
            <div class="container">
                <div class="col-left">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="green-table">
                        <div class="price">
                            <span>U.S. Price: {{ $comic['price'] }}</span>
                        </div>
                        <div class="available">
                            <span>
                                Check Availability
                            </span>
                        </div>
                    </div>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
                <div class="col-right">
                    <span>ADVERTISEMENT</span>
                    <figure>
                        <img src="{{ asset('img/sup.jpg') }}" alt="Logo pubblicitario">
                    </figure>
                </div>
            </div>
        </div>
        <div id="specify-content">
            <div class="container">
                <div id="talent">
                    <h5>Talent</h5>
                    <p>Art by:

                        @foreach ($comic['artists'] as $artist)
                        <a href="#">
                            {{ $artist }},
                        </a>
                        @endforeach
                    </p>

                    <p>Written by:

                        @foreach ($comic['writers'] as $writer)
                        <a href="#">
                            {{ $writer }},
                        </a>
                        @endforeach
                    </p>
                </div>
                <div id="specs">
                    <h5>Specs</h5>
                </div>
            </div>
        </div>
    </jumbotron>

</div>
@endsection
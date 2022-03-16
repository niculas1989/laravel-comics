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
                    <h2>Talent</h2>
                    <hr>
                    <div class="justify">
                        <span>Art by:</span>

                        <span>
                            @foreach ($comic['artists'] as $artist)
                            <a href="#">
                                {{ $artist }},
                            </a>
                            @endforeach
                        </span>
                    </div>
                    <hr>
                    <div class="justify">
                        <span>Written by:</span>

                        <span>
                            @foreach ($comic['writers'] as $writer)
                            <a href="#">
                                {{ $writer }},
                            </a>
                            @endforeach
                        </span>
                    </div>
                    <hr>
                </div>
                <div id="specs">
                    <h2>Specs</h2>
                    <hr>
                    <div class="justify">
                        <span>Series</span>
                        <span>
                            <a href="#">
                                {{ $comic['series'] }}
                            </a>
                        </span>
                    </div>
                    <hr>
                    <div class="justify">
                        <span>Series</span>
                        <span>
                            {{ $comic['price'] }}
                        </span>
                    </div>
                    <hr>
                    <div class="justify">
                        <span>Series</span>
                        <span>
                            {{ $comic['sale_date'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </jumbotron>

</div>
@endsection
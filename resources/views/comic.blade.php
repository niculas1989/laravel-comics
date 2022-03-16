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
                </div>
                <div class="col-right">
                    <span>ADVERTISEMENT</span>
                    <figure>
                        <img src="{{ asset('img/sup.jpg') }}" alt="Logo pubblicitario">
                    </figure>
                </div>
            </div>
        </div>
    </jumbotron>

</div>
@endsection
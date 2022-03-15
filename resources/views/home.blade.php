<?php

$comics = config('comics');

?>
@extends('layouts.main')

@section('content')
<div>
    <jumbotron id="content w-100">
        <div id="top-jumbotron" class="w-100"></div>
        <div class="container">
            <section id="comics" class="container">

                @foreach ($comics as $comic)
                <div class="single-card">
                    <img src=" {{$comic['thumb']}}" class="card-img-top m-3" alt="{{ $comic['series'] }}" />
                    <p class="">{{ $comic['series'] }}</p>
                </div>
                @endforeach

            </section>
        </div>
    </jumbotron>
    <div>
        <div id="blue-content">
            <div class="container">
                <div id="merchandising">
                    <figure>
                        <a href="#">
                            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" />
                            <span>DIGITAL COMICS</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="" />
                            <span>DC MERCHANDISE</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="" />
                            <span>SUBSCRIPTION</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="" />
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </figure>
                    <figure>
                        <a href="#">
                            <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="" />
                            <span>DC POWER VISA</span>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
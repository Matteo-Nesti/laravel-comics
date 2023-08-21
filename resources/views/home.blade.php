@extends('layouts.main')
@section('main-content')
    <section id="jumbo">
        <figure>
            <img src="{{ asset('images/jumbotron.jpg') }}" alt="comics">
        </figure>
    </section>


    <section id="comics-section">
        <div class="container">
            <div class="label">
                CURRENT SERIES
            </div>

            <div class="row">
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h4>{{ $comic['series'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="load-btn">
            <a href="#">LOAD MORE</a>
        </div>
    </section>

    <section id="info-section">
        <div class="container">

            <div class="wrapper">
                <div class="info-link">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    DIGITAL COMICS
                </div>

                <div class="info-link">
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    DC MERCHANDISING
                </div>

                <div class="info-link">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    SUBSCRIPTION
                </div>

                <div class="info-link">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    COMICS SHOP LOCATOR
                </div>

                <div class="info-link">
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    DC POWER VISA
                </div>
            </div>
        </div>
    </section>
@endsection

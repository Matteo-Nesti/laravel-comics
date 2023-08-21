<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC COMICS</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <div id="info-header">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            DC POWER VISA
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ADDITIONAL DC SITES
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="header-nav" class="container">

            <figure>
                <img src="{{ asset('images/dc-logo.png') }}" alt="">
            </figure>

            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="#">{{ $link }}</a>
                    </li>
                @endforeach
            </ul>

            <input type="text" placeholder="Search">

        </nav>
    </header>

    <main>

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

    </main>

    <footer>
        <section id="top-footer">
            <div class="container">
                <div class="row">
                    <div class="links">


                        <ul>
                            <li>
                                <h3>DC COMICS</h3>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <h3>SHOP</h3>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                        </ul>

                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <h3>DC</h3>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                        </ul>
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <h3>SITES</h3>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                            <li>
                                <a href="#">lorem</a>
                            </li>
                        </ul>
                    </div>

                    <div class="logo-bg">
                    </div>
                </div>

            </div>
        </section>

        <section id="bottom-footer">

            <div class="container">

                <div class="row">
                    <div>
                        <a href="#" class="btn-footer">SIGN UP NOW!</a>
                    </div>

                    <div class="footer-social-link">
                        <h4>FOLLOW US</h4>
                        <a href="#">
                            <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                        </a>

                        <a href="#">
                            <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
                        </a>
                    </div>
                </div>

            </div>

        </section>
    </footer>
</body>

</html>

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

        </nav>
    </header>
</body>

</html>

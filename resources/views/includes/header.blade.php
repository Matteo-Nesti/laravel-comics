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

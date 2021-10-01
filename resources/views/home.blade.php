<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <div id="blue-line"></div>
        <div id="nav-bar">
            <div class="container">
                <div class="content">
                    <div class="logo">
                        <a href="#"><img alt="DC Logo" src="{{ asset('images/dc-logo.png') }}" /></a>
                    </div>
                    <div class="menu">
                        <ul class="header-menu">
                            <li><a href="#">CHARACTERS</a></li>
                            <li><a href="#">COMICS</a></li>
                            <li><a href="#">MOVIES</a></li>
                            <li><a href="#">TV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div id="top-jumbotron"></div>

        <div id="content">
            <div class="container">
                <div class="cdComics">
                    <div class="currentSeries text-white">CURRENT SERIES</div>
                    <div class="cdComics-list">
                        {{-- <div v-for="(DcCard, index) in CdComicsCards" :key="index" class="card">
                            <figure>
                                <img :src="DcCard.thumb" />
                            </figure>
                            <div class="nameDc">
                                <span class="text-white uppercase">{{ DcCard . series }}</span>
                            </div>
                        </div> --}}
                    </div>
                    <div>
                        <button class="button text-white clickable">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="nav-bar-menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row-pe">
                            <div class="col-4">
                                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" />
                            </div>
                            <div class="col-8">
                                <span>DIGITAL COMICS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row-pe">
                            <div class="col-4">
                                <img src="{{ asset('images/buy-comics-merchandise.png') }}" />
                            </div>
                            <div class="col-8">
                                <span>DC MERCHADISE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row-pe">
                            <div class="col-4">
                                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" />
                            </div>
                            <div class="col-8">
                                <span>SUBSCRIPTION</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row-pe">
                            <div class="col-4">
                                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" />
                            </div>
                            <div class="col-8">
                                <span>COMIC SHOP LOCATOR</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row-pe">
                            <div class="col-4">
                                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" />
                            </div>
                            <div class="col-8">
                                <span>DC POWER VISA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div id="jumbotron">
            <div class="container">
                <div class="row">
                    <!-- Links -->
                    <div class="col">
                        <div class="row-between">
                            <div class="col-3">
                                <!-- Vertical Column -->
                                <div class="row-column">
                                    <div class="col-8">
                                        <h2>DC COMICS</h2>
                                        <ul>
                                            <li>
                                                <a href="#">Characters</a>
                                            </li>
                                            <li>
                                                <a href="#">Comics</a>
                                            </li>
                                            <li>
                                                <a href="#">Movies</a>
                                            </li>
                                            <li>
                                                <a href="#">Tv</a>
                                            </li>
                                            <li>
                                                <a href="#">Games</a>
                                            </li>
                                            <li>
                                                <a href="#">Videos</a>
                                            </li>
                                            <li>
                                                <a href="#">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <h2>SHOP</h2>
                                        <ul>
                                            <li>
                                                <a href="#">Shop DC</a>
                                            </li>
                                            <li>
                                                <a href="#">Shop DC Collectibles</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <!-- DC Column -->
                                <h2>DC</h2>
                                <ul>
                                    <li>
                                        <a href="#">Term Of Use</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy policy (new)</a>
                                    </li>
                                    <li>
                                        <a href="#">Ad Choices</a>
                                    </li>
                                    <li>
                                        <a href="#">Advertising</a>
                                    </li>
                                    <li>
                                        <a href="#">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#">Subscriptions</a>
                                    </li>
                                    <li>
                                        <a href="#">Talent Workshop</a>
                                    </li>
                                    <li>
                                        <a href="#">CPSC Certificate</a>
                                    </li>
                                    <li>
                                        <a href="#">Ratings</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <!-- Sites Column -->
                                <h2>SITES</h2>
                                <ul>
                                    <li>
                                        <a href="#">DC</a>
                                    </li>
                                    <li>
                                        <a href="#">MAD Magazine</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Kids</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Universe</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Power Visa</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Logo Dc -->
                    <div class="col-logo">
                        <img src="{{ asset('images/dc-logo-bg.png') }}" />
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <input class="button" type="button" value="SIGN UP NOW!" />
                    </div>
                    <div class="col-2">
                        <div class="text-blue">FOLLOW US</div>
                        {{-- <ul>
                            <li v-for="(socialIcon, index) in socialIcons" :key="index">
                                <a href="#" class="social"><img :src="socialIcon.image"
                                        :alt="socialIcon.name" /></a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

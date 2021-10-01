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

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

<div id="details">
    <div class="line-blue">
        <div class="currentComic">
            <span class="top-text uppercase">{{ $comics[0]['type'] }}</span>
            <img src="{{ $comics[0]['thumb'] }}" />
            <span class="bot-text">VIEW GALLERY</span>
        </div>
    </div>
    <div class="container p-center">
        <div class="row">
            <div class="col-8">
                <h1 class="fs-25 uppercase text-details-color">{{ $comics[0]['title'] }}</h1>
                <div class="status-row text-white">
                    <div class="status-col-70 p-between">
                        <span>U.S. Price: {{ $comics[0]['price'] }}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="status-col-30">
                        <span>Check Availability <i class="fas fa-sort-down"></i></span>
                    </div>
                </div>
                <p class="my-lh">{{ $comics[0]['description'] }}</p>
            </div>
            <div class="col-4">
                <span class="text-right bold">ADVERTISEMENT</span>
                <div class="adv"></div>
            </div>
        </div>
    </div>
    <div id="comic-info">
        <div class="info-row">
            <div class="col-55">
                <h2 class="fs-20 bold title-col text-details-color">Talent</h2>
                <hr>
                <p class="talent text-details-color">Art by: <span
                        class="text-azure">{{ $comics[0]['artists'][0] }}</span></p>
                <hr>
                <p class="talent text-details-color">Written by: <span
                        class="text-azure">{{ $comics[0]['writers'][0] }}</span></p>
                <hr>
            </div>
            <div class="col-45">
                <h2 class="fs-20 bold title-col text-details-color">Specs</h2>
                <hr>
                <p class="specs text-details-color">Series: <span
                        class="text-azure uppercase">{{ $comics[0]['series'] }}</span></p>
                <hr>
                <p class="specs text-details-color">U.S. Price: {{ $comics[0]['price'] }}</p>
                <hr>
                <p class="specs text-details-color">On Sale Date: {{ $comics[0]['sale_date'] }}</p>
                <hr>
            </div>
        </div>
    </div>
</div>

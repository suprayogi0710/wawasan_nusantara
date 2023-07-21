@extends('layouts.mainlayout')
@section('title', 'Kaltim')


@section('carausel')
    <div class="carausels">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/carausel/kaltim_istana-sultan-kutai.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Istana Sultan Kutai</h5>
                        <p>Istana Sultan Kutai merupakan tempat bersejarah di kalimantan timur</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kaltim_keraton-sambaliung.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Keraton Sambaliung</h5>
                        <p>Keraton Sambaliung merupakan tempat yang ada di kalimantan timur</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kaltim_masjid-shiratal-mustaqiem.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Masjid Shiratal Mustaqiem</h5>
                        <p>Masjid Shiratal Mustaqiem merupakan masjid yang ada di kalimantan timur</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endsection

    @section('content')
        <div class="container">
            <!--
      <h1>MAKANAN KHAS ACEH</h1>
      <p>Makanan khas adalah sebuah makanan yang menjadi ciri khusus suatu daerah atau tempat, terutama
        daerah Nanggroe Aceh Darusallam yang memiliki beberapa ciri khas, antara lain.
      </p>-->
            @include('layouts.layout_kaltim.makanan')<br>
            @include('layouts.layout_kaltim.pakaian')<br>
            @include('layouts.layout_kaltim.tari_daerah')<br>
            @include('layouts.layout_kaltim.tempat_wisata')
            @include('layouts.layout_kaltim.komentar')

        </div>
    @endsection

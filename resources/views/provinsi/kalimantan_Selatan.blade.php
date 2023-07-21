@extends('layouts.mainlayout')
@section('title', 'Kalsel')


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
                    <img src="/assets/img/carausel/kalsel_kepulauan-pasir-putih.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Kepulauan Pasir Putih</h5>
                        <p>Kepulauan Pasir Putih merupakan kepulauan yang ada di kalimantan selatan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kalsel_Bukit-Kelam.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bukit Kelam</h5>
                        <p>Bukit Kelam merupakan tempat wisata yang ada di kalimantan selatan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kalsel_Pasar-Terapung-Lok-Baintan.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pasar Terapung Lok Baintan </h5>
                        <p>Pasar Terapung merupakan tempat yang ada dikalimantan selatan</p>
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
            @include('layouts.layout_kalsel.makanan')<br>
            @include('layouts.layout_kalsel.pakaian')<br>
            @include('layouts.layout_kalsel.tari_daerah')<br>
            @include('layouts.layout_kalsel.tempat_wisata')
            @include('layouts.layout_kalsel.komentar')

        </div>
    @endsection

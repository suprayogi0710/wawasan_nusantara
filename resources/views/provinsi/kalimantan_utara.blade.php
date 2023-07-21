@extends('layouts.mainlayout')
@section('title', 'Kalut')


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
                    <img src="/assets/img/carausel/kalut_pantai-simangkadu.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pantai Simangkadu</h5>
                        <p>Pantai Simangkadu merupakan pantai yang ada dikalimantan utara</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kalut_pantai-eching.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pantai Eching</h5>
                        <p>Pantai Eching merupakan salah satu pantai yang ada di kalimantan tengah</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/kalut_pantai-batu-lamampu.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pantai Batu Lamampu</h5>
                        <p>Pantai Batu Lamampu merupakan salah satu pantai yang ada di kalimantan tengah</p>
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
            @include('layouts.layout_kalut.makanan')<br>
            @include('layouts.layout_kalut.pakaian')<br>
            @include('layouts.layout_kalut.tari_daerah')<br>
            @include('layouts.layout_kalut.tempat_wisata')
            @include('layouts.layout_kalut.komentar')

        </div>
    @endsection

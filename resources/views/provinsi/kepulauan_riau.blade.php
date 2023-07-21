@extends('layouts.mainlayout')
@section('title', 'Kepulauan_riau')


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
                    <img src="/assets/img/carausel/pantai-nongsa-batam-riau.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pantai Nongsa Kepulauan Riau</h5>
                        <p>Pantai Nongsa adalah salah satu tempat wisata yang ada dikepulauan riau</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/pulau-bintankepulauanriau.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pulau Bintan</h5>
                        <p>Pulau Bintan salah satu pulau yang ada di kepulauan riau</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/jembatan-barelang-batam-kepulauan-riau.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jembatan Barelang</h5>
                        <p>Jembatan Barelang salah satu destinasi wisata di kepulauan riau</p>
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
            @include('layouts.layout_kepulauan_riau.makanan')<br>
            @include('layouts.layout_kepulauan_riau.pakaian')<br>
            @include('layouts.layout_kepulauan_riau.tari_daerah')<br>
            @include('layouts.layout_kepulauan_riau.tempat_wisata')
            @include('layouts.layout_kepulauan_riau.komentar')

        </div>
    @endsection

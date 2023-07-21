@extends('layouts.mainlayout')
@section('title', 'Sumbar')


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
                    <img src="/assets/img/carausel/sumbar_danau-singkarak.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Danau Singkarak</h5>
                        <p>Danau singkarat merupakan salah satu danau yang ada di sumatera barat</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/sumbar_jam-gadang.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jam Gadang</h5>
                        <p>Jam Gadang salah satu tempat wisata di sumatera barat</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/sumbar_ngarai-sianok.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ngarai Sianok</h5>
                        <p>Ngarai Sianok salah satu destinasi wisata di sumatera barat</p>
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
            @include('layouts.layout_sumbar.makanan')<br>
            @include('layouts.layout_sumbar.pakaian')<br>
            @include('layouts.layout_sumbar.tari_daerah')<br>
            @include('layouts.layout_sumbar.tempat_wisata')
            @include('layouts.layout_sumbar.komentar')
        </div>
    @endsection

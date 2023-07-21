@extends('layouts.mainlayout')
@section('title', 'Jateng')


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
                    <img src="/assets/img/carausel/jateng_candi-borobudur.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Candi Borobudur</h5>
                        <p>Candi Borobudur salah satu tempat wisata di jawa tengah</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/jateng_lawang-sewu.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lawang Sewu </h5>
                        <p>Lawang Sewu salah satu tempat wisata di jawa tengah</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/jateng-masjid_agung.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Masjid Agung</h5>
                        <p>Masjid Agung salah satu tempat ibadah terkenal di jawa tengah</p>
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
            @include('layouts.layout_jateng.makanan')<br>
            @include('layouts.layout_jateng.pakaian')<br>
            @include('layouts.layout_jateng.tari_daerah')<br>
            @include('layouts.layout_jateng.tempat_wisata')
            @include('layouts.layout_jateng.komentar')

        </div>
    @endsection

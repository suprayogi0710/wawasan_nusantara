@extends('layouts.mainlayout')

@push('style')
@endpush

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
                    <img src="/assets/img/carausel/sumsel1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jembatan Ampera</h5>
                        <p>Salah satu yang menjadi ciri khas kota Palembang</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/plg_masjidagung.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Masjid Agung</h5>
                        <p>Masjid Agung adalah salah satu tempa ibadah yang terkenal di Palembang</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carausel/plg-moenpera.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Monpera</h5>
                        <p>Monumen Penderitaan rakyat yang sering disebut (MONPERA)merupakan salah satu peninggal sejarah indonesia di Kota Palembang,
                        </p>
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
            @include('layouts.layout_sumsel.makanan')<br>
            @include('layouts.layout_sumsel.pakaian')<br>
            @include('layouts.layout_sumsel.tari_daerah')<br>
            @include('layouts.layout_sumsel.tempat_wisata')
            @include('layouts.layout_sumsel.komentar')
        </div>
    @endsection

    @push('scripts')
    @endpush

@extends('layouts.mainlayout')
@section('title', 'PROVINSI')

@section('content')
    <div class="container">
        <div class="title">
            <p class="text align-content-center mt-3  text-small"><B>DAFTAR PROVINSI DI INDONESIA</B></p>
            <p class="text align-content-center"><B>Negara Kesatuan Republik Indonesia (NKRI)</B></p>
            <p class="text align-content-center">Jumlah Provinsi : 38</p>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4 mt-4">

            @foreach ($provinces as $province)
                <a href="/provinsi/{{ $province->slug }}" div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/img/provinsi/' . $province->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font"><b> {{ $province->name }} </b></h5>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>

    <div class="container mt-5 pagination justify-content-center">
        <!-- PAGINATION-->
        {!! $provinces->links() !!}
    </div>

@endsection

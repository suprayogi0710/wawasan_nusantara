@extends('layouts.mainlayout')
@section('title', 'KUIS')

@section('content')
    <!-- Begin Header -->
    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="nav-link text-primary" id="navhighscorelink" role="button">Skor Tertingi</a>

            <span id="timer" style="margin-left: auto; margin-right: 1rem; color: red"></span>
        </nav>
        <!-- End Navigation bar -->
    </header>
    <!-- End Header -->

    <!-- Begin main -->
    <main>
        <br />
        <br />
        <!-- Begin container -->
        <div class="container">
            <!-- Begin card -->
            <div class="card shadow rounded border-info">
                <!-- Begin body -->
                <div class="card-body">
                    <!-- card title -->
                    <h2 class="card-title mb-4 text-info text-center" id="title">
                        Quis
                    </h2>

                    <hr class="line" />

                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-10">
                            <div id="mainContent">
                                <h5 class="text-center">
                                Berikut adalah Quiz seputar pengetahuan tentang Wawasan Nusantara yang ada di website ini, usahakan sebelum menjawab baca terlebih dahulu. Jawablah sesuai dengan jawaban yang benar!
                                </h5>

                                <div class="text-center">
                                    <button type="submit" id="startQuiz" class="btn bg-primary text-white rounded-pill mb-2">
                                        Mulai Quis
                                    </button>
                                </div>
                            </div>

                            <div id="quizContent" style="text-align: left;"></div>
                            <div id="score"></div>
                            <div id="highscores"></div>
                        </div>
                    </div>

                    <div id="answer">
                        <hr class="line" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End main -->
    @endsection

    @push('scripts')
        <script src="{{ asset('assets/js/quiz/questions.js') }}"></script>
        <script src="{{ asset('assets/js/quiz/script.js') }}"></script>
    @endpush

<?php

use Illuminate\Support\Facades\Route;
use App\Models\Province;
use App\Http\Controllers\{ProvinceController, CommentController};

//HOME//
Route::get('/', fn () => view('home'));

//PROVINSI//
Route::get('/provinsi', ProvinceController::class);

//TENTANG KAMI//
Route::get('/about_me', fn () => view('about_me'));

//KUIS//
Route::get('/quizzes', fn () => view('kuis'));

//SUMSEL//
Route::get('/provinsi/sumsel', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(1)->first();

    return view('provinsi/sumsel', ['province_comments' => $provinceComments]);
});

//SUMUT//
Route::get('/provinsi/sumut', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(2)->first();
    return view('provinsi/sumut', ['province_comments' => $provinceComments]);
});

//SUMBAR//
Route::get('/provinsi/sumbar', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(3)->first();

    return view('provinsi/sumbar', ['province_comments' => $provinceComments]);
});

//RIAU//
Route::get('/provinsi/riau', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(4)->first();

    return view('provinsi/riau', ['province_comments' => $provinceComments]);
});

//KEPULAUAN RIAU//
Route::get('/provinsi/kepulauan_riau', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(5)->first();

    return view('provinsi/kepulauan_riau', ['province_comments' => $provinceComments]);
});

//KALIMANTAN BARAT//
Route::get('/provinsi/kalimantan_barat', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(6)->first();

    return view('provinsi/kalimantan_barat', ['province_comments' => $provinceComments]);
});

//KALIMANTAN TIMUR//
Route::get('/provinsi/kalimantan_timur', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(7)->first();

    return view('provinsi/kalimantan_timur', ['province_comments' => $provinceComments]);
});

//KALIMANTAN SELATAN//
Route::get('/provinsi/kalimantan_selatan', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(8)->first();

    return view('provinsi/kalimantan_selatan', ['province_comments' => $provinceComments]);
});

//KALIMANTAN TENGAH//
Route::get('/provinsi/kalimantan_tengah', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(9)->first();

    return view('provinsi/kalimantan_tengah', ['province_comments' => $provinceComments]);
});

//KALIMANTAN UTARA//
Route::get('/provinsi/kalimantan_utara', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(10)->first();

    return view('provinsi/kalimantan_utara', ['province_comments' => $provinceComments]);
});

//JAWA BARAT//
Route::get('/provinsi/jawa_barat', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(11)->first();

    return view('provinsi/jawa_barat', ['province_comments' => $provinceComments]);
});

//JAWA TENGAH//
Route::get('/provinsi/jawa_tengah', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(12)->first();

    return view('provinsi/jawa_tengah', ['province_comments' => $provinceComments]);
});

//JAWA TIMUR//
Route::get('/provinsi/jawa_timur', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(13)->first();

    return view('provinsi/jawa_timur', ['province_comments' => $provinceComments]);
});

//SULAWESI BARAT//
Route::get('/provinsi/sulawesi_barat', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(14)->first();

    return view('provinsi/sulbar', ['province_comments' => $provinceComments]);
});

//SULAWESI TENGAH//
Route::get('/provinsi/sulawesi_tengah', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(15)->first();

    return view('provinsi/sulteng', ['province_comments' => $provinceComments]);
});

//SULAWESI UTARA//
Route::get('/provinsi/sulawesi_utara', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(16)->first();

    return view('provinsi/sulut', ['province_comments' => $provinceComments]);
});

//SULAWESI SELATAN//
Route::get('/provinsi/sulawesi_selatan', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(17)->first();

    return view('provinsi/sulsel', ['province_comments' => $provinceComments]);
});

//NUSA TENGGARA BARAT//
Route::get('/provinsi/ntb', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(18)->first();

    return view('provinsi/ntb', ['province_comments' => $provinceComments]);
});

//NUSA TENGGARA TIMUR//
Route::get('/provinsi/ntt', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(19)->first();

    return view('provinsi/ntt', ['province_comments' => $provinceComments]);
});

//NA ACEH//
Route::get('/provinsi/aceh', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(20)->first();

    return view('provinsi/aceh', ['province_comments' => $provinceComments]);
});

//LAMPUNG//
Route::get('/provinsi/lampung', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(21)->first();

    return view('provinsi/lampung', ['province_comments' => $provinceComments]);
});

//BANGKA BELITUNG//
Route::get('/provinsi/bangka_belitung', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(22)->first();

    return view('provinsi/bangka_belitung', ['province_comments' => $provinceComments]);
});

//JAMBI//
Route::get('/provinsi/jambi', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(23)->first();

    return view('provinsi/jambi', ['province_comments' => $provinceComments]);
});

//BENGKULU//
Route::get('/provinsi/bengkulu', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(24)->first();

    return view('provinsi/bengkulu', ['province_comments' => $provinceComments]);
});

//BANTEN//
Route::get('/provinsi/banten', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(25)->first();

    return view('provinsi/banten', ['province_comments' => $provinceComments]);
});

//DKI JAKARTA//
Route::get('/provinsi/dki_jakarta', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(26)->first();

    return view('provinsi/dki_jakarta', ['province_comments' => $provinceComments]);
});

//YOGYAKARTA//
Route::get('/provinsi/yogyakarta', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(27)->first();

    return view('provinsi/yogyakarta', ['province_comments' => $provinceComments]);
});

//BALI//
Route::get('/provinsi/bali', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(28)->first();

    return view('provinsi/bali', ['province_comments' => $provinceComments]);
});

//MALUKU//
Route::get('/provinsi/maluku', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(29)->first();

    return view('provinsi/maluku', ['province_comments' => $provinceComments]);
});

//MALUKU UTARA//
Route::get('/provinsi/maluku_utara', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(30)->first();

    return view('provinsi/maluku_utara', ['province_comments' => $provinceComments]);
});

//PAPUA//
Route::get('/provinsi/papua', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(31)->first();

    return view('provinsi/papua', ['province_comments' => $provinceComments]);
});

//PAPUA BARAT//
Route::get('/provinsi/papua_barat', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(32)->first();

    return view('provinsi/papua_barat', ['province_comments' => $provinceComments]);
});

//PAPUA TENGAH//
Route::get('/provinsi/papua_tengah', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(33)->first();

    return view('provinsi/papua_tengah', ['province_comments' => $provinceComments]);
});

//PAPUA PEGUNUNGAN//
Route::get('/provinsi/papua_pegunungan', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(34)->first();

    return view('provinsi/papua_pegunungan', ['province_comments' => $provinceComments]);
});

//PAPUA SELATAN//
Route::get('/provinsi/papua_selatan', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(35)->first();

    return view('provinsi/papua_selatan', ['province_comments' => $provinceComments]);
});

//PAPUA BARAT DAYA//
Route::get('/provinsi/papua_barat_daya', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(36)->first();

    return view('provinsi/papua_barat_daya', ['province_comments' => $provinceComments]);
});

//PAPUA GORONTALO//
Route::get('/provinsi/gorontalo', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(37)->first();

    return view('provinsi/gorontalo', ['province_comments' => $provinceComments]);
});

//PAPUA SULAWESI TENGGARA//
Route::get('/provinsi/sulawesi_tenggara', function () {
    $provinceComments = Province::with([
        'comments' => fn ($q) => $q->with([ // lvl.1
            'replies'
        ])
    ])->whereId(38)->first();

    return view('provinsi/sultengg', ['province_comments' => $provinceComments]);
});

//KOMENTAR//
Route::prefix('comment')->controller(CommentController::class)->group(function () {
    Route::post('/store', 'store');
    Route::post('/store-reply', 'storeReply');
    Route::post('/save-likedislike', 'save_likedislike');
});

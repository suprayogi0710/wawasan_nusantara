<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function __invoke()
    {
        $data['province_count'] = Province::count();

        $data['provinces'] = Province::paginate(12);

        return view('provinsi', compact('data'));
    }
}

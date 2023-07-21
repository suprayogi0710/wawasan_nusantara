<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function __invoke()
    {
        $provinces = Province::latest()->paginate(12);

        return view('provinsi', compact('provinces'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index()
    {
        $data['indonesia'] = Http::get('https://api.kawalcorona.com/indonesia')->json();
        $data['provinsi_indonesia'] = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json())->flatten(1);

        return view('dashboard', $data);
    }

    public function data_global()
    {
        $data['global'] = collect(Http::get('https://api.kawalcorona.com/')->json())->flatten(1);
        $data['positif'] = Http::get('https://api.kawalcorona.com/positif')->json();
        $data['sembuh'] = Http::get('https://api.kawalcorona.com/sembuh')->json();
        $data['meninggal'] = Http::get('https://api.kawalcorona.com/meninggal')->json();

        return view('data-global', $data);
    }
}

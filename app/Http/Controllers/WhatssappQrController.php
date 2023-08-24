<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatssappQrController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'key' => 'mysupersecretkey'
        ])->get('https://wapro.manifestasi.my.id/start-session?scan=true', [
            'session' => 'mysession'
        ]);

        $data = $response->json();

        return view('coba', [
            'qr' => $data['data']['qr']
        ]);
    }
}

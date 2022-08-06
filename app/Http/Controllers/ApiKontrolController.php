<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserKontrol;

class ApiKontrolController extends Controller
{
    public function TerasRumah()
    {
        $data = UserKontrol::first()->teras_rumah;
        return $data;
    }

    public function RuangTamu()
    {
        $data = UserKontrol::first()->ruang_tamu;
        return $data;
    }

    public function KamarUtama()
    {
        $data = UserKontrol::first()->kamar_utama;
        return $data;
    }

    public function KamarKedua()
    {
        $data = UserKontrol::first()->kamar_kedua;
        return $data;
    }

    public function Dapur()
    {
        $data = UserKontrol::first()->dapur;
        return $data;
    }

    public function Toilet()
    {
        $data = UserKontrol::first()->toilet;
        return $data;
    }
}

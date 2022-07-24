<?php

namespace App\Http\Controllers;

use App\Models\UserKontrol;
use Illuminate\Http\Request;

class KontrolOnOffController extends Controller
{
    public function Teras_Rumah($status)
    {
        $data = UserKontrol::first();
        $data->teras_rumah = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }

    public function Ruang_Tamu($status)
    {
        $data = UserKontrol::first();
        $data->ruang_tamu = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }

    public function Kamar_Utama($status)
    {
        $data = UserKontrol::first();
        $data->kamar_utama = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }

    public function Kamar_Kedua($status)
    {
        $data = UserKontrol::first();
        $data->kamar_kedua = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }

    public function Dapur($status)
    {
        $data = UserKontrol::first();
        $data->dapur = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }

    public function Toilet($status)
    {
        $data = UserKontrol::first();
        $data->toilet = $status == 'on' ? '1' : '2';
        $data->update();
        return $data;
    }
}

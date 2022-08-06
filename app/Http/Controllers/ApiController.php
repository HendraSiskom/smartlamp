<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanData;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function kirim_data(Request $request, $Watt){
        $today = Carbon::now()->isoFormat('dddd');
        if($today == "Senin"){
            $kodeHari = 1;
        } else if ($today == "Selasa"){
            $kodeHari = 2;
        } else if ($today == "Rabu"){
            $kodeHari = 3;
        } else if ($today == "Kamis"){
            $kodeHari = 4;
        } else if ($today == "Jumat"){
            $kodeHari = 5;
        } else if ($today == "Sabtu"){
            $kodeHari = 6;
        } else {
            $kodeHari = 7;
        }
        $data = [
            'kode_hari' => $kodeHari,
            'teras_rumah' => $Watt,
            'ruang_tamu' => $Watt,
            'kamar_utama' => $Watt,
            'kamar_kedua' => $Watt,
            'dapur' => $Watt,
            'toilet' => $Watt,
        ];
        LaporanData::create($data);
        return true;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanData;

class ApiController extends Controller
{
    public function kirim_data(Request $request, $Watt){
        $data = [
            'kode_hari' => 1,
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

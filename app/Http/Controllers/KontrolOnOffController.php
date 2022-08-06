<?php

namespace App\Http\Controllers;

use App\Models\UserKontrol;
use App\Models\LogKontrol;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KontrolOnOffController extends Controller
{
    public function Teras_Rumah($status)
    {
        $data = UserKontrol::first();
        $data->teras_rumah = $status == 'on' ? '1' : '2';
        $data->update();

        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }

    public function Ruang_Tamu($status)
    {
        $data = UserKontrol::first();
        $data->ruang_tamu = $status == 'on' ? '1' : '2';
        $data->update();
        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }

    public function Kamar_Utama($status)
    {
        $data = UserKontrol::first();
        $data->kamar_utama = $status == 'on' ? '1' : '2';
        $data->update();
        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }

    public function Kamar_Kedua($status)
    {
        $data = UserKontrol::first();
        $data->kamar_kedua = $status == 'on' ? '1' : '2';
        $data->update();
        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }

    public function Dapur($status)
    {
        $data = UserKontrol::first();
        $data->dapur = $status == 'on' ? '1' : '2';
        $data->update();
        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }

    public function Toilet($status)
    {
        $data = UserKontrol::first();
        $data->toilet = $status == 'on' ? '1' : '2';
        $data->update();
        $today = Carbon::now()->isoFormat('dddd');
        $tanggal = Carbon::now()->isoFormat('dddd, Y-M-d');
        $waktu = Carbon::now()->format('H:i:s');
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
        $datalogkontrol = [
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kode_hari' => $kodeHari,
            'teras_rumah' => $data->teras_rumah,
            'ruang_tamu' => $data->ruang_tamu,
            'kamar_utama' => $data->kamar_utama,
            'kamar_kedua' => $data->kamar_kedua,
            'dapur' => $data->dapur,
            'toilet' => $data->toilet,
        ];
        LogKontrol::create($datalogkontrol);
        return true;
    }
}

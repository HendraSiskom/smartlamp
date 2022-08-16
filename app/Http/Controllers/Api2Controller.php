<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use App\Models\LaporanData2;
use App\Models\LogKontrol;
use App\Models\UserKontrol;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Api2Controller extends Controller
{
    public function kirim_data2(Request $request, $Watt4, $Watt5, $Watt6){
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
            'kamar_kedua' => $Watt4,
            'dapur' => $Watt5,
            'toilet' => $Watt6
        ];
        LaporanData2::create($data);

        //logika otomatis
		$jam_sekarang = date('H:i');
        $dataKontrol = Kontrol::first();

        if ($dataKontrol->status == 'otomatis') {
            //logika kamar kedua
            if($dataKontrol->kamar_kedua_on < $dataKontrol->kamar_kedua_off){
                if ($jam_sekarang >= $dataKontrol->kamar_kedua_on && $jam_sekarang < $dataKontrol->kamar_kedua_off ) {
                    $kontrol['kamar_kedua'] = '1';
                } else {
                    $kontrol['kamar_kedua'] = '2';
                }
            }else {
                $kontrol['kamar_kedua'] = '2';
            }
        
            //logika dapur
            if($dataKontrol->dapur_on < $dataKontrol->dapur_off){
                if ($jam_sekarang >= $dataKontrol->dapur_on && $jam_sekarang < $dataKontrol->dapur_off ) {
                    $kontrol['dapur'] = '1';
                } else {
                    $kontrol['dapur'] = '2';
                }
            }else {
                $kontrol['dapur'] = '2';
            }

            //logika toilet
            if($dataKontrol->toilet_on < $dataKontrol->toilet_off){
                if ($jam_sekarang >= $dataKontrol->toilet_on && $jam_sekarang < $dataKontrol->toilet_off ) {
                    $kontrol['toilet'] = '1';
                } else {
                    $kontrol['toilet'] = '2';
                }
            }else {
                $kontrol['toilet'] = '2';
            }
            UserKontrol::updateOrCreate(['id' => 1], $kontrol);
            $data = UserKontrol::first();
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

        }
        return true;
    }
}

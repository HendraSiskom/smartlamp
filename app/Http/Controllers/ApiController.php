<?php

namespace App\Http\Controllers;

use App\Models\Kontrol;
use Illuminate\Http\Request;
use App\Models\LaporanData;
use App\Models\LogKontrol;
use App\Models\UserKontrol;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function kirim_data(Request $request, $Watt1, $Watt2, $Watt3){
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
            'teras_rumah' => $Watt1,
            'ruang_tamu' => $Watt2,
            'kamar_utama' => $Watt3
        ];
        LaporanData::create($data);

        //logika otomatis
		$jam_sekarang = date('H:i');
        $dataKontrol = Kontrol::first();

        if ($dataKontrol->status == 'otomatis') {
            //logika teras rumah
            if($dataKontrol->teras_rumah_on < $dataKontrol->teras_rumah_off){
                if ($jam_sekarang >= $dataKontrol->teras_rumah_on && $jam_sekarang < $dataKontrol->teras_rumah_off ) {
                    $kontrol['teras_rumah'] = '1';
                } else {
                    $kontrol['teras_rumah'] = '2';
                }
            }else {
                $kontrol['teras_rumah'] = '2';
            }
        
            //logika ruang tamu
            if($dataKontrol->ruang_tamu_on < $dataKontrol->ruang_tamu_off){
                if ($jam_sekarang >= $dataKontrol->ruang_tamu_on && $jam_sekarang < $dataKontrol->ruang_tamu_off ) {
                    $kontrol['ruang_tamu'] = '1';
                } else {
                    $kontrol['ruang_tamu'] = '2';
                }
            }else {
                $kontrol['ruang_tamu'] = '2';
            }

            //logika kamar utama
            if($dataKontrol->kamar_utama_on < $dataKontrol->kamar_utama_off){
                if ($jam_sekarang >= $dataKontrol->kamar_utama_on && $jam_sekarang < $dataKontrol->kamar_utama_off ) {
                    $kontrol['kamar_utama'] = '1';
                } else {
                    $kontrol['kamar_utama'] = '2';
                }
            }else {
                $kontrol['kamar_utama'] = '2';
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

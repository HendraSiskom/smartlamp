<?php

namespace Database\Seeders;

use App\Models\UserKontrol;
use Illuminate\Database\Seeder;

class KontrolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserKontrol::create([
            'teras_rumah'  => 'coba',
            'ruang_tamu'   => 'coba@gmail.com',
            'kamar_utama'  => 'coba@gmail.com',
            'kamar_kedua'  => 'coba@gmail.com',
            'dapur'        => 'coba@gmail.com',
            'toilet'       => 'coba@gmail.com',
        ]);
    }
}

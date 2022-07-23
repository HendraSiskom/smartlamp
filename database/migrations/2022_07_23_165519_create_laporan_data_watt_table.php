<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanDataWattTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_data_watt', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('waktu');
            $table->integer('kode_hari');
            $table->float('total_watt_teras_rumah');
            $table->float('total_watt_rumah_tamu');
            $table->float('total_watt_kamar_utama');
            $table->float('total_watt_kamar_kedua');
            $table->float('total_watt_dapur');
            $table->float('total_watt_toilet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_data_watt');
    }
}

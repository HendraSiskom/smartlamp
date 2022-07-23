<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogKontrolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_kontrol', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('waktu');
            $table->integer('kode_hari');
            $table->float('teras_rumah');
            $table->float('ruang_tamu');
            $table->float('kamar_utama');
            $table->float('kamar_kedua');
            $table->float('dapur');
            $table->float('toilet');
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
        Schema::dropIfExists('log_kontrol');
    }
}

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
            $table->integer('teras_rumah');
            $table->integer('ruang_tamu');
            $table->integer('kamar_utama');
            $table->integer('kamar_kedua');
            $table->integer('dapur');
            $table->integer('toilet');
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

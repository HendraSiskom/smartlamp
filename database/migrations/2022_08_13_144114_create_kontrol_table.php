<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrol', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['manual', 'otomatis']);
            $table->string('teras_rumah_on')->nullable();
            $table->string('teras_rumah_off')->nullable();
            $table->string('ruang_tamu_on')->nullable();
            $table->string('ruang_tamu_off')->nullable();
            $table->string('kamar_utama_on')->nullable();
            $table->string('kamar_utama_off')->nullable();
            $table->string('kamar_kedua_on')->nullable();
            $table->string('kamar_kedua_off')->nullable();
            $table->string('dapur_on')->nullable();
            $table->string('dapur_off')->nullable();
            $table->string('toilet_on')->nullable();
            $table->string('toilet_off')->nullable();
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
        Schema::dropIfExists('kontrol');
    }
}

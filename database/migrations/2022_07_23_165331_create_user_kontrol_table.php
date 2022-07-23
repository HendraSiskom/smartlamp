<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserKontrolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_kontrol', function (Blueprint $table) {
            $table->id();
            $table->enum('teras_rumah',['1','2']);
            $table->enum('ruang_tamu', ['1','2']);
            $table->enum('kamar_utama',['1','2']);
            $table->enum('kamar_kedua', ['1','2']);
            $table->enum('dapur', ['1','2']);
            $table->enum('toilet', ['1','2']);
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
        Schema::dropIfExists('user_kontrol');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogKontrol extends Model
{
    use HasFactory;
	protected $table 		= 'log_kontrol';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'tanggal',
		'waktu',
		'kode_hari',
		'teras_rumah',
		'ruang_tamu',
		'kamar_utama',
		'kamar_kedua',
		'dapur',
		'toilet',
	];

}

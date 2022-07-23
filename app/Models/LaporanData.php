<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanData extends Model
{
    use HasFactory;
    protected $table 		= 'laporan_data';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'kode_hari',
		'teras_rumah',
		'ruang_tamu',
		'kamar_utama',
		'kamar_kedua',
		'dapur',
		'toilet',
	];
}

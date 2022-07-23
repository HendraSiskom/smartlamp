<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDataWatt extends Model
{
    use HasFactory;
    protected $table 		= 'laporan_data_watt';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'tanggal',
		'waktu',
		'kode_hari',
		'total_watt_teras_rumah',
		'total_watt_ruang_tamu',
		'total_watt_kamar_utama',
		'total_watt_kamar_kedua',
		'total_watt_dapur',
		'total_watt_toilet',
	];
}

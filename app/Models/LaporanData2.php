<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanData2 extends Model
{
    use HasFactory;
    protected $table 		= 'laporan_data2';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'kode_hari',
		'kamar_kedua',
		'dapur',
		'toilet'
	];
}

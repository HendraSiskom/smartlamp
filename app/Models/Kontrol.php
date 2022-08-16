<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrol extends Model
{
    use HasFactory;
    protected $table 		= 'kontrol';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'status',
		'teras_rumah_on',
		'teras_rumah_off',
		'ruang_tamu_on',
		'ruang_tamu_off',
		'kamar_utama_on',
		'kamar_utama_off',
		'kamar_kedua_on',
		'kamar_kedua_off',
		'dapur_on',
		'dapur_off',
		'toilet_on',
		'toilet_off',
	];
}
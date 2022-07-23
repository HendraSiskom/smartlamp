<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKontrol extends Model
{
    use HasFactory;
    protected $table 		= 'user_kontrol';
	protected $primaryKey 	= 'id';

	protected $fillable = [
		'teras_rumah',
		'ruang_tamu',
		'kamar_utama',
		'kamar_kedua',
		'dapur',
		'toilet',
	];
}

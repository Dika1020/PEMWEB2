<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = "kendaraan";
    protected $fillable = [
        'merk',
        'pemilik',
        'nopol',
        'thn_beli',
        'deskripsi',
        'jenis_id',
        'kapasitas_kursi',
        'rating',
    ];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kendaraan_id');
    }
}

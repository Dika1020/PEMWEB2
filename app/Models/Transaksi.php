<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $fillable = [
        'tanggal',
        'mulai',
        'akhir',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    public function area_parkir()
    {
        return $this->belongsTo(Area_parkir::class, 'area_parkir_id');
    }
}

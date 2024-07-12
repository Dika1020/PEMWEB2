<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area_parkir extends Model
{
    use HasFactory;

    protected $table = "area_parkir";
    protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id',
    ];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'kampus_id');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'area_parkir_id');
    }
}

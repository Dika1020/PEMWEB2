<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    protected $table = "kampus";
    protected $fillable = [
        'nama',
        'alamat',
        'latitude',
        'longitude',
    ];

    public function area_parkirs()
    {
        return $this->hasMany(Area_parkir::class, 'kampus_id');
    }
}

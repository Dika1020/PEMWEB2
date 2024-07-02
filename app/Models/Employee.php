<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";
    protected $fillable = [
        'nama',
        'alamat',
        'nohp',
        'email',
        'positions_id'
    ];

    public function position() 
    {
        return $this->belongsTo(Position::class, 'positions_id');
    }
}

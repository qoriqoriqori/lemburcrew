<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model 
{
    use HasFactory;

    protected $table = 'frontends';
    protected $fillable = [
        'tanggal',
        'nik',
        'nama',
        'jam_mulai',
        'jam_selesai',
        'total_jam',
        'status',
    ];
}

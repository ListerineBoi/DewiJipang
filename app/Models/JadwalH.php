<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalH extends Model
{
    protected $fillable = [
        'start', 'title','id_hmsty',
    ];
    protected $table="jadwal_h";

}

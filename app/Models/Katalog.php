<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $fillable = [
        'id_umkm', 'nama','harga','desk','img',
    ];
    protected $table="katalog";
}

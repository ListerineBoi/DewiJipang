<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKMDetail extends Model
{
    protected $fillable = [
        'id_umkm', 'nama','alamat','jam','pemilik','spes','desk','img',
    ];
    protected $table="umkm_detail";
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataDetail extends Model
{
    protected $fillable = [
        'id_wisata', 'nama','durasi','p_jawab','lokasi','desk','harga','jam','img','whatsapp',
    ];
    protected $table="wisata_detail";
}

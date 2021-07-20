<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomestayDetail extends Model
{
    protected $fillable = [
        'id_hmsty', 'nama','pemilik','alamat','kapasitas','whatsapp','img','desk',
    ];
    protected $table="homestay_detail";
}

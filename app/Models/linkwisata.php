<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkwisata extends Model
{
    protected $fillable = [
        'link','id_detail','id_link',
    ];
    protected $table="linkwisata";
}

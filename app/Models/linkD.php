<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkD extends Model
{
    protected $fillable = [
        'nama','img',
    ];
    protected $table="link";
}

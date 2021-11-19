<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPosyandu extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat', 
    ];
}

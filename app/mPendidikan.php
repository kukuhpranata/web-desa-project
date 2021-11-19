<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPendidikan extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat', 'pendidikan',
    ];
}

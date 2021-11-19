<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mBalita extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat',
    ];
}

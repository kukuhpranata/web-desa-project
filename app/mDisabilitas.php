<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mDisabilitas extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat', 'jenis_dis',
    ];
}

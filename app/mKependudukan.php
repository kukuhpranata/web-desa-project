<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mKependudukan extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat', 'pekerjaan', 'pendidikan', 'status_kel',
    ];
}

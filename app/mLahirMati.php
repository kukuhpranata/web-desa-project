<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mLahirMati extends Model
{
    protected $fillable = [
        'nama', 'dob', 'alamat', 'nama_bapak', 'nama_ibu', 'dod','created_at'
    ];
}

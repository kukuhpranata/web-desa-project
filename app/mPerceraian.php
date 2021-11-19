<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPerceraian extends Model
{
    protected $fillable = [
        'nama_istri', 'nama_suami', 'tgl_nikah', 'alamat', 'no_akta_cerai', 'tgl_cerai', 'created_at'
    ];
}

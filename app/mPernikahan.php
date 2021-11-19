<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPernikahan extends Model
{
    protected $fillable = [
        'nama_istri', 'nama_suami', 'tgl_nikah', 'alamat', 'wali', 'tempat_nikah', 'created_at'
    ];
}
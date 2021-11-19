<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mApbd extends Model
{
    protected $fillable = [
        'uraian', 'sumber_anggaran', 'keterangan', 'jumlah', 'tahun', 'jenis_bidang'
    ];
}

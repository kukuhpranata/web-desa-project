<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mInventaris extends Model
{
    protected $fillable = [
        'uraian', 'sumber_anggaran', 'keterangan', 'jumlah', 'tahun'
    ];
}

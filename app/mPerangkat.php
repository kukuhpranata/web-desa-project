<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mPerangkat extends Model
{
    protected $fillable = [
        'nama', 'dob', 'jabatan', 'pendidikan', 'no_sk', 'th_purna', 'foto'
    ];
}

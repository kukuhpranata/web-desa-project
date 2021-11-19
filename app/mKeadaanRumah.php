<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mKeadaanRumah extends Model
{
    protected $fillable = [
        'atap','dinding', 'lantai',
        // foreign
        'kemiskinan_id'
    ];

    public function kemiskinan(){
        return $this->belongsTo('App\mKemiskinan','kemiskinan_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mKemiskinan extends Model
{
    protected $fillable = [
        'nama', 'nik', 'kk', 'tempat_lhr', 'dob', 'alamat', 'pekerjaan', 'status_kel', 'keadaan_ek',
    ];

    public function nama(){
        return $this->belongsTo('App\mKemiskinan','nama','id');
    }

    public function nik(){
        return $this->belongsTo('App\mKemiskinan','nik','id');
    }
    public function kk(){
        return $this->belongsTo('App\mKemiskinan','kk','id');
    }

    public function dob(){
        return $this->belongsTo('App\mKemiskinan','dob','id');
    }
    public function alamat(){
        return $this->belongsTo('App\mKemiskinan','alamat','id');
    }

    public function pekerjaan(){
        return $this->belongsTo('App\mKemiskinan','pekerjaan','id');
    }
    public function status_kel(){
        return $this->belongsTo('App\mKemiskinan','status_kel','id');
    }

    public function keadaan_ek(){
        return $this->belongsTo('App\mKemiskinan','keadaan_ek','id');
    }

}

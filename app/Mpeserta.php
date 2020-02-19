<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mpeserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = ['id_acara', 'nama', 'j_kel', 'tgl_lahir', 'email', 'no_hp'];
    protected $primaryKey = 'id';

    public function acara(){
    	return $this->belongsTo('App\Macara', 'id_acara', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{

    protected $table = 'tb_mahasiswa';
    protected $fillable = ['id_prodi','nim','nama','alamat','email','tempat_lahir','id_pa'];
/*
    public function krs()
    { 
        return $this->belongsTo('App\krs'); 
    } 

    public function dosen()
    {
        return $this->hasOne('App\dosen','id','id_dosen'); //diarahkan ke child table

    }
    
    public function prodi()
    {
        return $this->hasOne('App\prodi','id','id_prodi');
    }
*/
    
}

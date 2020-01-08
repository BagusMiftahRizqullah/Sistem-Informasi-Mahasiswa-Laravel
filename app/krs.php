<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class krs extends Model
{
    protected $table = 'tb_krs';
  
    protected $fillable = ['id_mahasiswa','id_penawaran_mk','nilai_huruf'];

/*  
//metod one to many
    public function mahasiswa()
    {
        return $this->hasMany('App\mahasiswa'); //diarahkan ke child table

    }
    public function penawaran_mk()
    {
        return $this->hasMany('App\penawaran_mk'); //diarahkan ke child table

    }
*/
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'tb_dosen';
  
    protected $fillable = ['id','id_prodi','nip_dosen','nama_dosen'];

/*
    public function matakuliah()
    {
        return $this->belongsTo('App\matakuliah');
    }
    
    public function prodi()
    {
        return $this->hasOne('App\prodi','id','id_prodi');
    }
*/


}

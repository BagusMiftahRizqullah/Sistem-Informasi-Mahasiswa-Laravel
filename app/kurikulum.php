<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kurikulum extends Model
{
    protected $table = 'tb_kurikulum';
    protected $fillable = ['id','id_prodi','nama_kurikulum','tahun'];

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

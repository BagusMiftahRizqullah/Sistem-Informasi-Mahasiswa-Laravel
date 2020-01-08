<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    protected $table = 'tb_prodi';
    protected $fillable = ['id','nama_prodi'];


    /*
    public function matakuliah()
    {
        return $this->belongsTo('App\matakuliah');
    }

    public function kurikulum()
    {
        return $this->belongsTo('App\kurikulum');
    }
    
    public function dosen()
    {
        return $this->belongsTo('App\dosen');
    }

    */



}

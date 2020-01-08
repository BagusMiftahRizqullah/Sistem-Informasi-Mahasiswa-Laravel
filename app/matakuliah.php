<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    //jika nama tabel dibaca dengan tambahan S
    protected $table = 'tb_matakuliah';
    protected $fillable = ['kode_matakuliah','nama_matakuliah','sks','semester','id_kurikulum','id_dosen','id_prodi'];

    /*
    //metod one to many
    public function kurikulum()
    {
        return $this->hasOne('App\kurikulum', 'id', 'id_kurikulum'); //diarahkan ke child table

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

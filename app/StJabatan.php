<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StJabatan extends Model
{
    protected $table = 'st_jabatan';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = [
        'kode','Deskripsi','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

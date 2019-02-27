<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StGroup extends Model
{
    protected $table = 'st_group';
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date','id_urutlembur'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

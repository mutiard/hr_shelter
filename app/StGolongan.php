<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StGolongan extends Model
{
    protected $table = 'st_golongan';
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StPendidikan extends Model
{
    protected $table = 'st_pendidikan';
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

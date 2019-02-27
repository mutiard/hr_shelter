<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StGender extends Model
{
    protected $table = 'st_gender';
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}
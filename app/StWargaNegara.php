<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StWargaNegara extends Model
{
    protected $table = 'st_wn';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = [
        'kode','deskripsi','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

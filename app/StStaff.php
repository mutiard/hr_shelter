<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StStaff extends Model
{
    protected $table = 'st_staff';
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

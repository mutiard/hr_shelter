<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StDept extends Model
{
    protected $table = 'st_dept';
    protected $fillable = [
        'kode','group_dept','kode_divisi','id_desk','deskripsi','stat_aktif','entry_user','entry_Date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

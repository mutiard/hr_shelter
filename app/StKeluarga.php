<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StKeluarga extends Model
{
    protected $table = 'st_status_keluarga';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $fillable = [
        'kode','deskripsi','nilai_ptkp','jumlah_istri','jumlah_anak','entry_user','entry_date','nilai_tunj','nilai_istri','nilai_anak','flag'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StLokasiKerja extends Model
{
    protected $table = 'st_lokasi_kerja';
    protected $fillable = [
        'kode','deskripsi','klp_gaji','sd_int_cutoff','ed_int_cutoff','jeda_bln_gaji','entry_user','entry_date'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

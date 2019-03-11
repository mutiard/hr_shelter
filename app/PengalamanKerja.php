<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    protected $table = 'md_karyawan_pengalaman_kerja';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'nik','nama_prshaan','jabatan','sdate','edate'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }
}

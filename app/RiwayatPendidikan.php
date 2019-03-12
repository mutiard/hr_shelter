<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'rek_md_riwayat_pendidikan';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'md_karyawan_nik','st_perguruantinggi_kode','entry_date','entry_user','tahun','st_pendidikan_kode','Lulus','thn_masuk','thn_keluar','keterangan'
    ];

    public function MdKaryawan()
    {
    	return $this->hasMany('App\MdKaryawan');
    }

    public function PerguruanTinggi()
    {
    	return $this->belongsTo('App\PerguruanTinggi', 'st_perguruantinggi_kode');
    }

    public function StPendidikan()
    {
    	return $this->belongsTo('App\StPendidikan', 'st_pendidikan_kode');
    }
}

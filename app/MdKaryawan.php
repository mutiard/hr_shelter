<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MdKaryawan extends Model
{
    protected $table = 'md_karyawan';
    public $timestamps = false;
    protected $fillable = [
        'nik','no_urut','nama','tempat_lahir','tgl_lahir','jenis_klmn','agama','warga_negara','alamat_asal','alamat_tinggal','status_kwn','kota_asal','kota_tinggal','ptkp','dept','jabatan','status_karyawan','status_keluarga','tgl_menikah','gaji_pokok','no_telp','no_hp1','no_hp2','path_foto','id_staff','id_group','no_jamsostek','id_shift','status_kerja','badgenum','ssn','no_ktp','nama_bank','no_rekening','npwp','kpos_asal','kpos_tinggal','entry_user','entry_date','nama_ibu_kandung','lokasi_kerja','tipe_sim_1','no_sim_1','tipe_sim_2','no_sim_2','prd_gaji','pendidikan','email_1','email_2','tinggi_badan','berat_badan','ukuran_baju','ukuran_sepatu','no_finger','no_bpjs_kesehatan','tgl_masuk_kerja','ukuran_celana','kode_reg','jks_lain','tgl_keluar_kerja','tgl_masa_berlaku_ktp','kode_unit_bisnis','no_jamkes_lain','id_pot_bpjs_sehat','id_pot_bpjs_pensiun','id_ktp_seumurhidup','kode_golongan','jurusan_pendidikan','sertifikat_gada_pratama','basic_training','bpjs_sehat_perusahaan','bpjs_sehat_karyawan','seq','id_pot_bpjs_naker'
    ];

    public function StAgama()
    {
    	return $this->belongsTo('App\StAgama','agama');
    }

    public function StGender()
    {
    	return $this->belongsTo('App\StGender', 'jenis_klmn');
    }

    public function StKawin()
    {
    	return $this->belongsTo('App\StKawin', 'status_kwn');
    }

    public function StWargaNegara()
    {
    	return $this->belongsTo('App\StWargaNegara', 'warga_negara');
    }

    public function StJabatan()
    {
    	return $this->belongsTo('App\StJabatan', 'jabatan');
    }

    public function StDept()
    {
    	return $this->belongsTo('App\StDept', 'dept');
    }

    public function StKaryawan()
    {
    	return $this->belongsTo('App\StKaryawan','status_karyawan');
    }

    public function StKeluarga()
    {
    	return $this->belongsTo('App\StKeluarga','status_keluarga');
    }

    public function StStaff()
    {
    	return $this->belongsTo('App\StStaff','id_staff');
    }

    public function StGroup()
    {
    	return $this->belongsTo('App\StGroup', 'id_group');
    }

    public function StShift()
    {
        return $this->belongsTo('App\StShift', 'id_shift');
    }

    public function StPendidikan()
    {
        return $this->belongsTo('App\StPendidikan', 'pendidikan');
    }

    public function StLokasiKerja()
    {
        return $this->belongsTo('App\StLokasiKerja', 'lokasi_kerja');
    }

    public function StUnitBisnis()
    {
        return $this->belongsTo('App\StUnitBisnis', 'kode_unit_bisnis');
    }

    public function StGolongan()
    {
        return $this->belongsTo('App\StGolongan', 'kode_golongan');
    }

    public function PengalamanKerja()
    {
        return $this->belongsTo('App\PengalamanKerja');
    }

    public function RiwayatPendidikan()
    {
        return $this->belongsTo('App\RiwayatPendidikan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MdKaryawan;
use App\StAgama;
use App\StGender;
use App\StKawin;
use App\StWargaNegara;
use App\StDept;
use App\StJabatan;
use App\StKaryawan;
use App\StKeluarga;
use App\StStaff;
use App\StGroup;
use App\StShift;
use App\StPendidikan;
use App\StLokasiKerja;
use App\StUnitBisnis;
use App\StGolongan;
use Carbon;
use Image;
use Illuminate\Support\Facades\Input;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = MdKaryawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
    	$agamas = StAgama::all();
    	$genders = StGender::all();
    	$kawins = StKawin::all();
    	$wns = StWargaNegara::all();
    	$jabatans = StJabatan::all();
    	$depts = StDept::all();
    	$karys = StKaryawan::all();
    	$keluargas = StKeluarga::all();
    	$staffs = StStaff::all();
    	$groups = StGroup::all();
    	$shifts = StShift::all();
        $pendidikans = StPendidikan::all();
        $lokasis = StLokasiKerja::all();
        $uss = StUnitBisnis::all();
        $gols = StGolongan::all();
        return view('karyawan.create', compact('agamas','genders','kawins','wns','jabatans','depts','karys','keluargas','staffs','groups','shifts','pendidikans','lokasis','uss','gols'));
    }

    public function store(Request $request)
    {
        $karyawans = new MdKaryawan();
        $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jenis_klmn'=>'required',
            // 'tgl_keluar_kerja'=>'required|date|after:tgl_masuk_kerja',
            'id_pot_bpjs_sehat'=>'required',
            'id_pot_bpjs_pensiun'=>'required',
            'id_ktp_seumurhidup'=>'required',
            'id_pot_bpjs_naker'=>'required',
            // 'path_foto' => 'required|mimes:jpg,jpeg,png'
        ]);
        $karyawans->nik = $request->input('nik');
        $karyawans->no_urut = $request->input('no_urut');
        $karyawans->nama = $request->input('nama');
        $karyawans->tempat_lahir = $request->input('tempat_lahir');
        $karyawans->tgl_lahir = $request->input('tgl_lahir');
        $karyawans->jenis_klmn = $request->input('jenis_klmn');
        $karyawans->agama = $request->input('agama');
        $karyawans->warga_negara = $request->input('warga_negara');
        $karyawans->alamat_asal = $request->input('alamat_asal');
        $karyawans->alamat_tinggal = $request->input('alamat_tinggal');
        $karyawans->status_kwn = $request->input('status_kwn');
        $karyawans->kota_asal = $request->input('kota_asal');
        $karyawans->kota_tinggal = $request->input('kota_tinggal');
        $karyawans->ptkp = $request->input('ptkp');
        $karyawans->dept = $request->input('dept');
        $karyawans->jabatan = $request->input('jabatan');
        $karyawans->status_karyawan = $request->input('status_karyawan');
        $karyawans->status_keluarga = $request->input('status_keluarga');
        $karyawans->tgl_menikah = $request->input('tgl_menikah');
        $karyawans->gaji_pokok = $request->input('gaji_pokok');
        $karyawans->no_telp = $request->input('no_telp');
        $karyawans->no_hp1 = $request->input('no_hp1');
        $karyawans->no_hp2 = $request->input('no_hp2');
        $karyawans->id_staff = $request->input('id_staff');
        $karyawans->id_group = $request->input('id_group');
        $karyawans->no_jamsostek = $request->input('no_jamsostek');
        $karyawans->id_shift = $request->input('id_shift');
        $karyawans->status_kerja = $request->input('status_kerja');
        $karyawans->badgenum = $request->input('badgenum');
        $karyawans->ssn = $request->input('ssn');
        $karyawans->no_ktp = $request->input('no_ktp');
        $karyawans->nama_bank = $request->input('nama_bank');
        $karyawans->no_rekening = $request->input('no_rekening');
        $karyawans->npwp = $request->input('npwp');
        $karyawans->kpos_asal = $request->input('kpos_asal');
        $karyawans->kpos_tinggal = $request->input('kpos_tinggal');
        $karyawans->nama_ibu_kandung = $request->input('nama_ibu_kandung');
        $karyawans->lokasi_kerja = $request->input('lokasi_kerja');
        $karyawans->tipe_sim_1 = $request->input('tipe_sim_1');
        $karyawans->no_sim_1 = $request->input('no_sim_1');
        $karyawans->tipe_sim_2 = $request->input('tipe_sim_2');
        $karyawans->no_sim_2 = $request->input('no_sim_2');
        $karyawans->pendidikan = $request->input('pendidikan');
        $karyawans->email_1 = $request->input('email_1');
        $karyawans->email_2 = $request->input('email_2');
        $karyawans->tinggi_badan = $request->input('tinggi_badan');
        $karyawans->berat_badan = $request->input('berat_badan');
        $karyawans->ukuran_baju = $request->input('ukuran_baju');
        $karyawans->ukuran_celana = $request->input('ukuran_celana');
        $karyawans->ukuran_sepatu = $request->input('ukuran_sepatu');
        $karyawans->no_finger = $request->input('no_finger');
        $karyawans->no_bpjs_kesehatan = $request->input('no_bpjs_kesehatan');
        $karyawans->tgl_masuk_kerja = $request->input('tgl_masuk_kerja');
        $karyawans->tgl_keluar_kerja = $request->input('tgl_keluar_kerja');
        $karyawans->kode_reg = $request->input('kode_reg');
        $karyawans->jks_lain = $request->input('jks_lain');
        $karyawans->tgl_masa_berlaku_ktp = $request->input('tgl_masa_berlaku_ktp');
        $karyawans->kode_unit_bisnis = $request->input('kode_unit_bisnis');
        $karyawans->id_pot_bpjs_sehat = $request->input('id_pot_bpjs_sehat');
        $karyawans->id_pot_bpjs_pensiun = $request->input('id_pot_bpjs_pensiun');
        $karyawans->id_pot_bpjs_naker = $request->input('id_pot_bpjs_naker');
        $karyawans->id_ktp_seumurhidup = $request->input('id_ktp_seumurhidup');
        $karyawans->kode_golongan = $request->input('kode_golongan');
        $karyawans->jurusan_pendidikan = $request->input('jurusan_pendidikan');
        $karyawans->sertifikat_gada_pratama = $request->input('sertifikat_gada_pratama');
        $karyawans->basic_training = $request->input('basic_training');
        $karyawans->bpjs_sehat_perusahaan = $request->input('bpjs_sehat_perusahaan');
        $karyawans->bpjs_sehat_karyawan = $request->input('bpjs_sehat_karyawan');
        $karyawans->entry_user='user';
        $mytime = Carbon\Carbon::now();
        $waktu = $mytime->toDateTimeString();
        $waktu_array = explode(' ', $waktu);
        $now_date = $waktu_array[0];
        $karyawans->entry_date=$now_date;
        if (Input::hasFile('path_foto')) 
        {
            $profpic = Input::file('path_foto');
            $karyawans->path_foto = $profpic->getClientOriginalName();
            $is_saved = Image::make($profpic)->resize(300,300)->save(public_path('/fotoprofil/'.$karyawans->path_foto));
        }
        $karyawans->save();
        return redirect('/')->with('info','Data Karyawan Berhasil Ditambahkan!');
    }

    public function show($id)
    {
        $karyawans = MdKaryawan::where('nik','=',$id)->get();
        // dd($karyawans);
        return view('karyawan.show', compact('karyawans'));
    }

    public function edit($id)
    {
        $karyawans = MdKaryawan::where('nik','=',$id)->get();
        $agamas = StAgama::all();
        $genders = StGender::all();
        $kawins = StKawin::all();
        $wns = StWargaNegara::all();
        $jabatans = StJabatan::all();
        $depts = StDept::all();
        $karys = StKaryawan::all();
        $keluargas = StKeluarga::all();
        $staffs = StStaff::all();
        $groups = StGroup::all();
        $shifts = StShift::all();
        $pendidikans = StPendidikan::all();
        $lokasis = StLokasiKerja::all();
        $uss = StUnitBisnis::all();
        $gols = StGolongan::all();
        return view('karyawan.edit', compact('karyawans','agamas','genders','kawins','wns','jabatans','depts','karys','keluargas','staffs','groups','shifts','pendidikans','lokasis','uss','gols'));
    }

    public function update(Request $request, $id)
    {
        $mytime = Carbon\Carbon::now();
        $waktu = $mytime->toDateTimeString();
        $waktu_array = explode(' ', $waktu);
        $now_date = $waktu_array[0];
        if($request->hasFile('path_foto'))
        {
            $foto = $request->file('path_foto');
            $nama = $foto->getClientOriginalName();
            $image = Image::make($foto)->resize(300,300)->save(public_path('/fotoprofil/'.$nama));
        }
        $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'jenis_klmn'=>'required',
            // 'tgl_keluar_kerja'=>'required|date|after:tgl_masuk_kerja',
            'id_pot_bpjs_sehat'=>'required',
            'id_pot_bpjs_pensiun'=>'required',
            'id_ktp_seumurhidup'=>'required',
            'id_pot_bpjs_naker'=>'required'
        ]);
        $karyawans=array(
            'nik'=>$request->input('nik'),
            'no_urut'=>$request->input('no_urut'),
            'nama'=>$request->input('nama'),
            'tempat_lahir'=>$request->input('tempat_lahir'),
            'tgl_lahir'=>$request->input('tgl_lahir'),
            'jenis_klmn'=>$request->input('jenis_klmn'),
            'agama'=>$request->input('agama'),
            'warga_negara'=>$request->input('warga_negara'),
            'alamat_asal'=>$request->input('alamat_asal'),
            'alamat_tinggal'=>$request->input('alamat_tinggal'),
            'status_kwn'=>$request->input('status_kwn'),
            'kota_asal'=>$request->input('kota_asal'),
            'kota_tinggal'=>$request->input('kota_tinggal'),
            'ptkp'=>$request->input('ptkp'),
            'dept'=>$request->input('dept'),
            'jabatan'=>$request->input('jabatan'),
            'status_karyawan'=>$request->input('status_karyawan'),
            'status_keluarga'=>$request->input('status_keluarga'),
            'tgl_menikah'=>$request->input('tgl_menikah'),
            'gaji_pokok'=>$request->input('gaji_pokok'),
            'no_telp'=>$request->input('no_telp'),
            'no_hp1'=>$request->input('no_hp1'),
            'no_hp2'=>$request->input('no_hp2'),
            'id_staff'=>$request->input('id_staff'),
            'id_group'=>$request->input('id_group'),
            'no_jamsostek'=>$request->input('no_jamsostek'),
            'id_shift'=>$request->input('id_shift'),
            'status_kerja'=>$request->input('status_kerja'),
            'badgenum'=>$request->input('badgenum'),
            'ssn'=>$request->input('ssn'),
            'no_ktp'=>$request->input('no_ktp'),
            'nama_bank'=>$request->input('nama_bank'),
            'no_rekening'=>$request->input('no_rekening'),
            'npwp'=>$request->input('npwp'),
            'kpos_asal'=>$request->input('kpos_asal'),
            'kpos_tinggal'=>$request->input('kpos_tinggal'),
            'nama_ibu_kandung'=>$request->input('nama_ibu_kandung'),
            'lokasi_kerja'=>$request->input('lokasi_kerja'),
            'tipe_sim_1'=>$request->input('tipe_sim_1'),
            'no_sim_1'=>$request->input('no_sim_1'),
            'tipe_sim_2'=>$request->input('tipe_sim_2'),
            'no_sim_2'=>$request->input('no_sim_2'),
            'pendidikan'=>$request->input('pendidikan'),
            'email_1'=>$request->input('email_1'),
            'email_2'=>$request->input('email_2'),
            'tinggi_badan'=>$request->input('tinggi_badan'),
            'berat_badan'=>$request->input('berat_badan'),
            'ukuran_baju'=>$request->input('ukuran_baju'),
            'ukuran_celana'=>$request->input('ukuran_celana'),
            'ukuran_sepatu'=>$request->input('ukuran_sepatu'),
            'no_finger'=>$request->input('no_finger'),
            'no_bpjs_kesehatan'=>$request->input('no_bpjs_kesehatan'),
            'tgl_masuk_kerja'=>$request->input('tgl_masuk_kerja'),
            'tgl_keluar_kerja'=>$request->input('tgl_keluar_kerja'),
            'kode_reg'=>$request->input('kode_reg'),
            'jks_lain'=>$request->input('jks_lain'),
            'tgl_masa_berlaku_ktp'=>$request->input('tgl_masa_berlaku_ktp'),
            'kode_unit_bisnis'=>$request->input('kode_unit_bisnis'),
            'id_pot_bpjs_sehat'=>$request->input('id_pot_bpjs_sehat'),
            'id_pot_bpjs_pensiun'=>$request->input('id_pot_bpjs_pensiun'),
            'id_pot_bpjs_naker'=>$request->input('id_pot_bpjs_naker'),
            'id_ktp_seumurhidup'=>$request->input('id_ktp_seumurhidup'),
            'kode_golongan'=>$request->input('kode_golongan'),
            'jurusan_pendidikan'=>$request->input('jurusan_pendidikan'),
            'sertifikat_gada_pratama'=>$request->input('sertifikat_gada_pratama'),
            'basic_training'=>$request->input('basic_training'),
            'bpjs_sehat_perusahaan'=>$request->input('bpjs_sehat_perusahaan'),
            'bpjs_sehat_karyawan'=>$request->input('bpjs_sehat_karyawan'),
            'entry_user'=>'user',
            'entry_date'=>$now_date,
            'path_foto'=>$nama
        );
MdKaryawan::where('nik',$id)->update($karyawans);
return redirect('/')->with('info','Data Karyawan berhasil diubah');
}

public function destroy($id)
{
    $karyawans = MdKaryawan::where('nik','=',$id);
    $karyawans->delete();
    return redirect('/')->with('info','Data Karyawan berhasil dihapus');
}
}

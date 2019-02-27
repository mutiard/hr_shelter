@extends('layouts.main')

@section('contents')

<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Ubah Data Karyawan</h5>
	</div>
	<div class="ibox-content">
		@foreach($karyawans as $karyawan)
		<form method="POST" class="form-horizontal" action="/karyawan/{{ $karyawan->nik }}/update" enctype="multipart/form-data">
			@method('PUT')
			{{csrf_field()}}
			<fieldset>
				@if(count($errors)>0)
				@foreach($errors->all() as $error)
				<div class="alert alert-danger">{{$error}}</div>
				@endforeach
				@elseif(session('alert'))
				<div class="alert alert-danger">
					{{ session('alert') }}
				</div>
				@endif
				<div class="form-group"><label class="col-sm-2 control-label">NIK<span style="color: red">*</span></label>
					<div class="col-sm-10"><input type="number" class="form-control" name="nik" value="{{ $karyawan->nik }}"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Nomor Urut</label>
					<div class="col-sm-10"><input type="number" class="form-control" name="no_urut" value="{{ $karyawan->no_urut }}" placeholder="Masukkan Nomor Urut"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Nama<span style="color: red">*</span></label>
					<div class="col-sm-10"><input type="text" class="form-control" name="nama" value="{{ $karyawan->nama }}"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Tempat Lahir<span style="color: red">*</span></label>
					<div class="col-sm-10"><input type="text" class="form-control" name="tempat_lahir" value="{{ $karyawan->tempat_lahir }}"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Tanggal Lahir<span style="color: red">*</span></label>
					<div class="col-sm-10"><input type="date" class="form-control" name="tgl_lahir" value="{{ $karyawan->tgl_lahir }}"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin<span style="color: red">*</span></label>
					<div class="col-sm-10"><select class="form-control m-b" name="jenis_klmn">
						@foreach($genders as $gender)
						@if($karyawan->jenis_klmn == $gender->kode)
						<option value="{{ $karyawan->jenis_klmn }}" selected>{{$gender->deskripsi}}</option>
						@else
						<option value="{{ $gender->kode }}">{{$gender->deskripsi}}</option>
						@endif
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group"><label class="col-sm-2 control-label">Agama</label>
				<div class="col-sm-10"><select class="form-control m-b" name="agama">
					<option value="">Pilih Agama</option>
					@foreach($agamas as $agama)
					@if($karyawan->agama == $agama->kode)
					<option value="{{ $karyawan->agama }}" selected>{{$agama->deskripsi}}</option>
					@else
					<option value="{{ $agama->kode }}">{{$agama->deskripsi}}</option>
					@endif
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group"><label class="col-sm-2 control-label">Warga Negara</label>
			<div class="col-sm-10"><select class="form-control m-b" name="warga_negara">
				<option value="">Pilih Warga Negara</option>
				@foreach($wns as $wn)
				@if($karyawan->warga_negara == $wn->kode)
				<option value="{{ $karyawan->warga_negara }}" selected>{{$wn->deskripsi}}</option>
				@else
				<option value="{{ $wn->kode }}">{{$wn->deskripsi}}</option>
				@endif
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Alamat Asal</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="alamat_asal" value="{{ $karyawan->alamat_asal }}" placeholder="Masukkan Alamat Asal"></div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Alamat Tinggal</label>
		<div class="col-sm-10"><input type="text" class="form-control" name="alamat_tinggal" value="{{ $karyawan->alamat_tinggal }}" placeholder="Masukkan Alamat Tinggal"></div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Status Kawin</label>
		<div class="col-sm-10"><select class="form-control m-b" name="status_kwn">
			<option>Pilih Status Kawin</option>
			@foreach($kawins as $kawin)
			@if($karyawan->status_kwn == $kawin->kode)
			<option value="{{ $karyawan->status_kwn }}" selected>{{$kawin->deskripsi}}</option>
			@else
			<option value="{{ $kawin->kode }}">{{$kawin->deskripsi}}</option>
			@endif
			@endforeach
		</select>
	</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kota Asal</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="kota_asal" value="{{ $karyawan->kota_asal }}" placeholder="Masukkan Kota Asal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kota Tinggal</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="kota_tinggal" value="{{ $karyawan->kota_tinggal }}" placeholder="Masukkan Kota Tinggal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PTKP</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="ptkp" value="{{ $karyawan->ptkp }}" placeholder="Masukkan PTKP"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Departemen</label>
	<div class="col-sm-10"><select class="form-control m-b" name="dept">
		<option value="">Pilih Departemen</option>
		@foreach($depts as $dept)
		@if($karyawan->dept == $dept->kode)
		<option value="{{ $karyawan->dept }}" selected>{{$dept->deskripsi}}</option>
		@else
		<option value="{{ $dept->kode }}">{{$dept->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="jabatan">
		<option value="">Pilih Jabatan</option>
		@foreach($jabatans as $jabatan)
		@if($karyawan->jabatan == $jabatan->kode)
		<option value="{{ $karyawan->jabatan }}" selected>{{$jabatan->Deskripsi}}</option>
		@else
		<option value="{{ $jabatan->kode }}">{{$jabatan->Deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Karyawan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="status_karyawan">
		<option value="">Pilih Status Karyawan</option>
		@foreach($karys as $kary)
		@if($karyawan->status_karyawan == $kary->kode)
		<option value="{{ $karyawan->status_karyawan }}" selected>{{$kary->deskripsi}}</option>
		@else
		<option value="{{ $kary->kode }}">{{$kary->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Keluarga</label>
	<div class="col-sm-10"><select class="form-control m-b" name="status_keluarga">
		<option value="">Pilih Status Keluarga</option>
		@foreach($keluargas as $keluarga)
		@if($karyawan->status_keluarga == $keluarga->kode)
		<option value="{{ $karyawan->status_keluarga }}" selected>{{$keluarga->deskripsi}}</option>
		@else
		<option value="{{ $keluarga->kode }}">{{$keluarga->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tanggal Menikah</label>
	<div class="col-sm-10"><input type="date" class="form-control" name="tgl_menikah" value="{{ $karyawan->tgl_menikah }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Gaji Pokok</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="gaji_pokok" value="{{ $karyawan->gaji_pokok }}" placeholder="Masukkan Gaji Pokok"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Telepon</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_telp" value="{{ $karyawan->no_telp }}" placeholder="Masukkan Nomor Telepon"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor HP 1</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_hp1" value="{{ $karyawan->no_hp1 }}" placeholder="Masukkan Nomor HP 1"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor HP 2</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_hp2" value="{{ $karyawan->no_hp2 }}" placeholder="Masukkan Nomor HP 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Staff</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_staff">
		<option value="">Pilih Status Staff</option>
		@foreach($staffs as $staff)
		@if($karyawan->id_staff == $staff->kode)
		<option value="{{ $karyawan->id_staff }}" selected>{{$staff->deskripsi}}</option>
		@else
		<option value="{{ $staff->kode }}">{{$staff->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Group</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_group">
		<option value="">Pilih Status Group</option>
		@foreach($groups as $group)
		@if($karyawan->id_group == $group->kode)
		<option value="{{ $karyawan->id_group }}" selected>{{$group->deskripsi}}</option>
		@else
		<option value="{{ $group->kode }}">{{$group->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Jamsostek</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_jamsostek" value="{{ $karyawan->no_jamsostek }}" placeholder="Masukkan Nomor Jamsostek"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Shift</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_shift">
		<option value="">Pilih Status Shift</option>
		@foreach($shifts as $shift)
		@if($karyawan->id_shift == $shift->kode)
		<option value="{{ $karyawan->id_shift }}" selected>{{$shift->deskripsi}}</option>
		@else
		<option value="{{ $shift->kode }}">{{$shift->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Kerja</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="status_kerja" value="{{ $karyawan->status_kerja }}" placeholder="Masukkan Status Kerja"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Badgenum</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="badgenum" value="{{ $karyawan->badgenum }}" placeholder="Masukkan Badgenum"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">SSN</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="ssn" value="{{ $karyawan->ssn }}" placeholder="Masukkan SSN"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor KTP</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_ktp" value="{{ $karyawan->no_ktp }}" placeholder="Masukkan Nomor KTP"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nama Bank</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="nama_bank" value="{{ $karyawan->nama_bank }}" placeholder="Masukkan Nama Bank"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Rekening</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_rekening" value="{{ $karyawan->no_rekening }}" placeholder="Masukkan Nomor Rekening"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">NPWP</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="npwp" value="{{ $karyawan->npwp }}" placeholder="Masukkan NPWP"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kpos Asal</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="kpos_asal" value="{{ $karyawan->kpos_asal }}" placeholder="Masukkan Kpos Asal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kpos Tinggal</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="kpos_tinggal" value="{{ $karyawan->kpos_tinggal }}" placeholder="Masukkan Kpos Tinggal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nama Ibu Kandung</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="nama_ibu_kandung" value="{{ $karyawan->nama_ibu_kandung }}" placeholder="Masukkan Nama Ibu Kandung"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Lokasi Kerja</label>
	<div class="col-sm-10"><select class="form-control m-b" name="lokasi_kerja">
		<option value="">Pilih Lokasi Kerja</option>
		@foreach($lokasis as $lokasi)
		@if($karyawan->lokasi_kerja == $lokasi->kode)
		<option value="{{ $karyawan->lokasi_kerja }}" selected>{{$lokasi->deskripsi}}</option>
		@else
		<option value="{{ $lokasi->kode }}">{{$lokasi->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tipe SIM 1</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="tipe_sim_1" value="{{ $karyawan->tipe_sim_1 }}" placeholder="Masukkan Tipe SIM 1"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor SIM 1</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_sim_1" value="{{ $karyawan->no_sim_1 }}" placeholder="Masukkan Nomor SIM 1"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tipe SIM 2</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="tipe_sim_2" value="{{ $karyawan->tipe_sim_2 }}" placeholder="Masukkan Tipe SIM 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor SIM 2</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_sim_2" value="{{ $karyawan->no_sim_2 }}" placeholder="Masukkan Nomor SIM 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PRD Gaji</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="prd_gaji" value="{{ $karyawan->prd_gaji }}" placeholder="Masukkan PRD Gaji"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Pendidikan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="pendidikan">
		<option value="">Pilih Tingkat Pendidikan</option>
		@foreach($pendidikans as $pendidikan)
		@if($karyawan->pendidikan == $pendidikan->kode)
		<option value="{{ $karyawan->pendidikan }}" selected>{{$pendidikan->deskripsi}}</option>
		@else
		<option value="{{ $pendidikan->kode }}">{{$pendidikan->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Email 1</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="email_1" value="{{ $karyawan->email_1 }}" placeholder="Masukkan Email 1"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Email 2</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="email_2" value="{{ $karyawan->email_2 }}" placeholder="Masukkan Email 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tinggi Badan (cm)</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="tinggi_badan" value="{{ $karyawan->tinggi_badan }}" placeholder="Masukkan Tinggi Badan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Berat Badan (kg)</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="berat_badan" value="{{ $karyawan->berat_badan }}" placeholder="Masukkan Berat Badan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Ukuran Baju</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="ukuran_baju" value="{{ $karyawan->ukuran_baju }}" placeholder="Masukkan Ukuran Baju"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Ukuran Celana</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="ukuran_celana" value="{{ $karyawan->ukuran_celana }}" placeholder="Masukkan Ukuran Celana"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Ukuran Sepatu</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="ukuran_sepatu" value="{{ $karyawan->ukuran_sepatu }}" placeholder="Masukkan Ukuran Sepatu"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Finger</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_finger" value="{{ $karyawan->no_finger }}" placeholder="Masukkan Nomor Finger"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor BPJS Kesehatan</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_bpjs_kesehatan" value="{{ $karyawan->no_bpjs_kesehatan }}" placeholder="Masukkan Nomor BPJS Kesehatan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tanggal Masuk Kerja</label>
	<div class="col-sm-10"><input type="date" class="form-control" name="tgl_masuk_kerja" value="{{ $karyawan->tgl_masuk_kerja }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tanggal Keluar Kerja</label>
	<div class="col-sm-10"><input type="date" class="form-control" name="tgl_keluar_kerja" value="{{ $karyawan->tgl_keluar_kerja }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kode Reg</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="kode_reg" value="{{ $karyawan->kode_reg }}" placeholder="Masukkan Kode Reg"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">JKS Lain</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="jks_lain" value="{{ $karyawan->jks_lain }}" placeholder="Masukkan JKS Lain"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Unit Bisnis</label>
	<div class="col-sm-10"><select class="form-control m-b" name="kode_unit_bisnis">
		<option value="">Pilih Unit Bisnis</option>
		@foreach($uss as $us)
		@if ($karyawan->kode_unit_bisnis == $us->kode)
		<option value="{{ $karyawan->kode_unit_bisnis }}" selected>{{$us->deskripsi}}</option>
		@else
		<option value="{{ $us->kode }}">{{$us->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Jaminan Kesehatan Lain</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_jamkes_lain" value="{{ $karyawan->no_jamkes_lain }}" placeholder="Masukkan Nomor Jaminan Kesehatan Lain"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">ID POT BPJS Sehat<span style="color: red">*</span></label>
	<div class="col-sm-10"><input type="number" class="form-control" name="id_pot_bpjs_sehat" value="{{ $karyawan->id_pot_bpjs_sehat }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">ID POT BPJS Pensiun<span style="color: red">*</span></label>
	<div class="col-sm-10"><input type="number" class="form-control" name="id_pot_bpjs_pensiun" value="{{ $karyawan->id_pot_bpjs_pensiun }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">ID POT BPJS Naker<span style="color: red">*</span></label>
	<div class="col-sm-10"><input type="number" class="form-control" name="id_pot_bpjs_naker" value="{{ $karyawan->id_pot_bpjs_naker }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">ID KTP Seumur Hidup<span style="color: red">*</span></label>
	<div class="col-sm-10"><input type="number" class="form-control" name="id_ktp_seumurhidup" value="{{ $karyawan->id_ktp_seumurhidup }}"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Golongan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="kode_golongan">
		<option value="">Pilih Status Golongan</option>
		@foreach($gols as $gol)
		@if($karyawan->kode_golongan == $gol->kode)
		<option value="{{ $karyawan->kode_golongan }}" selected>{{$gol->deskripsi}}</option>
		@else
		<option value="{{ $gol->kode }}">{{$gol->deskripsi}}</option>
		@endif
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Jurusan Pendidikan</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="jurusan_pendidikan" value="{{ $karyawan->jurusan_pendidikan }}" placeholder="Masukkan Jurusan Pendidikan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Sertifikat Gada Pratama</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="sertifikat_gada_pratama" value="{{ $karyawan->sertifikat_gada_pratama }}" placeholder="Masukkan Sertifikat Gada Pratama"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Basic Training</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="basic_training" value="{{ $karyawan->basic_training }}" placeholder="Masukkan Basic Training"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">BPJS Sehat Perusahaan</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="bpjs_sehat_perusahaan" value="{{ $karyawan->bpjs_sehat_perusahaan }}" placeholder="Masukkan BPJS Sehat Perusahaan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">BPJS Sehat Karyawan</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="bpjs_sehat_karyawan" value="{{ $karyawan->bpjs_sehat_karyawan }}" placeholder="Masukkan BPJS Sehat Karyawan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Upload Foto</label>
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
		@if($karyawan->path_foto != NULL)
		<input type="file" name="path_foto" value="{{asset('/fotoprofil/'.$karyawan->path_foto)}}">
		@else
		<input type="file" name="path_foto">
		@endif
	</span>
	<span class="fileinput-filename"></span>
	<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
</div>
</div>
@endforeach
</fieldset>
<div class="hr-line-dashed"></div>
<div class="form-group">
	<div class="col-sm-4 col-sm-offset-2">
		<a href="/">
			<button type="button" class="btn btn-white">Cancel</button>
		</a>
		<button class="btn btn-primary" type="submit">Save changes</button>
	</div>
</div>
</form>
</div>
</div>
@endsection
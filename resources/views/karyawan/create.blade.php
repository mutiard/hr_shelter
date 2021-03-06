@extends('layouts.main')

@section('contents')

<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Tambah Data Karyawan</h5>
	</div>
	<div class="ibox-content">
		<form method="POST" class="form-horizontal" action="{{url('/')}}" enctype="multipart/form-data">
			@csrf
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
					<div class="col-sm-10"><input type="number" class="form-control" name="nik" placeholder="Masukkan NIK"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Nomor Urut</label>
					<div class="col-sm-10"><input type="number" class="form-control" name="no_urut" placeholder="Masukkan Nomor Urut"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Nama<span style="color: red">*</span></label>
					<div class="col-sm-10"><input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"></div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Tempat Lahir<span style="color: red">*</span></label>
					<div class="col-sm-4"><input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir"></div>
					<label class="col-sm-2 control-label">Tanggal Lahir<span style="color: red">*</span></label>
					<div class="col-sm-4"><input type="date" class="form-control" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir (mm/dd/yyyy)"></div>
				</div>
				<div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin<span style="color: red">*</span></label>
					<div class="col-sm-10"><select class="form-control m-b" name="jenis_klmn">
						<option value="">Pilih Jenis Kelamin</option>
						@foreach($genders as $gender)
						<option value="{{ $gender->kode }}">{{$gender->deskripsi}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group"><label class="col-sm-2 control-label">Agama</label>
				<div class="col-sm-10"><select class="form-control m-b" name="agama">
					<option value="">Pilih Agama</option>
					@foreach($agamas as $agama)
					<option value="{{ $agama->kode }}">{{$agama->deskripsi}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group"><label class="col-sm-2 control-label">Warga Negara</label>
			<div class="col-sm-10"><select class="form-control m-b" name="warga_negara">
				<option value="">Pilih Warga Negara</option>
				@foreach($wns as $wn)
				<option value="{{ $wn->kode }}">{{$wn->deskripsi}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Alamat Asal</label>
		<div class="col-sm-4"><input type="text" class="form-control" name="alamat_asal" placeholder="Masukkan Alamat Asal"></div>
		<label class="col-sm-2 control-label">Alamat Tinggal</label>
		<div class="col-sm-4"><input type="text" class="form-control" name="alamat_tinggal" placeholder="Masukkan Alamat Tinggal"></div>
	</div>
	<div class="form-group"><label class="col-sm-2 control-label">Status Kawin</label>
		<div class="col-sm-10"><select class="form-control m-b" name="status_kwn">
			<option value="">Pilih Status Kawin</option>
			@foreach($kawins as $kawin)
			<option value="{{ $kawin->kode }}">{{$kawin->deskripsi}}</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Kota Asal</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="kota_asal" placeholder="Masukkan Kota Asal"></div>
	<label class="col-sm-2 control-label">Kota Tinggal</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="kota_tinggal" placeholder="Masukkan Kota Tinggal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PTKP</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="ptkp" placeholder="Masukkan PTKP"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Departemen</label>
	<div class="col-sm-10"><select class="form-control m-b" name="dept">
		<option value="">Pilih Departemen</option>
		@foreach($depts as $dept)
		<option value="{{ $dept->kode }}">{{$dept->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="jabatan">
		<option value="">Pilih Jabatan</option>
		@foreach($jabatans as $jabatan)
		<option value="{{ $jabatan->kode }}">{{$jabatan->Deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Karyawan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="status_karyawan">
		<option value="">Pilih Status Karyawan</option>
		@foreach($karys as $kary)
		<option value="{{ $kary->kode }}">{{$kary->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Keluarga</label>
	<div class="col-sm-10"><select class="form-control m-b" name="status_keluarga">
		<option value="">Pilih Status Keluarga</option>
		@foreach($keluargas as $keluarga)
		<option value="{{ $keluarga->kode }}">{{$keluarga->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Tanggal Menikah</label>
	<div class="col-sm-10"><input type="date" class="form-control" name="tgl_menikah"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Gaji Pokok</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="gaji_pokok" placeholder="Masukkan Gaji Pokok"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nomor Telepon</label>
	<div class="col-sm-2"><input type="number" class="form-control" name="no_telp" placeholder="Nomor Telepon"></div>
	<label class="col-sm-2 control-label">Nomor HP 1</label>
	<div class="col-sm-2"><input type="number" class="form-control" name="no_hp1" placeholder="Nomor HP 1"></div>
	<label class="col-sm-2 control-label">Nomor HP 2</label>
	<div class="col-sm-2"><input type="number" class="form-control" name="no_hp2" placeholder="Nomor HP 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Staff</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_staff">
		<option value="">Pilih Status Staff</option>
		@foreach($staffs as $staff)
		<option value="{{ $staff->kode }}">{{$staff->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Group</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_group">
		<option value="">Pilih Status Group</option>
		@foreach($groups as $group)
		<option value="{{ $group->kode }}">{{$group->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Jamsostek</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_jamsostek" placeholder="Masukkan Nomor Jamsostek"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Shift</label>
	<div class="col-sm-10"><select class="form-control m-b" name="id_shift">
		<option value="">Pilih Status Shift</option>
		@foreach($shifts as $shift)
		<option value="{{ $shift->kode }}">{{$shift->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Kerja</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="status_kerja" placeholder="Masukkan Status Kerja"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Badgenum</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="badgenum" placeholder="Masukkan Badgenum"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">SSN</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="ssn" placeholder="Masukkan SSN"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor KTP</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_ktp" placeholder="Masukkan Nomor KTP"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Nama Bank</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="nama_bank" placeholder="Masukkan Nama Bank"></div>
	<label class="col-sm-2 control-label">Nomor Rekening</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="no_rekening" placeholder="Masukkan Nomor Rekening"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">NPWP</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="npwp" placeholder="Masukkan NPWP"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Kpos Asal</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="kpos_asal" placeholder="Masukkan Kpos Asal"></div>
	<label class="col-sm-2 control-label">Kpos Tinggal</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="kpos_tinggal" placeholder="Masukkan Kpos Tinggal"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nama Ibu Kandung</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="nama_ibu_kandung" placeholder="Masukkan Nama Ibu Kandung"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Lokasi Kerja</label>
	<div class="col-sm-10"><select class="form-control m-b" name="lokasi_kerja">
		<option value="">Pilih Lokasi Kerja</option>
		@foreach($lokasis as $lokasi)
		<option value="{{ $lokasi->kode }}">{{$lokasi->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tipe SIM 1</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="tipe_sim_1" placeholder="Masukkan Tipe SIM 1"></div>
	<label class="col-sm-2 control-label">Nomor SIM 1</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="no_sim_1" placeholder="Masukkan Nomor SIM 1"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tipe SIM 2</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="tipe_sim_2" placeholder="Masukkan Tipe SIM 2"></div>
	<label class="col-sm-2 control-label">Nomor SIM 2</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="no_sim_2" placeholder="Masukkan Nomor SIM 2"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">PRD Gaji</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="prd_gaji" placeholder="Masukkan PRD Gaji"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Pendidikan Terakhir</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="pendidikan" placeholder="Masukkan Pendidikan Terakhir"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Email 1</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="email_1" placeholder="Masukkan Email 1"></div>
	<label class="col-sm-2 control-label">Email 2</label>
	<div class="col-sm-4"><input type="text" class="form-control" name="email_2" placeholder="Masukkan Email 2"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tinggi Badan (cm)</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="tinggi_badan" placeholder="Masukkan Tinggi Badan"></div>
	<label class="col-sm-2 control-label">Berat Badan (kg)</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="berat_badan" placeholder="Masukkan Berat Badan"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Ukuran Baju</label>
	<div class="col-sm-2"><input type="text" class="form-control" name="ukuran_baju" placeholder="Ukuran Baju"></div>
	<label class="col-sm-2 control-label">Ukuran Celana</label>
	<div class="col-sm-2"><input type="text" class="form-control" name="ukuran_celana" placeholder="Ukuran Celana"></div>
	<label class="col-sm-2 control-label">Ukuran Sepatu</label>
	<div class="col-sm-2"><input type="number" class="form-control" name="ukuran_sepatu" placeholder="Ukuran Sepatu"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Finger</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_finger" placeholder="Masukkan Nomor Finger"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor BPJS Kesehatan</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_bpjs_kesehatan" placeholder="Masukkan Nomor BPJS Kesehatan"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tanggal Masuk Kerja</label>
	<div class="col-sm-4"><input type="date" class="form-control" name="tgl_masuk_kerja"></div>
	<label class="col-sm-2 control-label">Tanggal Keluar Kerja</label>
	<div class="col-sm-4"><input type="date" class="form-control" name="tgl_keluar_kerja"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Kode Reg</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="kode_reg" placeholder="Masukkan Kode Reg"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">JKS Lain</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="jks_lain" placeholder="Masukkan JKS Lain"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Unit Bisnis</label>
	<div class="col-sm-10"><select class="form-control m-b" name="kode_unit_bisnis">
		<option value="">Pilih Unit Bisnis</option>
		@foreach($uss as $us)
		<option value="{{ $us->kode }}">{{$us->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Nomor Jaminan Kesehatan Lain</label>
	<div class="col-sm-10"><input type="number" class="form-control" name="no_jamkes_lain" placeholder="Masukkan Jaminan Kesehatan Lain"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">ID POT BPJS Sehat<span style="color: red">*</span></label>
	<div class="col-sm-2">
		<input type="radio" value="1" name="id_pot_bpjs_sehat">Ya
	</div>
	<div class="col-sm-2">
		<input type="radio" value="0" name="id_pot_bpjs_sehat">Tidak
	</div>
	<label class="col-sm-2 control-label">ID POT BPJS Pensiun<span style="color: red">*</span></label>
	<div class="col-sm-2">
		<input type="radio" value="1" name="id_pot_bpjs_pensiun">Ya
	</div>
	<div class="col-sm-2">
		<input type="radio" value="0" name="id_pot_bpjs_pensiun">Tidak
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">ID POT BPJS Naker<span style="color: red">*</span></label>
	<div class="col-sm-2">
		<input type="radio" value="1" name="id_pot_bpjs_naker">Ya
	</div>
	<div class="col-sm-2">
		<input type="radio" value="0" name="id_pot_bpjs_naker">Tidak
	</div>
	<label class="col-sm-2 control-label">ID KTP Seumur Hidup<span style="color: red">*</span></label>
	<div class="col-sm-2">
		<input type="radio" value="1" name="id_ktp_seumurhidup">Ya
	</div>
	<div class="col-sm-2">
		<input type="radio" value="0" name="id_ktp_seumurhidup">Tidak
	</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Status Golongan</label>
	<div class="col-sm-10"><select class="form-control m-b" name="kode_golongan">
		<option value="">Pilih Status Golongan</option>
		@foreach($gols as $gol)
		<option value="{{ $gol->kode }}">{{$gol->deskripsi}}</option>
		@endforeach
	</select>
</div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Jurusan Pendidikan</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="jurusan_pendidikan" placeholder="Masukkan Jurusan Pendidikan"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Sertifikat Gada Pratama</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="sertifikat_gada_pratama" placeholder="Masukkan Sertifikat Gada Pratama"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Basic Training</label>
	<div class="col-sm-10"><input type="text" class="form-control" name="basic_training" placeholder="Masukkan Basic Training"></div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">BPJS Sehat Perusahaan</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="bpjs_sehat_perusahaan" placeholder="Masukkan BPJS Sehat Perusahaan"></div>
	<label class="col-sm-2 control-label">BPJS Sehat Karyawan</label>
	<div class="col-sm-4"><input type="number" class="form-control" name="bpjs_sehat_karyawan" placeholder="Masukkan BPJS Sehat Karyawan"></div>
</div>
<div class="form-group" id="addmore">
	<label class="col-sm-2 control-label">Pengalaman Kerja<span style="color: red">*</span><br>
		<div id="add" class="label label-primary" style="margin-top: 10px">
			<i class="fa fa-plus-circle">Tambahkan Pengalaman Kerja</i>
		</div>
	</label>
	<div class="col-sm-2">
		<input type="text" class="form-control" name="nama_prshaan[]" placeholder="Nama Perusahaan">
	</div>
	<div class="col-sm-2">
		<input type="text" class="form-control" name="jbtn[]" placeholder="Jabatan">
	</div>
	<label class="col-sm-1 control-label">Tanggal Mulai</label>
	<div class="col-sm-2">
		<input type="date" class="form-control" name="sdate[]">
	</div>
	<label class="col-sm-1 control-label">Tanggal Berakhir</label>
	<div class="col-sm-2">
		<input type="date" class="form-control" name="edate[]">
	</div>
	<div class="col-sm-offset-2 col-sm-10"></div>
</div>
<div class="form-group" id="addmore2">
	<label class="col-sm-2 control-label">Riwayat Pendidikan<span style="color: red">*</span><br>
		<div id="add2" class="label label-primary" style="margin-top: 10px">
			<i class="fa fa-plus-circle">Tambahkan Riwayat Pendidikan</i>
		</div>
	</label>
	<div class="col-sm-3">
		<select class="form-control m-b" name="st_pendidikan_kode[]">
			<option value="">Pilih Pendidikan</option>
			@foreach($pendidikans as $pendidikan)
			<option value="{{ $pendidikan->kode }}">{{$pendidikan->deskripsi}}</option>
			@endforeach
		</select>
	</div>
	<div class="col-sm-3">
		<select class="form-control m-b" name="st_perguruantinggi_kode[]">
			<option value="">Pilih Perguruan Tinggi</option>
			@foreach($pts as $pt)
			<option value="{{ $pt->kode }}">{{$pt->deskripsi}}</option>
			@endforeach
		</select>
	</div>
	<div class="col-sm-2">
		<input type="number" class="form-control" name="thn_masuk[]" placeholder="Tahun Masuk">
	</div>
	<div class="col-sm-2">
		<input type="number" class="form-control" name="thn_keluar[]" placeholder="Tahun Keluar">
	</div>
	<div class="col-sm-offset-2 col-sm-10"></div>
</div>
<div class="form-group"><label class="col-sm-2 control-label">Upload Foto</label>
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
		<span class="fileinput-exists">Change</span><input type="file" name="path_foto"/></span>
		<span class="fileinput-filename"></span>
		<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
	</div>
</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('#add').click(function(){
		$('#addmore').append('<label class="col-sm-2 control-label"></label><div class="col-sm-2"><input type="text" class="form-control" name="nama_prshaan[]" placeholder="Nama Perusahaan"></div><div class="col-sm-2"><input type="text" class="form-control" name="jbtn[]" placeholder="Jabatan"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="sdate[]"></div><label class="col-sm-1 control-label"></label><div class="col-sm-2"><input type="date" class="form-control" name="edate[]"></div>');
	});

	$('#add2').click(function(){
		$('#addmore2').append('<div class="row"><label class="col-sm-2 control-label"></label><div class="col-sm-3"><select class="form-control m-b" name="st_pendidikan_kode[]"><option value="">Pilih Pendidikan</option>@foreach($pendidikans as $pendidikan)<option value="{{ $pendidikan->kode }}">{{$pendidikan->deskripsi}}</option>@endforeach</select></div><div class="col-sm-3"><select class="form-control m-b" name="st_perguruantinggi_kode[]"><option value="">Pilih Perguruan Tinggi</option>@foreach($pts as $pt)<option value="{{ $pt->kode }}">{{$pt->deskripsi}}</option>@endforeach</select></div><div class="col-sm-2"><input type="number" class="form-control" name="thn_masuk[]" placeholder="Tahun Masuk"></div><div class="col-sm-2"><input type="number" class="form-control" name="thn_keluar[]" placeholder="Tahun Keluar"></div></div>');
	});
</script>
@endsection
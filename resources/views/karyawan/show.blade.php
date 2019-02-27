@extends('layouts.main')

@section('contents')
<div class="row">
	<div class="col-lg-12">
		<div class="widget-head-color-box navy-bg p-lg text-center">
			<div class="m-b-md">
				@foreach($karyawans as $karyawan)
				<h2 class="font-bold no-margins">
					{{ $karyawan->nama }}
				</h2>
				<small>NIK : {{ $karyawan->nik }}</small>
			</div>
			@if($karyawan->path_foto != NULL)
			<img src="{{asset('/fotoprofil/'.$karyawan->path_foto)}}" class="img-circle circle-border m-b-md" alt="profile" style="width: 150px">
			@else
			<br>
			@endif
		</div>
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-6">
						<dl class="dl-horizontal">
							<dt>Nomor Urut:</dt> <dd>{{ $karyawan->no_urut }}</dd>
							<dt>Tempat Lahir:</dt> <dd>{{ $karyawan->tempat_lahir }}</dd>
							<dt>Tanggal Lahir:</dt> <dd>{{ $karyawan->tgl_lahir }}</dd>
							<dt>Jenis Kelamin:</dt> <dd>{{ $karyawan->StGender->deskripsi }}</dd>
							@if($karyawan->agama != NULL)
							<dt>Agama:</dt> <dd>{{ $karyawan->StAgama->deskripsi }}</dd>
							@else
							<dt>Agama:</dt> <dd></dd>
							@endif
							@if($karyawan->warga_negara != NULL)
							<dt>Warga Negara:</dt> <dd>{{ $karyawan->StWargaNegara->deskripsi }}</dd>
							@else
							<dt>Warga Negara:</dt> <dd></dd>
							@endif
							<dt>Alamat Asal:</dt> <dd>{{ $karyawan->alamat_asal }}</dd>
							<dt>Alamat Tinggal:</dt> <dd>{{ $karyawan->alamat_tinggal }}</dd>
							@if($karyawan->status_kwn != NULL)
							<dt>Status Kawin:</dt> <dd>{{ $karyawan->StKawin->deskripsi }}</dd>
							@else
							<dt>Status Kawin:</dt> <dd></dd>
							@endif
							<dt>Kota Asal:</dt> <dd>{{ $karyawan->kota_asal }}</dd>
							<dt>Kota Tinggal:</dt> <dd>{{ $karyawan->kota_tinggal }}</dd>
							<dt>PTKP:</dt> <dd>{{ $karyawan->ptkp }}</dd>
							@if($karyawan->dept != NULL)
							<dt>Departemen:</dt> <dd>{{ $karyawan->StDept->deskripsi }}</dd>
							@else
							<dt>Departemen:</dt> <dd></dd>
							@endif
							@if($karyawan->jabatan != NULL)
							<dt>Jabatan:</dt> <dd>{{ $karyawan->StJabatan->Deskripsi }}</dd>
							@else
							<dt>Jabatan:</dt> <dd></dd>
							@endif
							@if($karyawan->status_karyawan != NULL)
							<dt>Status Karyawan:</dt> <dd>{{ $karyawan->StKaryawan->deskripsi }}</dd>
							@else
							<dt>Status Karyawan:</dt> <dd></dd>
							@endif
							@if($karyawan->status_keluarga != NULL)
							<dt>Status Keluarga:</dt> <dd>{{ $karyawan->StKeluarga->deskripsi }}</dd>
							@else
							<dt>Status Keluarga:</dt> <dd></dd>
							@endif
							<dt>Tanggal Menikah:</dt> <dd>{{ $karyawan->tgl_menikah }}</dd>
							<dt>Gaji Pokok:</dt> <dd>{{ $karyawan->gaji_pokok }}</dd>
							<dt>Nomor Telpon:</dt> <dd>{{ $karyawan->no_telp }}</dd>
							<dt>Nomor HP 1:</dt> <dd>{{ $karyawan->no_hp1 }}</dd>
							<dt>Nomor HP 2:</dt> <dd>{{ $karyawan->no_hp2 }}</dd>
							@if($karyawan->id_staff != NULL)
							<dt>ID Staff:</dt> <dd>{{ $karyawan->StStaff->deskripsi }}</dd>
							@else
							<dt>ID Staff:</dt> <dd></dd>
							@endif
							@if($karyawan->id_group != NULL)
							<dt>ID Group:</dt> <dd>{{ $karyawan->StGroup->deskripsi }}</dd>
							@else
							<dt>ID Group:</dt> <dd></dd>
							@endif
							<dt>Nomor Jamsostek:</dt> <dd>{{ $karyawan->no_jamsostek }}</dd>
							@if($karyawan->id_shift != NULL)
							<dt>ID Shift:</dt> <dd>{{ $karyawan->StShift->deskripsi }}</dd>
							@else
							<dt>ID Shift:</dt> <dd></dd>
							@endif
							<dt>Status Kerja:</dt> <dd>{{ $karyawan->status_kerja }}</dd>
							<dt>Badgenum:</dt> <dd>{{ $karyawan->badgenum }}</dd>
							<dt>SSN:</dt> <dd>{{ $karyawan->ssn }}</dd>
							<dt>Nomor KTP:</dt> <dd>{{ $karyawan->no_ktp }}</dd>
							<dt>Nama Bank:</dt> <dd>{{ $karyawan->nama_bank }}</dd>
							<dt>Nomor Rekening:</dt> <dd>{{ $karyawan->no_rekening }}</dd>
							<dt>NPWP:</dt> <dd>{{ $karyawan->npwp }}</dd>
							<dt>Kpos Asal:</dt> <dd>{{ $karyawan->kpos_asal }}</dd>
							<dt>Kpos Tinggal:</dt> <dd>{{ $karyawan->kpos_tinggal }}</dd>
							<dt>Nama Ibu Kandung:</dt> <dd>{{ $karyawan->nama_ibu_kandung }}</dd>
						</dl>
					</div>
					<div class="col-lg-6" id="cluster_info">
						<dl class="dl-horizontal" >	
							@if($karyawan->lokasi_kerja != NULL)				
							<dt>Lokasi Kerja:</dt> <dd>{{ $karyawan->StLokasiKerja->deskripsi }}</dd>
							@else
							<dt>Lokasi Kerja:</dt> <dd></dd>
							@endif
							<dt>Tipe SIM 1:</dt> <dd>{{ $karyawan->tipe_sim_1 }}</dd>
							<dt>Nomor SIM 1:</dt> <dd>{{ $karyawan->no_sim_1 }}</dd>
							<dt>Tipe SIM 2:</dt> <dd>{{ $karyawan->tipe_sim_2 }}</dd>
							<dt>Nomor SIM 2:</dt> <dd>{{ $karyawan->no_sim_2 }}</dd>
							<dt>PRD Gaji:</dt> <dd>{{ $karyawan->prd_gaji }}</dd>
							<dt>Kota Asal:</dt> <dd>{{ $karyawan->kota_asal }}</dd>
							@if($karyawan->pendidikan != NULL)	
							<dt>Pendidikan Terakhir:</dt> <dd>{{ $karyawan->StPendidikan->deskripsi }}</dd>
							@else
							<dt>Pendidikan Terakhir:</dt> <dd></dd>
							@endif
							<dt>Email 1:</dt> <dd>{{ $karyawan->email_1 }}</dd>
							<dt>Email 2:</dt> <dd>{{ $karyawan->email_2 }}</dd>
							<dt>Tinggi Badan:</dt> <dd>{{ $karyawan->tinggi_badan }}</dd>
							<dt>Berat Badan:</dt> <dd>{{ $karyawan->berat_badan }}</dd>
							<dt>Ukuran Baju:</dt> <dd>{{ $karyawan->ukuran_baju }}</dd>
							<dt>Ukuran Celana:</dt> <dd>{{ $karyawan->ukuran_celana }}</dd>
							<dt>Ukuran Sepatu:</dt> <dd>{{ $karyawan->ukuran_sepatu }}</dd>
							<dt>Nomor Finger:</dt> <dd>{{ $karyawan->no_finger }}</dd>
							<dt>Nomor BPJS Kesehatan:</dt> <dd>{{ $karyawan->no_bpjs_kesehatan }}</dd>
							<dt>Tanggal Masuk Kerja:</dt> <dd>{{ $karyawan->tgl_masuk_kerja }}</dd>
							<dt>Tanggal Keluar Kerja:</dt> <dd>{{ $karyawan->tgl_keluar_kerja }}</dd>
							<dt>Kode Reg:</dt> <dd>{{ $karyawan->kode_reg }}</dd>
							<dt>JKS Lain:</dt> <dd>{{ $karyawan->jks_lain }}</dd>
							<dt>Tanggal Masa Berlaku KTP:</dt> <dd>{{ $karyawan->tgl_masa_berlaku_ktp }}</dd>
							@if($karyawan->kode_unit_bisnis != NULL)
							<dt>Unit Bisnis:</dt> <dd>{{ $karyawan->StUnitBisnis->deskripsi }}</dd>
							@else
							<dt>Unit Bisnis:</dt> <dd></dd>
							@endif
							<dt>Nomor Jaminan Kesehatan Lain:</dt> <dd>{{ $karyawan->no_jamkes_lain }}</dd>
							<dt>ID Pot BPJS Sehat:</dt> <dd>{{ $karyawan->id_pot_bpjs_sehat }}</dd>
							<dt>ID Pot BPJS Pensiun:</dt> <dd>{{ $karyawan->id_pot_bpjs_pensiun }}</dd>
							<dt>ID Pot BPJS Naker:</dt> <dd>{{ $karyawan->id_pot_bpjs_naker }}</dd>
							<dt>ID KTP Seumur Hidup:</dt> <dd>{{ $karyawan->id_ktp_seumur_hidup }}</dd>
							@if($karyawan->kode_golongan != NULL)
							<dt>Status Golongan:</dt> <dd>{{ $karyawan->StGolongan->deskripsi }}</dd>
							@else
							<dt>Status Golongan:</dt> <dd></dd>
							@endif
							<dt>Jurusan Pendidikan:</dt> <dd>{{ $karyawan->jurusan_pendidikan }}</dd>
							<dt>Sertifikat Gada Pratama:</dt> <dd>{{ $karyawan->sertifikat_gada_pratama }}</dd>
							<dt>Basic Training:</dt> <dd>{{ $karyawan->basic_training }}</dd>
							<dt>BPJS Sehat Perusahaan:</dt> <dd>{{ $karyawan->bpjs_sehat_perusahaan }}</dd>
							<dt>BPJS Sehat Karyawan:</dt> <dd>{{ $karyawan->bpjs_sehat_karyawan }}</dd>
						</dl>
					</div>
					@endforeach
				</div>
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-2">
							<a href="/">
								<button type="button" class="btn btn-white">Kembali</button>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
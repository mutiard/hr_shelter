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
			<img src="{{asset('/fotoprofil/'.$karyawan->path_foto)}}" class="img-circle circle-border m-b-md" style="width: 150px">
			@else
			<br>
			@endif
		</div>
		<div class="ibox">
			<div class="ibox-content">
				<div class="row">
					<div class="col-lg-12">
						<h2><i class="fa fa-user-circle"></i> Data Karyawan</h2>
						<div class="hr-line-dashed"></div>
					</div>
					<div class="col-lg-6">
						<dl class="dl-horizontal">
							<dt>Nomor Urut:</dt> <dd>{{ $karyawan->no_urut }}</dd><br>
							<dt>Tempat Lahir:</dt> <dd>{{ $karyawan->tempat_lahir }}</dd><br>
							<dt>Tanggal Lahir:</dt> <dd>{{ $karyawan->tgl_lahir }}</dd><br>
							<dt>Jenis Kelamin:</dt> <dd>{{ $karyawan->StGender->deskripsi }}</dd><br>
							@if($karyawan->agama != NULL)
							<dt>Agama:</dt> <dd>{{ $karyawan->StAgama->deskripsi }}</dd><br>
							@else
							<dt>Agama:</dt> <dd></dd><br>
							@endif
							@if($karyawan->warga_negara != NULL)
							<dt>Warga Negara:</dt> <dd>{{ $karyawan->StWargaNegara->deskripsi }}</dd><br>
							@else
							<dt>Warga Negara:</dt> <dd></dd><br>
							@endif
							<dt>Alamat Asal:</dt> <dd>{{ $karyawan->alamat_asal }}</dd><br>
							<dt>Alamat Tinggal:</dt> <dd>{{ $karyawan->alamat_tinggal }}</dd><br>
							@if($karyawan->status_kwn != NULL)
							<dt>Status Kawin:</dt> <dd>{{ $karyawan->StKawin->deskripsi }}</dd><br>
							@else
							<dt>Status Kawin:</dt> <dd></dd><br>
							@endif
							<dt>Kota Asal:</dt> <dd>{{ $karyawan->kota_asal }}</dd><br>
							<dt>Kota Tinggal:</dt> <dd>{{ $karyawan->kota_tinggal }}</dd><br>
							<dt>PTKP:</dt> <dd>{{ $karyawan->ptkp }}</dd><br>
							@if($karyawan->dept != NULL)
							<dt>Departemen:</dt> <dd>{{ $karyawan->StDept->deskripsi }}</dd><br>
							@else
							<dt>Departemen:</dt> <dd></dd><br>
							@endif
							@if($karyawan->jabatan != NULL)
							<dt>Jabatan:</dt> <dd>{{ $karyawan->StJabatan->Deskripsi }}</dd><br>
							@else
							<dt>Jabatan:</dt> <dd></dd><br>
							@endif
							@if($karyawan->status_karyawan != NULL)
							<dt>Status Karyawan:</dt> <dd>{{ $karyawan->StKaryawan->deskripsi }}</dd><br>
							@else
							<dt>Status Karyawan:</dt> <dd></dd><br>
							@endif
							@if($karyawan->status_keluarga != NULL)
							<dt>Status Keluarga:</dt> <dd>{{ $karyawan->StKeluarga->deskripsi }}</dd><br>
							@else
							<dt>Status Keluarga:</dt> <dd></dd><br>
							@endif
							<dt>Tanggal Menikah:</dt> <dd>{{ $karyawan->tgl_menikah }}</dd><br>
							<dt>Gaji Pokok:</dt> <dd>{{ $karyawan->gaji_pokok }}</dd><br>
							<dt>Nomor Telpon:</dt> <dd>{{ $karyawan->no_telp }}</dd><br>
							<dt>Nomor HP 1:</dt> <dd>{{ $karyawan->no_hp1 }}</dd><br>
							<dt>Nomor HP 2:</dt> <dd>{{ $karyawan->no_hp2 }}</dd><br>
							@if($karyawan->id_staff != NULL)
							<dt>ID Staff:</dt> <dd>{{ $karyawan->StStaff->deskripsi }}</dd><br>
							@else
							<dt>ID Staff:</dt> <dd></dd><br>
							@endif
							@if($karyawan->id_group != NULL)
							<dt>ID Group:</dt> <dd>{{ $karyawan->StGroup->deskripsi }}</dd><br>
							@else
							<dt>ID Group:</dt> <dd></dd><br>
							@endif
							<dt>Nomor Jamsostek:</dt> <dd>{{ $karyawan->no_jamsostek }}</dd><br>
							@if($karyawan->id_shift != NULL)
							<dt>ID Shift:</dt> <dd>{{ $karyawan->StShift->deskripsi }}</dd><br>
							@else
							<dt>ID Shift:</dt> <dd></dd><br>
							@endif
							<dt>Status Kerja:</dt> <dd>{{ $karyawan->status_kerja }}</dd><br>
							<dt>Badgenum:</dt> <dd>{{ $karyawan->badgenum }}</dd><br>
							<dt>SSN:</dt> <dd>{{ $karyawan->ssn }}</dd><br>
							<dt>Nomor KTP:</dt> <dd>{{ $karyawan->no_ktp }}</dd><br>
							<dt>Nama Bank:</dt> <dd>{{ $karyawan->nama_bank }}</dd><br>
							<dt>Nomor Rekening:</dt> <dd>{{ $karyawan->no_rekening }}</dd><br>
							<dt>NPWP:</dt> <dd>{{ $karyawan->npwp }}</dd><br>
							<dt>Kpos Asal:</dt> <dd>{{ $karyawan->kpos_asal }}</dd><br>
							<dt>Kpos Tinggal:</dt> <dd>{{ $karyawan->kpos_tinggal }}</dd><br>
							<dt>Nama Ibu Kandung:</dt> <dd>{{ $karyawan->nama_ibu_kandung }}</dd><br>
							@if($karyawan->lokasi_kerja != NULL)				
							<dt>Lokasi Kerja:</dt> <dd>{{ $karyawan->StLokasiKerja->deskripsi }}</dd><br>
							@else
							<dt>Lokasi Kerja:</dt> <dd></dd><br>
							@endif
						</dl>
					</div>
					<div class="col-lg-6" id="cluster_info">
						<dl class="dl-horizontal" >	
							<dt>Tipe SIM 1:</dt> <dd>{{ $karyawan->tipe_sim_1 }}</dd><br>
							<dt>Nomor SIM 1:</dt> <dd>{{ $karyawan->no_sim_1 }}</dd><br>
							<dt>Tipe SIM 2:</dt> <dd>{{ $karyawan->tipe_sim_2 }}</dd><br>
							<dt>Nomor SIM 2:</dt> <dd>{{ $karyawan->no_sim_2 }}</dd><br>
							<dt>PRD Gaji:</dt> <dd>{{ $karyawan->prd_gaji }}</dd><br>
							<dt>Kota Asal:</dt> <dd>{{ $karyawan->kota_asal }}</dd><br>
							@if($karyawan->pendidikan != NULL)	
							<dt>Pendidikan Terakhir:</dt> <dd>{{ $karyawan->StPendidikan->deskripsi }}</dd><br>
							@else
							<dt>Pendidikan Terakhir:</dt> <dd></dd><br>
							@endif
							<dt>Email 1:</dt> <dd>{{ $karyawan->email_1 }}</dd><br>
							<dt>Email 2:</dt> <dd>{{ $karyawan->email_2 }}</dd><br>
							<dt>Tinggi Badan:</dt> <dd>{{ $karyawan->tinggi_badan }}</dd><br>
							<dt>Berat Badan:</dt> <dd>{{ $karyawan->berat_badan }}</dd><br>
							<dt>Ukuran Baju:</dt> <dd>{{ $karyawan->ukuran_baju }}</dd><br>
							<dt>Ukuran Celana:</dt> <dd>{{ $karyawan->ukuran_celana }}</dd><br>
							<dt>Ukuran Sepatu:</dt> <dd>{{ $karyawan->ukuran_sepatu }}</dd><br>
							<dt>Nomor Finger:</dt> <dd>{{ $karyawan->no_finger }}</dd><br>
							<dt>Nomor BPJS Kesehatan:</dt> <dd>{{ $karyawan->no_bpjs_kesehatan }}</dd><br>
							<dt>Tanggal Masuk Kerja:</dt> <dd>{{ $karyawan->tgl_masuk_kerja }}</dd><br>
							<dt>Tanggal Keluar Kerja:</dt> <dd>{{ $karyawan->tgl_keluar_kerja }}</dd><br>
							<dt>Kode Reg:</dt> <dd>{{ $karyawan->kode_reg }}</dd><br>
							<dt>JKS Lain:</dt> <dd>{{ $karyawan->jks_lain }}</dd><br>
							<dt>Tanggal Masa Berlaku<br>KTP:</dt> <dd>{{ $karyawan->tgl_masa_berlaku_ktp }}</dd><br>
							@if($karyawan->kode_unit_bisnis != NULL)
							<dt>Unit Bisnis:</dt> <dd>{{ $karyawan->StUnitBisnis->deskripsi }}</dd><br>
							@else
							<dt>Unit Bisnis:</dt> <dd></dd><br>
							@endif
							<dt>Nomor Jaminan<br>Kesehatan Lain:</dt> <dd>{{ $karyawan->no_jamkes_lain }}</dd><br>
							<dt>ID Pot BPJS Sehat:</dt> <dd>{{ $karyawan->id_pot_bpjs_sehat }}</dd><br>
							<dt>ID Pot BPJS Pensiun:</dt> <dd>{{ $karyawan->id_pot_bpjs_pensiun }}</dd><br>
							<dt>ID Pot BPJS Naker:</dt> <dd>{{ $karyawan->id_pot_bpjs_naker }}</dd><br>
							<dt>ID KTP Seumur Hidup:</dt> <dd>{{ $karyawan->id_ktp_seumur_hidup }}</dd><br>
							@if($karyawan->kode_golongan != NULL)
							<dt>Status Golongan:</dt> <dd>{{ $karyawan->StGolongan->deskripsi }}</dd><br>
							@else
							<dt>Status Golongan:</dt> <dd></dd><br>
							@endif
							<dt>Jurusan Pendidikan:</dt> <dd>{{ $karyawan->jurusan_pendidikan }}</dd><br>
							<dt>Sertifikat Gada<br>Pratama:</dt> <dd>{{ $karyawan->sertifikat_gada_pratama }}</dd><br>
							<dt>Basic Training:</dt> <dd>{{ $karyawan->basic_training }}</dd><br>
							<dt>BPJS Sehat Perusahaan:</dt> <dd>{{ $karyawan->bpjs_sehat_perusahaan }}</dd><br>
							<dt>BPJS Sehat Karyawan:</dt> <dd>{{ $karyawan->bpjs_sehat_karyawan }}</dd><br>
						</dl>
					</div>
					@endforeach
					<div class="col-lg-12">
						<h2><i class="fa fa-send"></i> Pengalaman Kerja</h2>
						<div class="hr-line-dashed"></div>
						@if($kerjas->isEmpty())
						<p>Karyawan belum punya pengalaman kerja</p>
						@else
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Perusahaan</th>
									<th>Jabatan</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Berakhir</th>
								</tr>
							</thead>
							<?php $i=1; ?>
							<tbody>
								@foreach($kerjas as $kerja)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $kerja->nama_prshaan }}</td>
									<td>{{ $kerja->jabatan }}</td>
									<td>{{ $kerja->sdate }}</td>
									<td>{{ $kerja->edate }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@endif					
					</div>
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
@extends('layouts.main')

@section('contents')
<div class="row">
	<div class="col-lg-12">
		<div class="contact-box">
			@foreach($karyawans as $karyawan)
			<div class="col-sm-2">
				<div class="text-center">
					@if($karyawan->path_foto != NULL)
					<img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('/fotoprofil/'.$karyawan->path_foto)}}">
					@else
					<br>
					@endif
					@if($karyawan->jabatan != NULL)
					<div class="m-t-xs font-bold">{{ $karyawan->StJabatan->Deskripsi }}</div>
					@else
					<img alt="image" class="img-circle m-t-xs img-responsive" src="{{asset('/fotoprofil/admin.jpg')}}" style="width: 150px">
					@endif
				</div>
			</div>
			<div class="col-sm-10">
				<h2><strong>{{$karyawan->nama}}</strong>
					@if($karyawan->jenis_klmn == "L")
					<small><i class="fa fa-male"></i></small>
					@elseif($karyawan->jenis_klmn == "P")
					<small><i class="fa fa-female"></i></small>
					@endif
				</h2>
				<p></p>
				<div class="col-sm-5">
					<p><i class="fa fa-map-marker"></i>&ensp;{{$karyawan->alamat_tinggal}}</p>
					<p><i class="fa fa-home"></i>&ensp;{{$karyawan->alamat_asal}}</p>
				</div>
				<div class="col-sm-5">
					<p><i class="fa fa-envelope-open"></i>&ensp;{{$karyawan->email_1}}</p>
					<p><i class="fa fa-phone"></i>&ensp;{{$karyawan->no_telp}}</p>
					<p><i class="fa fa-mobile-phone"></i>&ensp;{{$karyawan->no_hp1}}</p>
					<div class="col-sm-offset-5">
					<a href="/">
						<button type="button" class="btn btn-white">Kembali</button>
					</a>
				</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="tabs-container">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#tab-1">Detail Karyawan</a></li>
				<li class=""><a data-toggle="tab" href="#tab-2">Pengalaman Kerja</a></li>
				<li class=""><a data-toggle="tab" href="#tab-3">Riwayat Pendidikan</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab-1" class="tab-pane active">
					<div class="panel-body">
						<h3><i class="fa fa-user-circle"></i> Detail Karyawan</h3>
						<div class="hr-line-dashed"></div>
						<div class="col-lg-6">
							<dl class="dl-horizontal">
								<dt>NIK:</dt> <dd>{{ $karyawan->nik }}</dd><br>
								<dt>Nomor Urut:</dt> <dd>{{ $karyawan->no_urut }}</dd><br>
								<dt>Tempat Lahir:</dt> <dd>{{ $karyawan->tempat_lahir }}</dd><br>
								<dt>Tanggal Lahir:</dt> <dd>{{ $karyawan->tgl_lahir }}</dd><br>
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
								<dt>Tipe SIM 1:</dt> <dd>{{ $karyawan->tipe_sim_1 }}</dd><br>
								<dt>Nomor SIM 1:</dt> <dd>{{ $karyawan->no_sim_1 }}</dd><br>
							</dl>
						</div>
						<div class="col-lg-6" id="cluster_info">
							<dl class="dl-horizontal" >	
								<dt>Tipe SIM 2:</dt> <dd>{{ $karyawan->tipe_sim_2 }}</dd><br>
								<dt>Nomor SIM 2:</dt> <dd>{{ $karyawan->no_sim_2 }}</dd><br>
								<dt>PRD Gaji:</dt> <dd>{{ $karyawan->prd_gaji }}</dd><br>
								<dt>Kota Asal:</dt> <dd>{{ $karyawan->kota_asal }}</dd><br>
								<dt>Pendidikan Terakhir:</dt> <dd>{{ $karyawan->pendidikan }}</dd><br>
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
					</div>
				</div>
				<div id="tab-2" class="tab-pane">
					<div class="panel-body">
						<h3><i class="fa fa-send"></i> Pengalaman Kerja</h3>
						<div class="hr-line-dashed"></div>
						@if($kerjas->isEmpty())
						<p>Karyawan belum mengisi pengalaman kerja</p>
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
				<div id="tab-3" class="tab-pane">
					<div class="panel-body">
						<h3><i class="fa fa-book"></i> Riwayat Pendidikan</h3>
						<div class="hr-line-dashed"></div>
						@if($rps->isEmpty())
						<p>Karyawan belum mengisi riwayat pendidikan</p>
						@else
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Pendidikan</th>
									<th>Perguruan Tinggi</th>
									<th>Tahun Masuk</th>
									<th>Tahun Keluar</th>
								</tr>
							</thead>
							<?php $i=1; ?>
							<tbody>
								@foreach($rps as $rp)
								<tr>
									<td>{{ $i++ }}</td>
									<td>{{ $rp->StPendidikan->deskripsi }}</td>
									<td>{{ $rp->PerguruanTinggi->deskripsi }}</td>
									<td>{{ $rp->thn_masuk }}</td>
									<td>{{ $rp->thn_keluar }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
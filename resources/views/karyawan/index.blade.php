@extends('layouts.main')

@section('contents')
<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Tabel Data Karyawan</h5>
	</div>
	<div class="ibox-content">
		<a href="/karyawan/create">
			<button type="button" class="btn btn-w-m btn-primary">Tambah Karyawan Baru</button>
		</a>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover dataTables-example" >
				<thead>
					<tr>
						<th>NIK</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Jabatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($karyawans as $karyawan)
					<tr class="gradeX">
						<td>{{ $karyawan->nik }}</td>
						<td>{{ $karyawan->nama }}</td>
						<td>{{ $karyawan->StGender->deskripsi }}</td>
						@if($karyawan->jabatan != NULL)
						<td>{{ $karyawan->StJabatan->Deskripsi }}</td>
						@else	
						<td></td>	
						@endif		
						<td class="center">                              
							<a href="karyawan/{{$karyawan->nik}}/show"><button class="btn btn-outline btn-info  dim" type="button"><i class="fa fa-user-circle"></i> </button></a>
							<a href="karyawan/{{$karyawan->nik}}/edit"><button class="btn btn-outline btn-warning dim" type="button"><i class="fa fa-paste"></i> </button></a>
							<a href="karyawan/{{$karyawan->nik}}/delete"><button class="btn btn-outline btn-danger  dim" type="button"><i class="fa fa-trash"></i> </button></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
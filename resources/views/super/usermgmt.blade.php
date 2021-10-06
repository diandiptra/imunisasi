@extends('layouts.main')

@section('container')	
<div class="page-header">
	<h4 class="page-title">Data User</h4>
</div>

@if(\Session::has('berhasil'))
<div class="alert alert-success" role="alert">
	{{Session::get('berhasil')}}
</div>
@endif
@if(\Session::has('gagal'))
<div class="alert alert-danger" role="alert">
	{{Session::get('gagal')}}
</div>
@endif
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="d-flex align-items-center">
					<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addUser">
						<i class="fa fa-plus"></i>
						Tambah User
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="add-row" class="display table table-striped table-hover" >
						<thead>
							<tr>
								<th>Username</th>
								<th>Role</th>
								<th>Status</th>
								<th style="width: 10%">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								@foreach ($user as $u)
								<td>{{$u->username}}}</td>
								<td>{{$u->role}}}</td>
								<td>{{$u->status}}}</td>
								<td>
									<div class="form-button-action">
										<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
											<i class="fa fa-edit"></i>
										</button>
										<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
											<i class="fa fa-times"></i>
										</button>
									</div>
								</td>
								@endforeach
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@include('super.addUser')
@endsection

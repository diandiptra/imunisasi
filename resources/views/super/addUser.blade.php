<!-- Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="/addUser" method="post" role="form">
				<div class="modal-body">
					<!-- form start -->
					{{csrf_field()}}
					<div class="card-body">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
						</div>
						<div class="form-group">
							<label for="alamat">Role</label>
							<select class="form-control" aria-label="Default select example" id="id_role" name="id_role">
								<option selected>Pilih Role</option>
								@foreach ($roles as $r)
								<option value="{{ $r->id_role }}">{{ $r->role }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="password">Status</label>
							<select class="form-control" aria-label="Default select example" id="status" name="status">
								<option selected>Pilih Status</option>
								<option value="0">Tidak Aktif</option>
								<option value="1">Aktif</option>
							</select>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"> Batal</i></button>
					<button type="submit" class="btn btn-success"><i class="fas fa-save"> Simpan</i></button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>

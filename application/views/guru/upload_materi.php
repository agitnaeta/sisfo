<form method="post" action="">
	<input class="form-control" type="text" name="cari" placeholder="Cari Data...">
</form>
<table class="table table-bordered table-condended">
	<thead><th colspan="4" class="bg-primary"> Jumlah Data :</th></thead>
	<thead class="bg-success ">
		<th class="text-center">No</th><th class="text-center">Nama Materi</th><th class="text-center">Alamat File</th><th class="text-center">Aksi</th>
	</thead>
	<thead>
		<?php echo form_open_multipart('guru/upload_file');?>
			<th class="text-center"> Input Data Baru :</th>
			<th><input class="form-control input-sm" name="nama"></th>
			<th><input type="file" class="form-control input-sm" name="file"></th>
			<th><button class="btn-block btn-primary btn-sm"><i class="glyphicon glyphicon-ok"></i> Simpan</button></th>
		</form>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td width="20%" class="text-center">
				<a class="btn-sm btn btn-success" title="Edit" href=""><i class="glyphicon glyphicon-edit"></i> Edit</a>
				<a class="btn-sm btn btn-danger" title="Hapus" href=""><i class="glyphicon glyphicon-remove"></i> Hapus</a>
			</td>
		</tr>
	</tbody>
</table>
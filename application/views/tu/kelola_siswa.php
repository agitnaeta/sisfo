<script type="text/javascript">
	function pesan () {
		var yes=confirm('Apakah anda yakin untuk menghapus data ?');
		if (yes==true) {
		
		} 
		else {
	    	
		} 
	}
	function berbayar () {
		alert("Fitur ini tersedia di aplikasi versi penuh!")
	}
</script>
<script type="text/javascript">
	
</script>
<h3><i class="glyphicon glyphicon-user"></i> Kelola Data Siswa</h3>
<table title="Data Siswa" class="table table-condensed table-hover  table-bordered">
	
	<thead class="bg-primary">
		<th colspan="7"><h4></h4></th>
	</thead>
	<thead class="bg-info">
		<th colspan="7"> 
		<div class="text-left">
			<a title="Tambah" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                <i class="glyphicon glyphicon-plus"></i> Tambah</a>
        
			<a title="Print" onclick="berbayar()" type="button" class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-print"></i> Print</a>
		</div>
		</th>
	</thead>
	<thead class="bg-success">
		<th class="text-center">No</th>
		<th class="text-center">NIS</th>
		<th class="text-center">NISN</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Tempat,Tanggal Lahir</th>
		<th class="text-center">Alamat</th>
		<th class="text-center">Aksi</th>
	</thead>
	
		<tbody>
	<?php $no=1 ;foreach ($siswa->result() as $row ): ?>
		<tr title="<?php echo $row->nama;?>">
		<td><?php echo $no++;?></td>
		<td><?php echo $row->nis;?></td>
		<td><?php echo $row->nisn;?></td>
		<td><?php echo $row->nama;?></td>
		<td><?php echo "$row->tempat_lahir,$row->tanggal_lahir";?></td>
		<td><?php echo $row->alamat;?></td>
		<td class="text-center">
        <a title="Edit" type="button" data-id="<?php echo site_url("tu/kelola_siswa/get_edit/$row->nis");?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Edit">
                <i class="glyphicon glyphicon-edit"></i> </a>
			<button  title="Hapus" onclick="pesan()"  class="btn btn-danger  btn-sm">
                <i class="glyphicon glyphicon-remove"></i> </button>
		</td>
		</tr>
	<?php endforeach;?>	
	</tbody>
</table>

<?php include 'form_siswa.php';?>
<?php include 'form_update_siswa.php';?>

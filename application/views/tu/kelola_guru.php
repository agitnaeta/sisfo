
<div class="container konten">
	<div class="row clearfix">
		<div class="col-md-12">
			<div id="kelola_siswa"> 
				<h3><i class="glyphicon glyphicon-user"></i> Kelola Data Siswa</h3>
				<table title="Data Siswa" class="table table-condensed table-hover table-striped  table-bordered">
					<thead class="bg-primary">
						<th colspan="7">Jumlah Data : <?php echo count($guru->result());?></th>
					</thead>
					<thead>
					<div id="hasil"></div>
						<?php echo $this->session->flashdata('flashdata'); ?>
					</thead>
					<thead class="bg-info">
						<th colspan="6"> 
						<div class="text-left">
							<a title="Tambah" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
				                <i class="glyphicon glyphicon-plus"></i> Tambah</a>
				             <select class="input-sm" name="jumlan">
				             	<option value="" selected >-Tampilkan-</option>
				             	<option value="20">20</option>
				             	<option value="40">40</option>
				             	<option value="60">60</option>
				             	<option value="<?php count($guru->result());?>">Semua</option>
				             </select>   	
						</div>
						</th>
						<th class="text-center" colspan="1">
							<a title="Print" onclick="berbayar()" type="button" class="btn btn-primary btn-sm">
				                <i class="glyphicon glyphicon-print"></i> Print</a>
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
					<?php $no=1 ;foreach ($guru->result() as $row ): ?>
						<tr title="<?php echo $row->nama;?>">
						<td><?php echo $no++;?></td>
						<td><?php echo $row->nip;?></td>
						<td><?php echo $row->nipn;?></td>
						<td><?php echo $row->nama;?></td>
						<td><?php echo "$row->tempat_lahir,<br>"; echo dateindo($row->tanggal_lahir);?></td>
						<td><?php echo $row->alamat;?></td>
						<td class="text-center">
				        <a title="Edit" type="button" data-id="<?php echo site_url("tu/kelola_siswa/get_edit/$row->nip");?>" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Edit">
				                <i class="glyphicon glyphicon-edit"></i> </a>
							<a  title="Hapus" onclick="pesan()" href="<?php echo site_url("tu/kelola_siswa/hapus_siswa/$row->nip");?>"  class="btn btn-danger  btn-sm">
				                <i class="glyphicon glyphicon-remove"></i> </a>
						</td>
						</tr>
					<?php endforeach;?>	
					</tbody>
				</table>
				</div>		
		</div>
	</div>
</div>

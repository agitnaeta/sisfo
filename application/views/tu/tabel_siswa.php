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
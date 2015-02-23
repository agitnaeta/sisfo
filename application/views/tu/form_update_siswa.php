<?php foreach ($siswa->result() as $row):?>
<div class="modal fade" id="myEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
        <i class="glyphicon glyphicon-user"></i> Input Data Siswa </h4>
      </div>
      <div class="modal-body">
     <div class="com-md-12 text-center"><h4>NIS : <?php echo "$nis";?></h4> </div>
      <div class="col-md-6">
      <form action="<?php echo site_url('tu/kelola_siswa/tambah_siswa');?>" method="post">
      	<label>Tahun Ajaran</label>
		<input class="form-control" name="tajaran" value="<?php echo $row->tahun_ajaran;?>" readonly/>
		<input type="hidden" class="form-control" name="nis" value="<?php echo $row->nis;?>" readonly/>
		<label>NISN</label>
		<input class="form-control" name="nisn" type="number" value="<?php echo $row->nisn;?>" />
		<label>Nama</label>
		<input class="form-control" name="nama" value="<?php echo $row->nama;?>" placeholder="Nama"/>
      </div>
      <div class="col-md-6">
      	<label>Tempat Lahir</label>
		<input class="form-control" name="tlahir" value="<?php echo $row->tempat_lahir;?>" placeholder="Tempat lahir"/>
		<label>Tanggal Lahir</label>
		<input class="form-control" type="date" value="<?php echo $row->tanggal_lahir;?>" name="tglahir">
		<label>Agama</label>
		<select class="form-control" name="agama">
            <?php echo "<option value=$row->agama>Sekarang :$row->agama</option>";?>
			<option value="Islam">ISLAM</option>
			<option value="Khatolik">KHATOLIK</option>
			<option value="Protesetan">PROTESTEN</option>
			<option value="Hindu">HINDU</option>
			<option value="Budha">Budha</option>
		</select>
      </div>
      <div class="col-md-12">
      	<label>Alamat</label>
		<textarea class="form-control" name="alamat">
            <?php echo $row->alamat?>
		</textarea>
		<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
      </div>
</form>
    </div>
  </div>
    </div></div>
<?php endforeach;?>
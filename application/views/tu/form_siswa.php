<div id="form_table">
<?php 
$date=date('Y'); 
$date2=$date+1; 
$nisDepan=substr(date('Y'),2);
$n2=$nisDepan+1;

foreach ($siswa->result() as $row):

	if (substr($row->nis,0,2)<$nisDepan) 
	{
		$row->nis=00000;
		$nisBErikut=sprintf('%05s',$row->nis+1);
		$nis="$nisDepan$n2$nisBErikut";
	}
	else
	{
		$nisBErikut=sprintf('%05s',substr($row->nis,4)+1);
		$nis="$nisDepan$n2$nisBErikut";
	}
endforeach;	
?>	
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		<input class="form-control" name="tajaran" value="<?php echo "$date-$date2";?>" readonly/>
		<input type="hidden" class="form-control" name="nis" value="<?php echo "$nis";?>" readonly/>
		<label>NISN</label>
		<input class="form-control" name="nisn" type="number" />
		<label>Nama</label>
		<input class="form-control" name="nama" placeholder="Nama"/>
      </div>
      <div class="col-md-6">
      	<label>Tempat Lahir</label>
		<input class="form-control" name="tlahir" placeholder="Tempat lahir"/>
		<label>Tanggal Lahir</label>
		<input class="form-control" type="date" name="tglahir">
		<label>Agama</label>
		<select class="form-control" name="agama">
			<option value="Islam">ISLAM</option>
			<option value="Khatolik">KHATOLIK</option>
			<option value="Protestan">PROTESTAN</option>
			<option value="Hindu">HINDU</option>
			<option value="Budha">Budha</option>
		</select>
      </div>
      <div class="col-md-12">
      	<label>Alamat</label>
		<textarea class="form-control" name="alamat">
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
</div>

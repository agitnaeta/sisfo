<script type="text/javascript">
	$(document).ready(function() {
		$("a#tabel_pelajaran").click(function  () {
		$("div#konten").load('<?php echo site_url('siswa/utama/tabel_pelajaran'); ?>')
		return false
		});

		$("a#daftar_nilai").click(function  () {
		$("div#konten").load('<?php echo site_url('siswa/utama/daftar_nilai'); ?>')
		return false
		});
		$("a#daftar_remedial").click(function  () {
		$("div#konten").load('<?php echo site_url('siswa/utama/daftar_remedial'); ?>')
		return false
		});
		$("a#daftar_tugas").click(function  () {
		$("div#konten").load('<?php echo site_url('siswa/utama/daftar_tugas'); ?>')
		return false
		});
		$("a#download_materi").click(function  () {
		$("div#konten").load('<?php echo site_url('siswa/utama/download_materi'); ?>')
		return false
		});
	});
	
</script>
<div class="container konten">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="col-md-12 column">
		<div class="text-left">
			<table>
			<br>
				<tr>
					<td width="30%"><img class="img img-resposnsive" height="130" width="120" src="<?php echo base_url();?>src/img/logo_smantura.PNG"></td>
					<td>
						<h1>SMAN SITURAJA</h1>

						<h4><i> </i> Sistem Informasi Akademik Terpadu - SMAN SITURAJA</h4>
					</td>
				</tr>
			</table>
		</div>
		<hr>
		</div>
			<div class="row clearfix">
				<div class="col-md-3 column">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								Menu
							</h3>
						</div>
						<div class="panel-body">
							<ul id="nav" class="nav">
								<li>
									<a id="tabel_pelajaran" class="" href="">
									<i class="glyphicon glyphicon-list"></i>
									  Daftar Pelajaran</a>
								</li>
								<li>
									<a id="daftar_nilai" class="" href="">
									<i class="glyphicon glyphicon-list-alt"></i>
									  Daftar Nilai</a>
								</li>
								<li>
									<a id="daftar_remedial" class="" href="">
									<i class="glyphicon glyphicon-pencil"></i>
									  Daftar Remedial
									  <span title="42 Daftar Remedial Baru" class="badge">42</span>
									  </a>
								</li>
								<li>
									<a id="daftar_tugas" class="" href="">
									<i class="glyphicon glyphicon-tasks"></i>
									   Daftar Tugas
									   <span title="12 Daftar Tugas Baru" class="badge">12</span>
									</a>
								</li>
								<li>
									<a id="download_materi" class="" href="">
									<i class="glyphicon glyphicon-download-alt"></i>
									   Download Materi</a>
								</li>
							</ul>
						</div>
						<div class="panel-footer">
							<a href="<?php echo base_url();?>login/logout" class="btn btn-block btn-default">
								<i class="glyphicon glyphicon-log-out"> </i>
								Keluar
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-9 column">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<i class="glyphicon glyphicon-user"></i> <?php echo "Selamat Datang $nama";?>
						</div>
						<div id="konten" class="panel-body">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
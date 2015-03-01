<!doctype html>
<html>
<head>
	<?php include 'head.php';?>
<script type="text/javascript">
  $(document).ready(function  () {
  	$("#result").hide();
  	$("#login_tu").hide();
  	$("a#medsos").click(function  () {
  		$("#konten").hide("slow");
  		$("#info").hide("slow");
  		$("#result").show("fast");
  			return false;
  	});
  	$(".login_tu").click(function  () {
  		$("#konten").hide();
  		$("#info").hide();
  		$("#result").hide();
  		$("#footer").hide();
  		$("#login_tu").show("slow");
  			return false;
  	})
  });
  </script>
</head>
<body>
	<div class="container konten">
	<div class="row clearfix">
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
		</div>
		<div class="col-md-12">
			<h3></h3>
			<?php include 'navbar.php';?>
		</div>
	</div>
	<div class="row clearfix">
		<div id="result" class="col-md-12">
			
		</div>
		<div id="konten" class="col-md-4 column">
			<?php include 'form_login.php';?>
		</div>
		<div id="info" class="col-md-8 column">
			<div class="jumbotron">
				<h1>SIAP-SMANTURA</h1><small>Sistem Akademik Terpadu - SMA Negeri Situraja</small>
				<hr>
			</div>
		</div>
	</div>
	<div id="footer" class="row-clearfix">
		<footer class="footer colorgraph"></footer>
		<footer class="footer bg-primary">
			<table class="table">
				<thead>
				<th width="33%" class="text-center">Alamat</th>
				<th width="33%" class="text-center">Web Akademik</th>
				<th width="33%" class="text-center">Kontak Sekolah</th>
				</thead>
				<tbody class="text-center">
				<th width="33%" class="text-center">
				<i class="glyphicon glyphicon-street"></i>
				 Jln. Kaum No.14 - Situraja
				 <br>
				 <i class="glyphicon glyphicon-home"></i>
				 Kode Pos - 43571
				</th>
				<th width="33%" class="text-center">
					<a href="" class="text-default">
						<i class="glyphicon glyphicon-star"></i>
						Garuda Dikti
					</a>
					<br>
					<a href="" class="text-default">
						<i class="glyphicon glyphicon-star"></i>
						STMIK-Sumedang
					</a>
				</th>
				<th width="33%" class="text-center">
				<i class="glyphicon glyphicon-phone-alt"></i>
				 	(02261)-12721
				 <br>
				 <i class="glyphicon glyphicon-envelope"></i>
				 	admin@sman-situraja.com
				</th>
				</tbody>
			</table>
		</footer>
		
	</div>
</div>
</body>

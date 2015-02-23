<!doctype html>
<html>
<head>
	<?php include 'head.php';?>
</head>
<body>
    <div class="container">
	<div class="col-md-12">
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
		<br>
	</div>
	
	</div>
	<div class="container">
		<div class="col-md-12">
			<?php include 'navbar.php';?>
		</div>
	</div>
		<br>
		<br>
		<div class="container">
		<div class="col-md-4">
            <div class="col-lg-12 bg-primary"><h3>Silahkan Login!</h3></div>    
                <div class="col-lg-12 bg-success">
                    <br>
                <form class="form-group" method="post">
                <label><i class="glyphicon glyphicon-user"></i> NIS</label>
                <input required class="form-control" name="nis" placeholder="NIS" />
                <br>
                <label><i class="glyphicon glyphicon-lock"></i> Password</label>
                <input required class="form-control" name="password" type="password" Placeholder="Password">
                <br>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> Login</button>
                    <button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-off"></i> Reset</button>
                </div>
                </form>
            </div> 
        </div>
		<div class="col-md-8">
		
			<div class="jumbotron">
				<h1>Informasi Terbaru</h1>
				<hr></hr>
				<p>Pengumuman untuk seluruh siswa bahwa pada hari tanggal .. akan diadakan </p>
			</div>
		</di >
	</div>
	</div>
	<br>
	<br>

	<div class="container">
		<div class="col-md-12-primary footer">
			<div class="col-md-4 bg-success"><h5></h5></div>
			<div class="col-md-4 bg-danger"><h5></h5></div>
			<div class="col-md-4 bg-warning"><h5></h5></div>
		</div>
		<div class="col-md-12 bg-primary">
			<div class="col-md-4 text-center"><h3>Informasi</h3>Isi Informasi</div>
			<div class="col-md-4 text-center"><h3>Informasi</h3>Isi Informasi</div>
			<div class="col-md-4 text-center"><h3>Informasi</h3>Isi Informasi</div>
		</div>
	</div>
</body>
</html>

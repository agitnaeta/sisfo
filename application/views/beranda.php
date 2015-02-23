<html>
	<html>
<head>
  
  <link href="<?php echo base_url();?>/src/css/bootflat.css" rel="stylesheet">
</head>
    <body>
   <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
            <div class="text-center">
            <h1>Aplikasi Replikasi</h1><small>Agit Naeta S.Kom</small>
            </div>
		</div>
	</div>
       <h1></h1>
	<div class="row clearfix">
		<div class="col-md-4 column">
		<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h3 class="panel-title">
						Konfigurasi Data
					</h3>
				</div>
                <div class="panel-body" id="warning"></div>
               
				<div class="panel-body">
					<form class="form-group" action="" method="post">
                        <label>Host  : <?php echo "$host";?></label>
                        <input readonly class="form-control" name="host" value="<?php echo "$host";?>" id="host"/>
                        <label>User</label>
                        <input readonly class="form-control" name="user" value="<?php echo "$user";?>"  id="user"/>
                        <label>Password</label>
                        <input  readonly class="form-control" name="pass" id="pass" value="<?php echo "$pass";?>"/>
                        <label>Database</label>
                        <input readonly class="form-control" name="dbase" id="dbase" value="<?php echo "$dbase";?>"/>
                   
				</div>
	
				<div class="panel-footer text-center">
					<button class="btn btn-primary" type="submit" >
                        <i class="glyphicon glyphicon-cog"></i> Buat Master 
                    </button>
                    <a href="<?php echo base_url();?>" class="btn btn-warning" type="reset">
                        <i class="glyphicon glyphicon-repeat"></i> Re-Config
                    </a>
                     </form>
				</div>
			</div>
		</div>
		<div class="col-md-4 column">
			<a class="bn-primary btn" href="showMaster">Master Status</a>
		</div>
		<div class="col-md-4 column">
		<table class="table table-hover">
		<thead>
			<th>File</th><th>Position</th><th>Binlog_Do_DB</th><th>Binlog_Ignore_DB</th>
		</thead>
		<?php foreach ($master->result() as $key): ?>
		<tbody>
			<tr>
				<td><?php echo $key->File;?></td>
			</tr>
		</tbody>			
		<?php endforeach ?>
		</table>
		</div>
	</div>
</div>
    </body>
</html>
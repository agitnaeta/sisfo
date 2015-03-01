<div id="log_siswa" class="panel panel-primary">
				<div class="panel-heading">
					Login Siswa
				</div>
				<div id="apa"></div>
				<div class="panel-body">
				<div id="error" class="error">
					 <?php echo validation_errors() ;?>
				</div>
				 
					<form class="form-group" method="post" action="<?php echo site_url('siswa/login/ceklogin');?>">
						<label><i class="glyphicon glyphicon-user"></i> NIS</label>
						<input id="nis" class="form-control" type="text" name="nis" required placeholder="NIS"><br>
						<label><i class="glyphicon glyphicon-lock"></i> Password</label>
						<input id="password" class="form-control" type="text" name="password" required placeholder="Password">
				</div>
				<div class="panel-footer text-right">
						<button id="login" type="submit" class="btn btn-block btn-primary">
						<i class="glyphicon glyphicon-log-in"></i> Login</button>
					</form>
				</div>
			</div>
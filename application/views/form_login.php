<div id="log_siswa" class="panel panel-primary">
				<div class="panel-heading">
					Silahkan Login
				</div>
				<div id="apa"></div>
				<div class="panel-body">
				<div id="error" class="error">
					 <?php echo $this->session->flashdata('salah');;?>
				</div>
				 
					<form class="form-group" method="post" action="<?php echo site_url('login/cekLogin');?>">
						<label><i class="glyphicon glyphicon-user"></i> Username</label>
						<input  class="form-control" type="text" name="username" required placeholder="Username"><br>
						<label><i class="glyphicon glyphicon-lock"></i> Password</label>
						<input class="form-control" type="text" name="password" required placeholder="Password">
				</div>
				<div class="panel-footer text-right">
						<button id="login" type="submit" class="btn btn-block btn-primary">
						<i class="glyphicon glyphicon-log-in"></i> Login</button>
					</form>
				</div>
			</div>
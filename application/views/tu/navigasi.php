<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					  <a class="navbar-brand" href="" <i class="glyphicon glyphicon-home"></i> Halaman Utama</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo site_url('tu/kelola_siswa');?>">SISWA</a>
						</li>
						<li>
							<a id="guru" href="<?php echo site_url('tu/kelola_guru');?>">GURU</a>
						</li>
						<li>
							<a href="#">BAYARAN</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li>
						<div >
							<a title="Log Out" class="btn btn-sm btn-danger" title="Logout" href="<?php echo site_url('login/logout');?>">
							<i class="glyphicon glyphicon-remove"></i>
							</a>
						</div>
					</li>
					<li>
						<h3> <i></i>-- </h3>
					</li>
						
					</ul>
				</div>
			</nav>

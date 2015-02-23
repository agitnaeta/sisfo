<html>
<head>
  <link href="src/css/bootstrap.min.css" rel="stylesheet">

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
		</div>
		<div class="col-md-4 column">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
					<h3 class="panel-title">
						Setting DBMS
					</h3>
				</div>
                <div class="panel-body" id="warning"></div>
				<div class="panel-body">
					<form class="form-group" action="config/sync" method="post">
                        <label>Host</label>
                        <input required class="form-control" name="host" id="host"/>
                        <label>User</label>
                        <input required class="form-control" name="user" id="user"/>
                        <label>Password</label>
                        <input  class="form-control" name="pass" id="pass"/>
                        <label>Database</label>
                        <input required class="form-control" name="dbase" id="dbase"/>
                   
				</div>
				<div class="panel-footer text-center">
					<button class="btn btn-primary" type="submit" >
                        <i class="glyphicon glyphicon-cog"></i> Konfigurasi 
                    </button>
                    <button class="btn btn-warning" type="reset">
                        <i class="glyphicon glyphicon-off"></i> Reset 
                    </button>
                     </form>
				</div>
			</div>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
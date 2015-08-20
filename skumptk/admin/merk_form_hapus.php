<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("lib_func.php"); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><<--E ORDER-->></title>
		<!-- Bootstrap -->
    	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/css.css">
	</head>
<body>

<div class="container header">
	<div class="page-header">
		<?php header_web();?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<div class="menu text-center">
			<?php menu();?>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="layout">
			<form method=post action="merk_hapus.php">
				<div>
					<h3 class="text-center">
					PENGHAPUSAN MERK
					</h3>
				</div>
				<br>
				<br>
				<div class="container">
					<div class="form-group">
                      <label class="col-lg-2 control-label text-right">ID Merk</label>
                      <div class="col-lg-5">
                        <input type="text" class="form-control" name="id_merk" placeholder="ID Merk" maxlength=10>
                      </div>
                    </div>
				</div>
				<br>
				<br>
			    <div class="text-center">
                    <button type="submit" class="btn btn-primary" id="Hapus">Hapus</button>
                </div>
            </form> 
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="footer">
		<?php footer_web();?>
	</div>
</div>


<script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

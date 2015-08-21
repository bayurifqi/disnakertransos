<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("lib_func.php"); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SKUMPTK</title>
		<!-- Bootstrap -->
    	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/css.css">
	</head>
<body>
<!-- masih error di line 35 -->
<div class="container header">
	<div class="page-header">
		<?php header_web();?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="menu text-center">
			<?php menu();?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="layout">
				<h3 class="text-center">
					PENGHAPUSAN DATA TUNJANGAN PEGAWAI
				</h3>
			</div>
			<div class="container">
					<div class="form-group">
                        <?php
							$nip= $_POST['nip'];
							$link = koneksi_db();
							$sql = "DELETE FROM t_tunjangan WHERE nip='$nip'";
							$res = mysql_query($sql,$link);
							if ($res) {
								?>
								<div class="info">Data Tunjangan pegawai dengan NIP <?=$nip?> telah dihapus.</div>
								<?php
							 } 
							 else {
							 	?>
							 	<div class="error">Data Tunjangan pegawai dengan NIP <?=$nip?> gagal dihapus, dengan pesan kesalahan <b><?=mysql_error();?></b></div>
							 	<?php
							 }
						?>
                      
                    </div>
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

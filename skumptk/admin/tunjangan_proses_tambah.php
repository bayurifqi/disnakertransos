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
		<div class="col-md-3">
			<div class="menu text-center">
			<?php menu();?>
			</div>
		</div>
		<div class="col-md-9">
			<div class="layout">
				<h3 class="text-center">
					Penambahan Data Tunjangan
				</h3>
			<?php

			 $nip = $_POST['nip'];
			 $sampingan = $_POST['sampingan'];
			 $pensiunan = $_POST['pensiunan'];
			 
			 $link = koneksi_db(); 
			 $sql = "INSERT INTO `db_disnakertransos_2014`.`t_tunjangan` (`nip`, `sampingan`, `pensiunan`) VALUES ('$nip', '$sampingan', '$pensiunan')";
			 $res = mysql_query($sql, $link);
			 if($res){
			 	$nip = mysql_insert_id($link);?>
			 	<div class="alert alert-success text-center" role="alert">Data dengan  <b><?=$nip;?></b> telah disimpan </div>
			 	<?php
			 }
			 else{ ?>
			 <div class="alert alert-danger text-center" role="alert">Terjadi kesalahan dalam penyimpanan Data Tunjangan yang baru. Silakan diulang KEMBALI</div>
			 <?php 
			}?> 
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

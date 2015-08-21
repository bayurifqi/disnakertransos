<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("lib_func.php");
		$link = koneksi_db();
		 ?>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SKUMPTK</title>
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
			<?php
			$nip = $_POST['nip'];
			
			$link = koneksi_db();
			$sql="SELECT * FROM t_tunjangan WHERE nip='$nip'";
			$res= mysql_query($sql);
			if (mysql_num_rows($res)==1) {
			 	$data = mysql_fetch_array($res);?>
			 	<form method="post" action="tunjangan_proses_hapus.php">
			 		<div>
						<h3 class="text-center">
						DATA TUNJANGAN PEGAWAI
						</h3>
					</div>
					<br>
					<br>
					<div class="row">
					<div class="container">
						<div class="form-group">
	                      <label for="nip" class="col-md-3 control-label text-right">NIP</label>
	                      <div class="col-md-5">
	                      	<label name="nip"><?=$data['nip']?></label>
	                      	<input type="hidden" name="nip" value="<?=$data['nip']?>"> 	                        
	                      </div>
	                    <br><br>               
	                    </div>
						<div class="form-group">
	                      <label for="sampingan" class="col-md-3 control-label text-right">Sampingan</label>
	                      <div class="col-md-5">
	                      	<label name="sampingan"><?=$data['sampingan']?></label>	                        
	                      </div>
	                      <br><br>
	                    </div>
	                    <div class="form-group">
	                      <label for="pensiunan" class="col-md-3 control-label text-right">pensiunan</label>
	                      <div class="col-md-5">
	                      	<label name="pensiunan"><?=$data['pensiunan']?></label>							  
						  </div>
	                    </div>
	                    <br><br>
	                </div>
					</div>
					<br>
					<br>
				    <div class="text-center">
	                    <button type="submit" class="btn btn-primary" id="Hapus">Hapus</button>
	                    <button type="button" class="btn btn-primary" value="Batal" onclick="javascript:history.back()">Batal</button>
	                </div>
			 	</form>
			<?php
			 }
			 else {
			 	?>
			 	<div class="alert alert-danger" role="alert">Data merk tidak ditemukan !</div>
			 	<?php
			 }
			?>
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

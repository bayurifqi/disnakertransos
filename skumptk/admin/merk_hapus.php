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
			<?php
			$id_merk = $_POST['id_merk'];
			$link = koneksi_db();
			$sql="SELECT * FROM merk WHERE id_merk='$id_merk'";
			$res= mysql_query($sql);
			if (mysql_num_rows($res)==1) {
			 	$data = mysql_fetch_array($res);?>
			 	<form method="post" action="merk_proses_hapus.php">
			 		<div>
						<h3 class="text-center">
						EDIT MERK
						</h3>
					</div>
					<br>
					<br>
					<div class="row">
					<div class="container">
						<div class="form-group">
	                      <label for="id_merk" class="col-md-4 control-label text-right">ID Merk</label>
	                      <div class="col-md-5">
	                      	<label name="id_merk"><?=$data['id_merk']?></label>
	                      	<input type="hidden" name="id_merk" value="<?=$data['id_merk']?>"> 	                        
	                      </div>
	                    <br><br>               
	                    </div>
						<div class="form-group">
	                      <label for="nama" class="col-md-4 control-label text-right">Nama Merk</label>
	                      <div class="col-md-5">
	                      	<label name="nama"><?=$data['nama']?></label>	                        
	                      </div>
	                      <br><br>
	                    </div>
	                    <div class="form-group">
	                      <label for="dihapus" class="col-md-4 control-label text-right">Status Dihapus</label>
	                      <div class="col-md-5">
	                      	<label name="dihapus"><?=$data['dihapus']?></label>							  
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

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
			 	<form method="post" action="tunjangan_proses_update.php">
			 		<div>
						<h3 class="text-center">
						EDIT DATA TUNJANGAN PEGAWAI
						</h3>
					</div>
					<br>
					<br>
					<div class="row">
					<div class="container">
						<div class="form-group">
	                      <label for="nip" class="col-md-3 control-label text-right">NIP</label>
	                      <div class="col-md-5">
	                        <input type="text" class="form-control" id="nip" name="nip" value="<?=$data['nip']?>" readonly>
	                      </div>
	                    <br><br>               
	                    </div>
						<div class="form-group">
	                      <label for="nama" class="col-md-3 control-label text-right">Sampingan</label>
	                      <div class="col-md-5">
	                        <input type="text" class="form-control" id="sampingan" name="sampingan" value="<?=$data['sampingan']?>" size=31 maxlength=30>
	                      </div>
	                      <br><br>
	                    </div>
	                    <div class="form-group">
	                      <label for="nama" class="col-md-3 control-label text-right">Pensiunan</label>
	                      <div class="col-md-5">
	                        <input type="text" class="form-control" id="pensiunan" name="pensiunan" value="<?=$data['pensiunan']?>" size=31 maxlength=30>
	                      </div>
	                      <br><br>
	                    </div>
	                    <!--<div class="form-group">
	                      <label for="nama" class="col-md-3 control-label text-right">Status Dihapus</label>
	                      <div class="btn-group col-md-5" data-toggle="buttons">
							  <label class="btn btn-primary active">
							    <input type="radio" name="dihapus" autocomplete="off" value="Y" <?php if($data['dihapus']=="Y") echo "checked";?>> Ya
							  </label>
							  <label class="btn btn-primary">
							    <input type="radio" name="dihapus" autocomplete="off" value="T" <?php if($data['dihapus']=="T") echo "checked";?> checked> Tidak
							  </label>
						  </div>
	                    </div>-->
	                    <br><br>
	                </div>
					</div>
					<br>
					<br>
				    <div class="text-center">
	                    <button type="submit" class="btn btn-primary" value="Update">Update</button>
	                    <button type="button" class="btn btn-primary" value="Batal" onclick="javascript:history.back()">Batal</button>
	                </div>
			 		<!--<table align="center" bgcolor="white" border=0>
			 			<tr>
			 				<td colspan=2 align="center" class="judultable">
			 					<b>EDIT MERK</b>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					ID MERK
			 				</td>
			 				<td>
			 					<input type="text" name="id_merk" value="<?=$data['id_merk']?>" readonly>
			 				</td>
			 			</tr>
			 			<tr>
			 				<td>
			 					Nama Merk
			 				</td>
			 				<td>
			 					<input type="text" name="nama" value="<?=$data['nama']?>" size=31 maxlength=30>
			 				</td>
			 			</tr>
			 			<tr>	
			 				<td>
			 					Status Dihapus
			 				</td>
			 				<td>
			 					<input type="radio" name="dihapus" value="Y" <?php if($data['dihapus']=="Y") echo "checked";?>>
			 					Ya <br>
			 					<input type="radio" name="dihapus" value="T" <?php if($data['dihapus']=="T") echo "checked";?>>
			 					Tidak
			 				</td>
			 			</tr>
			 			<tr>
			 				<td></td>
			 				<td>
			 					<input type="submit" value="Update">
			 					<input type="button" onclick="javascript:history.back()" value="Batal">
			 				</td>
			 			</tr>
			 		</table>-->
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

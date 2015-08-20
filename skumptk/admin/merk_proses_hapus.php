<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("lib_func.php"); ?> 
	<title> Situs e-Order </title> 
	<link rel="SHORTCUTICON" href="favicon.ico"> 
	<link href="css.css" rel="stylesheet" type="text/css"> 
</head>

<body>

<table width="100%" align="center" border=0 bordercolor="#FFFFFF"> 
	<tr>
		<td colspan=2 align="center" bgcolor="#0000CC">
			<?php header_web();?>
		</td>
	</tr>
	<tr> 
		<td width="200px" valign="top" bgcolor="white">
			<?php menu();?>
		</td> 
		<td valign="top">
			<p class="judul">PENGHAPUSAN MERK</p> 
			<?php
			//$id_merk = isset($_POST['id_merk']);
			$id_merk= $_POST['id_merk'];
			echo "$id_merk";
			$link = koneksi_db();
			$sql = "UPDATE merk SET dihapus='Y' WHERE id_merk='$id_merk'";
			$res = mysql_query($sql,$link);
			if ($res) {
				?>
				<div class="info">Data Merk dengan ID <?=$id_merk?> telah dihapus.</div>
				<?php
			 } 
			 else {
			 	?>
			 	<div class="error">Data merk dengan ID <?=$id_merk?> gagal dihapus, dengan pesan kesalahan <b><?=mysql_error();?></b></div>
			 	<?php
			 }
			?>
			<p>&nbsp;</p>
		</td> 
	</tr>
	<tr>
		<td colspan=2 bgcolor="#FFCC00">
			<?php footer_web();?>
		</td>
	</tr>
</table>
</body>
</html>

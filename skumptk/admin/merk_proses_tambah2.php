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
			<p class="judul">PENAMBAHAN MERK</p> 
			<?php
			 $nama = $_POST['namamerk'];
			 $link = koneksi_db(); 
			 $sql = "insert into merk values(null,'$nama','T')";
			 $res = mysql_query($sql, $link);
			 if($res){
			 	$id_merk = mysql_insert_id($link);?>
			 	<div class="info">Data merk <b><?=$nama;?></b> telah disimpan dengan id merk <b><?=$id_merk;?></b></div>
			 	<?php
			 }
			 else{ ?>
			 <div class="error">Terjadi kesalahan dalam penyimpanan data merk baru. Silakan dilang lagi</div>
			 <?php 
			}?> 
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

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
			$id_merk =$_POST['id_merk'];
			$link=koneksi_db();
			$sql="SELECT * FROM merk WHERE id_merk='$id_merk'";
			$res=mysql_query($sql);
			if (mysql_num_rows($res)==1) {
				$data=mysql_fetch_array($res);?>

				<form method="post" action="merk_proses_hapus.php">
					<input type="hidden" name="id_merk" value="<?=$data['id_merk']?>">
					<table align="center" bgcolor="white" border=0>
						<tr>
							<td colspan=2 align="center" class="judultable">
								<b>HAPUS MERK</b>
							</td>
						</tr>
						<tr>
							<td>ID Merk</td>
							<td>
								<b><?=$data['id_merk']?></b>
							</td>
						</tr>
						<tr>
							<td>Nama Merk</td>
							<td>
								<b><?=$data['nama']?></b>
							</td>
						</tr>
						<tr>
							<td>Hapus Merk</td>
							<td>
								<b><?=$data['dihapus']?></b>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Hapus">
								<input type="button" onclick="javascript:history.back()" value="Batal">
							</td>
						</tr>
					</table>
				</form>
				<?php
			 } 
			 else {
			 	?>
			 	<div class="warning">Data merk yang akan diedit tidak ditemukan.</div>
			 	<?php
			 }
			?>
			<p>&nbsp;</p></td> 
	</tr>
	<tr>
		<td colspan=2 bgcolor="#FFCC00">
			<?php footer_web();?>
		</td>
	</tr>
</table>
</body>
</html>

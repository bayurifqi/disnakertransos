<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("lib_func.php"); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SKUMPTK</title>
		<!-- Bootstrap -->
    	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="../css/css.css">
    	<link href="../css/css.css" rel="stylesheet" type="text/css">
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
			<div>
				
				<h3 class="text-center">
					<b>DATA DIRI</b>
				</h3>
				<?php
				$link=koneksi_db();
				$sql="SELECT t_identitas.nama, t_tunjangan.sampingan, t_tunjangan.pensiunan FROM t_tunjangan JOIN t_identitas USING (nip)";
				$res=mysql_query($sql,$link);
				$banyakrecord=mysql_num_rows($res);
				if($banyakrecord>0){
					?>
					<!--<div class="alert alert-info text-center" role="alert">Data Merk ditemukan sebanyak <b><?=$banyakrecord?></b> Record</div>-->
					<div class="table-responsive">
						<table class="table">
						<tr class="text-center judultabel"><b>
							<td>Nama </td>
							<td>Tunjangan Sampingan</td>
							<td>Tunjangan Pensiunan</td>

						</b></tr>
						<?php
						$i=0;
						while($data=mysql_fetch_array($res)){
							$i++;?>
							<tr>
								<td width="30%" align="center" >
									<?php echo $data['nama'];?>
								</td>
								<td width="30%" align="center">
									<?php echo $data['sampingan'];?>
								</td>
								<td width="30%" align="center">
									<?php echo $data['pensiunan'];?>
								</td>

							</tr>
						<?php }?>
						</table>
					</div>
						<?php
				}else{
					?>
					<div class="alert alert-danger text-center" role="alert">Data Tunjangan tidak ditemukan</div>
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

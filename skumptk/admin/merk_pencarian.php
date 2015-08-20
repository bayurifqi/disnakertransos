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
		<!div class="container">
			<div class="col-md-3">
				<div class="menu text-center">
				<?php menu();?>
				</div>
			</div>
		<!/div>		
		<!div class="container">
			<div class="col-md-9">
				<div align="center">
					<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
							<div class="form-group">
								<div class="col-md-12">
									<h3 class="text-center">
										PENCARIAN MERK
									</h3>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<select name="fieldcari" class="form-control">
											<option value="id_merk" <?php if (isset($_POST['fieldcari'])=="id_merk") echo "selected";?>>ID_MERK</option>
											<option value="nama" <?php if (isset($_POST['fieldcari'])=="nama")	echo "selected";?>>NAMA MERK</option>
										</select>
									</div>
								</div>
								<div class="form-group">
					                <div class="col-lg-8">
					                    <div class="input-group">
					                      <input type="text" name="keyword" class="form-control" placeholder="Pencarian..." size=10 maxlenght=30 value="<?php if (isset($_POST['keyword'])) echo $_POST['keyword'];?>">
					                      <span class="input-group-btn">
					                        <button class="btn btn-primary" type="submit" name="tblcari">Cari</button>
					                      </span>
					                    </div>
					                </div>
								</div>
							</div>						
					</form>
				</div>
			</div>
		<!/div>
		<div class="container">
			<?php
			if (isset($_POST['tblcari'])) {
				$link=koneksi_db();
				$sql="SELECT * FROM merk";
				$fieldcari=$_POST['fieldcari'];
				$keyword = $_POST['keyword'];
				if ($_POST['tblcari']=="Cari") 
				{
					$sql=$sql." WHERE $fieldcari LIKE '%$keyword%'";
				}
				$sql.="ORDER BY nama"; 
				$res=mysql_query($sql,$link);
				$banyakrecord=mysql_num_rows($res);
				if($banyakrecord>0){
					?>
					<div class="alert alert-info" role="alert">Data Merk ditemukan sebanyak <b><?=$banyakrecord?></b> Record</div>
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>ID MERK</td>
								<td>NAMA</td>
								<td>DIHAPUS</td>
							</tr>
							<?php
							$i=0;
							while($data=mysql_fetch_array($res)){
								$i++;
								?>
							<tr>
								<td align="center">
									<?php echo $data['id_merk'];?>
								</td>
								<td>
									<?php echo $data['nama'];?>
								</td>
								<td align="center">
									<?php echo $data['dihapus'];?>
								</td>
							</tr>
							<?php
							}?>
						</table>
					</div>
						<?php
				}else{
					?>
					<div class="alert alert-danger" role="alert">Data Merk tidak ditemukan</div>
					<?php
				}
			}?>
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

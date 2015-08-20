<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include("lib_func.php");
        $link=koneksi_db();
        
        

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
		<div class="col-lg-3">
			<div class="menu text-center">
			<?php menu();?>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="layout">
			<form method=post action="diri_proses_tambah.php">
				<div>
					<h3 class="text-center">
					TAMBAH IDENTITAS BARU
					</h3>
				</div>

				<br>
				<br>
				<div class="container">
          <div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">NIP</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" maxlength=23>
                      </div>
                    </div>
        </div>
        <div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Nama Lengkap</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" maxlength=30>
                      </div>
                    </div>
				</div>
				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Tempat Lahir</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" maxlength=30>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Tanggal Lahir</label>
                      <div class="col-lg-4">
                        <input type="text" type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" >
                        <!--<input type="text" class="form-control" id="tgllahir" name="tgllahir" placeholder="Tanggal Lahir" maxlength=30>-->
                      </div>
                    </div>
				</div>
				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Jenis Kelamin</label>
                      <div class="col-lg-4">
                      <label>
                        <input type="radio"  id="jenis_kelamin" name="jenis_kelamin" value="L">   Laki-laki
                      </label>
                      <label>
                        <input type="radio"  id="jenis_kelamin" name="jenis_kelamin" value="P">   Perempuan
                      </label>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Agama</label>
                      <div class="col-lg-4">
                      <select name="agama">
                      <?php 
                      $sql="SELECT * FROM r_agama";
                      $res=mysql_query($sql,$link);
                      $banyakrecord=mysql_num_rows($res);
                      if($banyakrecord>0){
             
                        while($data=mysql_fetch_array($res)){
                            echo "<option value='$data[kd_agama]'>$data[nama_agama]</option>";
                      
                        }
                        
                      }
                      ?>
                      </select>


                      </div>
                    </div>
				</div>
				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Status Kepegawaian</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="status_kepeg" name="status_kepeg" placeholder="status kepegawaian" maxlength=30>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Jabatan Struktural/Fungsional</label>
                      <div class="col-lg-4">
                        <select name="jabatan">
                      <?php 
                      $sql="SELECT * FROM r_jabatan";
                      $res=mysql_query($sql,$link);
                      $banyakrecord=mysql_num_rows($res);
                      if($banyakrecord>0){
             
                        while($data=mysql_fetch_array($res)){
                            echo "<option value='$data[kd_jabatan]'>$data[nama_jabatan]</option>";
                      
                        }
                        
                      }
                      ?>
                      </select>
                      </div>
                    </div>
				</div>
				<div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Pangkat/Gol Ruang</label>
                      <div class="col-lg-4">
                        <select name="pangkat">
                        <?php 
                        $sql="SELECT * FROM r_pangkat";
                        $res=mysql_query($sql,$link);
                        $banyakrecord=mysql_num_rows($res);
                        if($banyakrecord>0){
               
                          while($data=mysql_fetch_array($res)){
                              echo "<option value='$data[kd_pangkat]'>$data[nama_pangkat] / $data[gol_ruang]</option>";
                        
                          }
                          
                        }
                        ?>
                        </select>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="nama" class="col-lg-2 control-label text-right">Instansi</label>
                      <div class="col-lg-4">
                        <select name="instansi">
                        	<option value="1">Disnakertransos</option>
                        	<option value="2">Disdukcapil</option>
                        </select>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Masa Kerja</label>
                      <div class="col-lg-2">
                        <input type="text" class="form-control" id="masakerja" name="masakerja" placeholder="masa kerja" maxlength=30>
                      </div>
                    </div>
				</div>

				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Gaji Berdasarkan</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="gaji" name="gaji" placeholder="...." maxlength=30>
                      </div>
                    </div>
				</div>
				<div class="container">
					<div class="form-group">
                      <label for="namamerk" class="col-lg-2 control-label text-right">Alamat Tinggal</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat tinggal" maxlength=100>
                      </div>
                    </div>
				</div>				

				<br>
				<br>
			    <div class="text-center">
                    <button type="submit" class="btn btn-primary" id="Simpan">Simpan</button>
                </div>
            </form> 
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

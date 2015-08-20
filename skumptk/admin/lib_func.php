<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SKUMPTK</title>
<!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>

<body>

<?php
function header_web()
{ ?> 
<h2>Situs SKUMPTK</h2>

<?php } 

function footer_web()
{ ?> 
	<div class="text-center">
		<h4>Developed By Mahasiswa Unikom</h4>
	</div>
<?php } 

function form_login(){ ?> 
<form method=post action="login.php"> 
<table border=0 width="100%" bgcolor="white" align="center"> 
	<tr>
		<td colspan=2 align="center" bgcolor="#CCCCCC">
			<b>LOGIN USER</b>
		</td>
	</tr> 
	
	<tr>
		<td>Username</td>
		<td><input type="text" name="username" maxlength="8" size="9"></td>
	</tr> 
	
	<tr>
		<td>Password</td>
		<td><input type="password" name="userpass" maxlength="8" size="9"></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="submit" name="btn_submit" value="Login"></td>
	</tr> 
</table> 
</form> 

<?php } 
function menu_admin(){ ?> 
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
      <a href="index.php"><h3>SKUMPTK DISNAKERTRANSOS</h3></a>
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Data Diri
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="list-group">
        <a href="diri_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="diri_form_edit.php" class="list-group-item">Ubah</a>
        <a href="merk_form_hapus.php" class="list-group-item">Hapus</a>
        <a href="diri_view.php" class="list-group-item">View</a>
        <a href="merk_pencarian.php" class="list-group-item">Cari</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Data Keluarga
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="list-group">
        <a href="keluarga_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="keluarga_form_edit.php" class="list-group-item">Ubah</a>
        <a href="keluarga_form_hapus.php" class="list-group-item">Hapus</a>
        <a href="keluarga_view.php" class="list-group-item">View</a>
        <a href="keluarga_pencarian.php" class="list-group-item">Cari</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Data Tunjangan
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="list-group">
        <a href="Tunjangan_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="Tunjangan_form_edit.php" class="list-group-item">Ubah</a>
        <a href="Tunjangan_form_hapus.php" class="list-group-item">Hapus</a>
        <a href="tunjangan_view.php" class="list-group-item">View</a>
        <a href="Tunjangan_pencarian.php" class="list-group-item">Cari</a>
      </div>
    </div>
  </div>
  <!--<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Data Member
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="list-group">
        <a href="member_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="member_form_edit.php" class="list-group-item">Ubah</a>
        <a href="member_form_hapus.php" class="list-group-item">Hapus</a>
        <a href="member_view.php" class="list-group-item">View</a>
        <a href="member_pencarian.php" class="list-group-item">Cari</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Data Pesanan
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="list-group">
        <a href="pesanan_form_tambah.php" class="list-group-item">Tambah</a>
        <a href="pesanan_form_edit.php" class="list-group-item">Ubah</a>
        <a href="pesanan_form_hapus.php" class="list-group-item">Hapus</a>
        <a href="pesanan_view.php" class="list-group-item">View</a>
        <a href="pesanan_pencarian.php" class="list-group-item">Cari</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          LOGOUT
        </a>
      </h4>
    </div>
  </div>-->
</div>

<?php }

function menu(){ 
$telahlogin=true; //Nanti di isi perintah pemeriksaan status login 
	if($telahlogin==false) 
		form_login(); 
	else 
		menu_admin(); 
} 

function koneksi_db(){ 

	$host = "localhost"; 
	$database = "db_disnakertransos_2014"; 
	$user = "root"; 
	$password = ""; 
	$link = mysql_connect($host,$user,$password); 
	mysql_select_db($database,$link); 
	
	if(!$link) 
		echo "Error :".mysql_error(); 
		return $link; 

}?>
	<script src="../bootstrap/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

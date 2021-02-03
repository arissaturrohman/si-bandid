<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'asset/inc/config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");


// cek apakah username dan password di temukan pada database
if(mysqli_num_rows($sql)==1){
			$qry = mysqli_fetch_array($sql);
			$_SESSION['id_user']	= $qry['id_user'];
			$_SESSION['username']	= $qry['username'];
			$_SESSION['nama_user']	= $qry['nama_user'];
			$_SESSION['level']	= $qry['level'];
			
			if($qry['level']=="admin"){
				header("location:index.php");
			}
			if($qry['level']=="user"){
				header("location:index.php");
			}
		}
else{
			?>
			<script language="JavaScript">
				alert('Login Failed. Username & password tidak sesuai ...');
				document.location='./';
			</script>
			<?php
		}

?>
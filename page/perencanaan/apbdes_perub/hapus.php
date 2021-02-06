<?php
include "../../../asset/inc/config.php";
$id_apbdes_perub = $_GET['id_apbdes_perub'];
$sql = "SELECT * FROM tb_apbdes_perub WHERE id_apbdes_perub= '$id_apbdes_perub'";
$result = mysqli_query($koneksi,$sql);
while($data = mysqli_fetch_assoc($result))
     { 
		$apbdes_perub = $data['apbdes_perub'];
		$perdes = $data['perdes'];
		unlink("file/apbdes_perub/".$apbdes_perub);
		unlink("file/perdes/".$perdes);
     }
$id_apbdes_perub = mysqli_real_escape_string($koneksi,$_GET['id_apbdes_perub']);
$query = mysqli_query($koneksi,"DELETE FROM tb_apbdes_perub WHERE id_apbdes_perub='$id_apbdes_perub' ");
header('location:../../../index.php?page=apbdes_perub');
?>
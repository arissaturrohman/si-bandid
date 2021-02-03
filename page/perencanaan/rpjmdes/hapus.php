<?php
include "../../../asset/inc/config.php";
$id_rpjmdes    = mysqli_real_escape_string($koneksi,$_GET['id_rpjmdes']);
$query = mysqli_query($koneksi,"DELETE FROM tb_rpjmdes WHERE id_rpjmdes='$id_rpjmdes' ");
header('location:../../../index.php?page=rpjmdes');
?>
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../asset/inc/config.php';

  // membuat variabel untuk menampung data dari form

  $rpjmdes = $_FILES['rpjmdes']['name'];
  $perdes = $_FILES['perdes']['name'];
  $validasi = $_POST['valid'];
  $id_user = $_POST['id_user'];
  $tahun = $_POST['tahun'];

  var_dump($tahun);

//cek dulu jika ada gambar produk jalankan coding ini
if($rpjmdes != "") {
  $ekstensi_diperbolehkan = array('xlsx','xls','doc','docx','pdf'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $rpjmdes); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_rpjmdes_tmp = $_FILES['rpjmdes']['tmp_name'];   
  $nama_rpjmdes_baru = $rpjmdes; //menggabungkan angka acak dengan nama file sebenarnya

//cek dulu jika ada gambar produk jalankan coding ini
if($perdes != "") {
  $ekstensi_diperbolehkan = array('xlsx','xls','doc','docx','pdf'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $perdes); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_perdes_tmp = $_FILES['perdes']['tmp_name'];   
  $nama_perdes_baru = $perdes; //menggabungkan angka acak dengan nama file sebenarnya

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_rpjmdes_tmp, '../../../file/rpjmdes/'.$nama_rpjmdes_baru); //memindah file gambar ke folder gambar
                move_uploaded_file($file_perdes_tmp, '../../../file/perdes/'.$nama_perdes_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO tb_rpjmdes (rpjmdes, perdes, id_user, tahun, validasi) VALUES ('$rpjmdes', '$perdes', '$id_user', '$tahun', '$validasi')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    header("Location:../../../index.php?page=rpjmdes");
                  }

            }
          } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi file yang diperbolehkan hanya xlsx,docx,pdf');window.location='../../../index.php?page=rpjmdes';</script>";
            }
} else {
   $query = "INSERT INTO tb_rpjmdes (rpjmdes , perdes) VALUES ('$rpjmdes', '$perdes', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php?page=rpjmdes';</script>";
                  }
}

 


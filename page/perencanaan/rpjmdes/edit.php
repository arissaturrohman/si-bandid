<?php 
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../asset/inc/config.php';

if (isset($_POST['update'])) 
{
	$id_rpjmdes = $_POST['id_rpjmdes'];
	$rpjmdes = $_FILES['rpjmdes']['name'];
	$perdes = $_FILES['perdes']['name'];

//cek dulu jika ada file rpjmdes jalankan coding ini
if($rpjmdes != "") {
  $ekstensi_diperbolehkan = array('xlsx','xls','doc','docx','pdf'); //ekstensi file yang bisa diupload 
  $x = explode('.', $rpjmdes); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_rpjmdes_tmp = $_FILES['rpjmdes']['tmp_name'];   
  $nama_rpjmdes_baru = $rpjmdes; //jika ingin nama file dirubah

//cek dulu jika ada file rpjmdes jalankan coding ini
if($perdes != "") {
  $ekstensi_diperbolehkan = array('xlsx','xls','doc','docx','pdf'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $perdes); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_perdes_tmp = $_FILES['perdes']['tmp_name'];   
  $nama_perdes_baru = $perdes; //jika ingin nama file dirubah

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_rpjmdes_tmp, '../../../file/rpjmdes/'.$nama_rpjmdes_baru); //memindah file ke folder file/rpjmdes
                move_uploaded_file($file_perdes_tmp, '../../../file/perdes/'.$nama_perdes_baru); //memindah file ke folder file/perdes

                  $query = "UPDATE tb_rpjmdes SET  rpjmdes='$rpjmdes', perdes='$perdes' WHERE id_rpjmdes='$id_rpjmdes'";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {

                    header("Location:../../../index.php?page=rpjmdes");
                  }

            }
          } else {     
             //jika file ekstensi tidak pdf,xlsx,xls.doc.docx maka alert ini yang tampil
                echo "<script>alert('Ekstensi file yang boleh hanya pdf,xlsx,docx.');window.location='../../../index.php?page=rpjmdes';</script>";
            }
	}
}
 ?>
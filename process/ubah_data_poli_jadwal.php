<?php 
include '../config/koneksi.php';

$id_poli=$_POST['id_poli'];
$id_dokter=$_POST['id_dokter'];
$kode_poli=$_POST['kode_poli'];
$nama_poli=$_POST['nama_poli'];
$hari=$_POST['hari'];
$jam=$_POST['jam'];

mysql_query("UPDATE poli_jadwal SET kode_poli='$kode_poli', id_dokter='$id_dokter', nama_poli='$nama_poli', hari='$hari', jam='$jam' WHERE id_poli='$id_poli'");

header("location:../view/view_output/tampil_data_poli_jadwal.php?pesan=update");

?>
  




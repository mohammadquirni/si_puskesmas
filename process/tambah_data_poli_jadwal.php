<?php
include '../config/koneksi.php';

$id_dokter=$_POST['id_dokter'];
$kode_poli=$_POST['kode_poli'];
$nama_poli=$_POST['nama_poli'];
$hari=$_POST['hari'];
$jam=$_POST['jam']; 

mysql_query("INSERT INTO poli_jadwal VALUES('$id_poli', '$id_dokter', '$kode_poli', '$nama_poli', '$hari', '$jam')");

header("location:../view/view_output/tampil_data_poli_jadwal.php?pesan=input");    
          
?>

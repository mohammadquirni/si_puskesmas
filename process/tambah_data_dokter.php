<?php
include '../config/koneksi.php';

$kode_dokter=$_POST['kode_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat']; 
$jenis_kelamin=$_POST['jenis_kelamin'];
$spesialis=$_POST['spesialis'];

mysql_query("INSERT INTO dokter VALUES('$id_dokter', '$kode_dokter','$nama_dokter','$ttl','$alamat','$jenis_kelamin', '$spesialis')");

header("location:../view/view_output/tampil_data_dokter.php?pesan=input");    
          
?>

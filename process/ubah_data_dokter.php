<?php 
include '../config/koneksi.php';

$id_dokter=$_POST['id_dokter'];
$kode_dokter=$_POST['kode_dokter'];
$nama_dokter=$_POST['nama_dokter'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$spesialis=$_POST['spesialis'];

mysql_query("UPDATE dokter SET kode_dokter='$kode_dokter', nama_dokter='$nama_dokter', ttl='$ttl', alamat='$alamat', jenis_kelamin='$jenis_kelamin', spesialis='$spesialis' WHERE id_dokter='$id_dokter'");

header("location:../view/view_output/tampil_data_dokter.php?pesan=update");

?>
  




<?php
include '../config/koneksi.php';

$id_dokter = $_GET['id_dokter'];
mysql_query("DELETE FROM dokter WHERE id_dokter='$id_dokter'")or die(mysql_error());
header("location:../view/view_output/tampil_data_dokter.php?pesan=hapus"); 

?>
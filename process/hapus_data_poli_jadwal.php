<?php
include '../config/koneksi.php';

$id_poli = $_GET['id_poli'];
mysql_query("DELETE FROM poli_jadwal WHERE id_poli='$id_poli'")or die(mysql_error());
header("location:../view/view_output/tampil_data_poli_jadwal.php?pesan=hapus"); 

?>
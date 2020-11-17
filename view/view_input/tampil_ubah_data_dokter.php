<html>
<head>
  <title>Ubah Data Dokter</title>
  <link rel="stylesheet" type="text/css" href="../../assets/css/desain_admin.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        session_start();

          // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
          if($_SESSION['status'] !="login"){
            header("location:../../index.php");
          }
     ?>
     
    <div class="header">
        <h2>Web Bagian Admimistrasi</h2>
        <p>Sistem Pendaftaran Pasien</p>
        <p>Puskesmas Mamboro</p>
    </div>

    <div class="topnav">
        <a href="../beranda.php">Beranda</a>
        <a href="tampil_data_dokter.php">Daftar Dokter</a>
        <a href="tampil_data_poli_jadwal.php">Daftar Poli dan Jadwal</a>
        <a href="tampil_data_periksa_pasien.php">Daftar Periksa Pasien</a>
        <a href="tampil_data_pengguna.php">Daftar Pengguna</a>
        <a href="../../config/logout.php">Keluar</a>
    </div>

    <div class="row">
        <div class="column middle">
          <h1>Ubah Data Dokter</h1>
          <a href="../view_output/tampil_data_dokter.php">Kembali Ke Daftar Dokter</a><br><br>

          <?php 
          include '../../config/koneksi.php';
          $id_dokter = $_GET['id_dokter'];
          $query_mysql = mysql_query("SELECT * FROM dokter WHERE id_dokter='$id_dokter'")or die(mysql_error());
          $no = 1;
          while($data = mysql_fetch_array($query_mysql)){
          ?>

          <form action="../../process/ubah_data_dokter.php" method="POST">
             <table cellspacing="5" cellpadding="5">
                <tr>
                    <td>Kode Dokter : </td>
                    <td>
                      <input type="hidden" name="id_dokter" value="<?php echo $data['id_dokter']; ?>">
                      <input type="text" name="kode_dokter" value="<?php echo $data['kode_dokter'] ?>" />
                    </td>   
                </tr> 
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>" /></td>                 
                </tr>  
                <tr>
                    <td>TTL : </td>
                    <td><input type="text" name="ttl" value="<?php echo $data['ttl'] ?>" /></td>                 
                </tr>  
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" /></td>
                </tr>  
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td>
                    <input type="radio" name="jenis_kelamin" value="Laki - Laki" /> Pria
                    <input type="radio" name="jenis_kelamin" value="Perempuan" /> Wanita
                    </td>   
                </tr>  
                <tr>
                    <td>Spesialis : </td>
                    <td><input type="text" name="spesialis" value="<?php echo $data['spesialis'] ?>" /></td>     
                </tr>  
                <tr>
                    <td></td>
                    <td>
                       <input type="submit" name="simpan" value="Simpan" />
                       &nbsp;
                       <input type="reset" name="batal" value="Batal" />
                    </td>
                </tr>
                </table>
             </form>
             <?php } ?>         
        </div>
    </div>

    <div class="footer">
        <a><b>&copy; 165610079 - Mohammad Quirni</a></p>
    </div>

</body>
</html>
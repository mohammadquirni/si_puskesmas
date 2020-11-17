<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Beranda Bagian Administrasi</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/desain_admin.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <div class="header">
        <h2>Web Bagian Admimistrasi</h2>
        <p>Sistem Pendaftaran Pasien</p>
        <p>Puskesmas Mamboro</p>
    </div>

    <div class="topnav">
        <a href="beranda.php">Beranda</a>
        <a href="view_output/tampil_data_dokter.php">Daftar Dokter</a>
        <a href="view_output/tampil_data_poli_jadwal.php">Daftar Poli dan Jadwal</a>
        <a href="view_output/tampil_data_periksa_pasien.php">Daftar Periksa Pasien</a>
        <a href="view_output/tampil_data_pengguna.php">Daftar Pengguna</a>
        <a href="../config/logout.php">Keluar</a>
    </div>

    <div class="row">
        <div class="column middle">
          <?php 
          include '../config/koneksi.php';

          // mengaktifkan session
          session_start();

          // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
          if($_SESSION['status'] !="login"){
            header("location:../index.php");
          }

          // menampilkan pesan selamat datang
          echo "<h3><center>Selamat Datang ". $_SESSION['username'] ."</center></h3>";
          echo "<a><center>Di Web Bagian Administrasi Sistem Pendaftaran Pasien</center></a>";
          echo "<br/>";
          echo "<a><center>Puskesmas Mamboro</center></a>";
          echo "<br/>";
          ?>   
        </div>
    </div>

    <div class="footer">
        <a><b>&copy; 165610079 - Mohammad Quirni</a></p>
    </div>

  </body>
</html>


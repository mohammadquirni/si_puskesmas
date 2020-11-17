<html>
<head>
  <title>Daftar Poli dan Jadwal</title>
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
        <a href="tampil_data_pengguna.php">Daftar Pengguna Sistem</a>
        <a href="../../config/logout.php">Keluar</a>
    </div>

    <div class="row">
        <div class="column middle">
          <h1>Daftar Data Poli dan Jadwal</h1>

          <a href="../view_input/tampil_tambah_data_poli_jadwal.php">± Tambah Data Baru</a><br><br>
          <table border ="1" width="75%">
          <tr>
            <th>#</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Nama Dokter</th>
            <th>Hari</th>
            <th>Jam</th>
            <th colspan="2">Aksi</th>
          </tr>

          <?php
          include '../../config/koneksi.php';

          $tampil = mysql_query("SELECT *  FROM poli_jadwal 
                                 INNER JOIN dokter ON poli_jadwal.id_dokter = dokter.id_dokter ");
          $no = 1;
          while ($data = mysql_fetch_array($tampil)){
          ?>
            <tr> 
            <td><center><?=$no++?></center></td>
            <td><center><?=$data['kode_poli']?></center></td>
            <td><center><?=$data['nama_poli']?></center></td>
            <td><center><?=$data['nama_dokter']?></center></td>
            <td><center><?=$data['hari']?></center></td>
            <td><center><?=$data['jam']?></center></td>
            <td><center>
              <a href="../view_input/tampil_ubah_data_poli_jadwal.php?id_poli=<?php echo $data['id_poli']; ?>">Edit</a> 
              <a> | </a>
              <a href="../../process/hapus_data_poli_jadwal.php?id_poli=<?php echo $data['id_poli']; ?>">Hapus</a>
            </center></td>
            </tr>
          <?php } ?>
          </table>
        </div>
    </div>

    <div class="footer">
        <a><b>&copy; 165610079 - Mohammad Quirni</a></p>
    </div>

</body>
</html>
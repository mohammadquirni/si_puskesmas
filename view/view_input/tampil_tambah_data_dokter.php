<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Data Dokter </title>
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
        <a href="../view_output/tampil_data_dokter.php">Daftar Dokter</a>
        <a href="../view_output/tampil_data_poli_jadwal.php">Daftar Poli dan Jadwal</a>
        <a href="../view_output/tampil_data_periksa_pasien.php">Daftar Periksa Pasien</a>
        <a href="../view_output/tampil_data_pengguna.php">Daftar Pengguna</a>
        <a href="../../config/logout.php">Keluar</a>
    </div>

     <div class="row">
        <div class="column middle">
            <h1>Tambah Data Dokter</h1> 
            <a href="../view_output/tampil_data_dokter.php">Kembali Ke Daftar Dokter</a><br><br>

            <form action="../../process/tambah_data_dokter.php" method="POST">
                <table cellspacing="5" cellpadding="5">
                <tr>
                    <td>Kode Dokter : </td>
                    <td><input type="text" name="kode_dokter" placeholder="Isi Kode Dokter..." /></td>   
                </tr> 
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama_dokter" placeholder="Isi Nama Dokter..." /></td>     
                </tr>  
                <tr>
                    <td>TTL : </td>
                    <td><input type="text" name="ttl" placeholder="Isi Tempat Tanggal Lahir..." /></td>                 
                </tr>  
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="alamat" placeholder="Isi ALamat Lengkap..." /></td>
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
                    <td><input type="text" name="spesialis" placeholder="Isi Spesialis..." /></td>                 
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
        </div>
    </div>

    <div class="footer">
        <a><b>&copy; 165610079 - Mohammad Quirni</a></p>
    </div>

  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Data Poli dan Jadwal</title>
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
            <h1>Tambah Data Poli dan Jadwal</h1> 
            <a href="../view_output/tampil_data_poli_jadwal.php">Kembali Ke Daftar Poli dan Jadwal</a><br><br>

            <form action="../../process/tambah_data_poli_jadwal.php" method="POST">
                <table cellspacing="5" cellpadding="5">
                <tr>
                    <td>Kode Poli : </td>
                    <td><input type="text" name="kode_poli" placeholder="Isi Kode Poli..." /></td>   
                </tr> 
                <tr>
                    <td>Nama Poli : </td>
                    <td><input type="text" name="nama_poli" placeholder="Isi Nama Poli..." /></td>     
                </tr>  
                <tr>
                    <td>Nama Dokter : </td>
                    <td>
                        <select name="id_dokter">
                            <option> - </option>
                            <?php 
                            include '../../config/koneksi.php';
                            $tampil = mysql_query("SELECT * FROM dokter")or die(mysql_error());
                            while($data = mysql_fetch_array($tampil)){
                            ?>
                            <option value="<?=$data['id_dokter']?>"><?=$data['nama_dokter']?></option>
                            <?php } ?>
                        </select>
                    </td>                 
                </tr>  
                <tr>
                    <td>Hari : </td>
                    <td><input type="text" name="hari" placeholder="Isi Hari..." /></td>
                </tr>  
                <tr>
                    <td>Jam : </td>
                    <td><input type="text" name="jam" placeholder="Isi Jam..." /></td>                 
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
<html>
<head>
  <title>Ubah Data Poli dan Jadwal</title>
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
          <h1>Ubah Data Poli dan Jadwal</h1>
          <a href="../view_output/tampil_data_poli_jadwal.php">Kembali Ke Daftar Poli dan Jadwal</a><br><br>
          
          <?php 
          include '../../config/koneksi.php';

          $id_poli = $_GET['id_poli'];
          $tampil = mysql_query("SELECT * FROM poli_jadwal WHERE id_poli='$id_poli'") or die(mysql_error());
          $no = 1;
          while($data = mysql_fetch_array($tampil)){
          ?>

          <form action="../../process/ubah_data_poli_jadwal.php" method="POST">
             <table cellspacing="5" cellpadding="5">
                <tr>
                    <td>Kode Poli : </td>
                    <td>
                      <input type="hidden" name="id_poli" value="<?php echo $data['id_poli'] ?>">
                      <input type="text" name="kode_poli" value="<?php echo $data['kode_poli'] ?>" />
                    </td>   
                </tr> 
                <tr>
                    <td>Nama Poli : </td>
                    <td><input type="text" name="nama_poli" value="<?php echo $data['nama_poli'] ?>" /></td>                 
                </tr>
                <tr>
                    <td>Nama Dokter : </td>
                    <td>
                        <select name="id_dokter">
                            <option> - </option>
                            <?php 
                            $tampil = mysql_query("SELECT * FROM dokter")or die(mysql_error());
                            while($data = mysql_fetch_array($tampil)){
                            ?>
                            <option value="<?=$data['id_dokter']?>"><?=$data['nama_dokter']?></option>
                            <?php } ?>
                        </select>
                    </td>                 
                </tr>

                <?php 
                $tampil = mysql_query("SELECT * FROM poli_jadwal WHERE id_poli='$id_poli'") or die(mysql_error());
                $no = 1;
                while($data = mysql_fetch_array($tampil)){
                ?>
                
                <tr>
                    <td>Hari : </td>
                    <td><input type="text" name="hari" value="<?php echo $data['hari'] ?>" /></td>     
                </tr>  
                <tr>
                    <td>Jam : </td>
                    <td><input type="text" name="jam" value="<?php echo $data['jam'] ?>" /></td>     
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
             <?php } ?>         
        </div>
    </div>

    <div class="footer">
        <a><b>&copy; 165610079 - Mohammad Quirni</a></p>
    </div>

</body>
</html>
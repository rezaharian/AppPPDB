

        <!doctype html>
            <html lang="en">
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                <!-- bootstrap icon -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
                <!-- my css -->
                <link rel="stylesheet" href="style.css">
                <title>//rrr </title>
            </head>
            
                
            <?php 
                session_start();
            
                // cek apakah yang mengakses halaman ini sudah login
                if($_SESSION['lv']==""){
                    header("location:login_petugas.php?pesan=gagal");
                }
            
                
                ?>
            <body id="home">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top" style="background-color: #0099ff;">
                <div class="container">
                <a class="navbar-brand" href="#">PPDB SMK GC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="halaman_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_data_pendaftar.php">Data Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_data_petugas.php">Data Petugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Status_siswa.php">Status Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berkas_masuk.php">Berkas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>

                    </ul>
                </div>
                </div>
            </nav>
            <!-- akhir navbar -->

<section id="tambahsiswa">
<div class="container">
<div class="row">
<div class="col">

<br/>
	<h3>Input data Siswa baru</h3>
    <form method="post" action="proses_tambah_data_siswa_p.php">    
    <input type="text" name="nik" placeholder="nik">
    <input type="text" name="nama" placeholder="nama">
    <input type="text" name="alamat_siswa" placeholder="alamat_siswa">
    <input type="text" name="tempat_lahir" placeholder="tempat_lahir">
    <input type="text" name="tanggal_lahir" placeholder="tanggal_lahir">
    <input type="text" name="j_k" placeholder="j_k">
    <input type="text" name="agama" placeholder="agama">
    <input type="text" name="no_hp_siswa" placeholder="no_hp_siswa">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="tahun_lulus" placeholder="tahun_lulus">
    <input type="text" name="asal_sekolah" placeholder="asal_sekolah">
    <input type="text" name="nama_ayah" placeholder="nama_ibu">
    <input type="text" name="nama_ibu" placeholder="kopentensi_keahlian">
    <input type="text" name="pekerjaan_orang_tua" placeholder="pekerjaan_orang_tua">
    <input type="text" name="alamat_orang_tua" placeholder="alamat_orang_tua">
    <input type="text" name="no_hp_orang_tua" placeholder="no_hp_orang_tua">
    <input type="text" name="nama_wali" placeholder="nama_wali">
    <input type="text" name="pekerjaan_wali" placeholder="alamat_wali">
    <input type="text" name="alamat_wali" placeholder="kopentensi_keahlian">
    <input type="text" name="no_hp_wali" placeholder="no_hp_wali">
    <input type="text" name="jurusan" placeholder="jurusan">
    <input type="text" name="ekskul" placeholder="ekskul">
    <input type="text" name="upload_ijazah" placeholder="status">
    <input type="text" name="upload_foto" placeholder="---">
    <input type="text" name="id_pendaftar" placeholder="id_pendaftar">


    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>


</div>
</div></div>

</section>
	
	<br/>
 
	

  </div>
            <!-- footer -->
            <footer style="background-color: #0099ff; color: white; text-align: center;" class="pb-3 pt-3 mt-5">
                <p>Created with  <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="kampoengit.com " class="text-white fw-bold"> Reza Harian S</a></p>
            </footer>
            <!-- akhir footer -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

            </body>
            </html>



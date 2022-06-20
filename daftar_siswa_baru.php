<?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "Login gagal! username dan password salah!";
                    }
                    else if($_GET['pesan'] == "logout"){
                        echo "Anda telah berhasil logout";
                    }
                    else if($_GET['pesan'] == "belum_login"){
                        echo "Anda harus login untuk mengakses halaman admin";
                    }
                }
            ?>

        <?php
        include ("header_regis.php");
        ?>

        <link rel="stylesheet" href="asset/fontawesome/css/all.css">

        <!-- kontainer -->
    <section class="apa pb-5" style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div   class="container  ">
    <div  class="row justify-content-center">
    
    
                <div class="col-md-4   text-center justify-content-center ">
                </br>
                    <h3 style="color: white;">Isi Data :</h3>
               
                    <img class=" img-thumbnail rounded-circle border-0 bg-light" style="width: 100px; margin-bottom:-100px;" src="asset/img/logo-500px.png">
                  
                <form class=" border p-1 rounded mt-5 border-radius-3  pb-5  shadow-lg p-3 mb-5 bg-light rounded  " method="POST" action="proses_daftar_siswa_baru.php">
    <div class="mb-3 mt-5">
    <input type="text" name="nik" class="form-control" placeholder="NIK" required>
    </div>
    <div class="mb-3">
    <input type="text" name="nama" class="form-control" placeholder="Nama" required>
    </div>
    <div class="mb-3">
    <input type="hidden" name="alamat_siswa" class="form-control" placeholder="alamat_siswa">
    </div>
    <div class="mb-3">
    <input type="hidden" name="tempat_lahir" class="form-control" placeholder="tempat_lahir">
    </div>
    <div class="mb-3">
    <input type="hidden" name="tanggal_lahir" class="form-control" placeholder="tanggal_lahir">
    </div>
    <div class="mb-3">
    <input type="hidden" name="j_k" class="form-control" placeholder="j_k">
    </div>
    <div class="mb-3">
    <input type="hidden" name="agama" class="form-control" placeholder="agama">
    </div>
    <div class="mb-3">
    <input type="text" name="no_hp_siswa" class="form-control" placeholder="No Hp" required>
    </div>
    <div class="mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="mb-3">
    <input type="hidden" name="tahun_lulus" class="form-control" placeholder="tahun_lulus">
    </div>
    <div class="mb-3">
    <input type="hidden" name="asal_sekolah" class="form-control" placeholder="asal_sekolah">
    </div>
    <div class="mb-3">
    <input type="hidden" name="nama_ayah" class="form-control" placeholder="nama_ayah">
    </div>
    <div class="mb-3">
    <input type="hidden" name="nama_ibu" class="form-control" placeholder="nama_ibu">
    </div>
    <div class="mb-3">
    <input type="hidden" name="pekerjaan_orang_tua" class="form-control" placeholder="pekerjaan_orang_tua">
    </div>
    <div class="mb-3">
    <input type="hidden" name="alamat_orang_tua" class="form-control" placeholder="alamat_orang_tua">
    </div>
    <div class="mb-3">
    <input type="hidden" name="no_hp_orang_tua" class="form-control" placeholder="no_hp_orang_tua">
    </div>
    <div class="mb-3">
    <input type="hidden" name="nama_wali" class="form-control" placeholder="nama_wali">
    </div>
    <div class="mb-3">
    <input type="hidden" name="pekerjaan_wali" class="form-control" placeholder="pekerjaan_wali">
    </div>
    <div class="mb-3">
    <input type="hidden" name="alamat_wali" class="form-control" placeholder="alamat_wali">
    </div>
    <div class="mb-3">
    <input type="hidden" name="no_hp_wali" class="form-control" placeholder="no_hp_wali">
    </div>
    <div class="mb-3">
    <input type="hidden" name="jurusan" class="form-control" placeholder="jurusan">
    </div>
    <div class="mb-3">
    <input type="hidden" name="ekskul" class="form-control" placeholder="ekskul">
    </div>
    <div class="mb-3">
    <input type="hidden" name="upload_ijazah" class="form-control" placeholder="upload_ijazah">
    </div>
    <div class="mb-3">
    <input type="hidden" name="upload_foto" class="form-control" placeholder="upload_foto">
    </div>
    <div class="mb-3">
    <input type="hidden" name="id_pendaftar" class="form-control" placeholder="id_pendaftar">
    </div>
    <input style="width: 50%;" type="submit" name="submit"  class="btn btn-primary mb-5 rounded-pill" value="Daftar">
    </br>
    
  </form>
  <div class="row " style="text-align: center; margin-top:-70px;">

  <a href="index.php">
    <button style="width: 160px; color:white; box-shadow: 0px 2px 5px 0px;" class="btn bg-success rounded-pill  "> Kembali Ke Login
    </button>
    </a>
  </div>
      
  </div>
  
        


    </div></div></section>




    


        <?php
        include ("footer_umum.php");
        ?>


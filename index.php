<?php
            session_start();
            if(isset($_SESSION ['nik'])){
            header ('location: halaman_siswa_baru.php');
            }

            
            ?>
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
        include ("header_umum.php");
        ?>

        <link rel="stylesheet" href="asset/fontawesome/css/all.css">

        <!-- kontainer -->
    <section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div   class="container ">
    <div  class="row  justify-content-center">
    <div>
    <h3 style="color: white; " class="mt-2 ">Selamat Datang</br>di Website PPDB SMK Global Cendekia Jakarta</h3>
    <p style="color: white; text-align:justify;">Halaman ini merupakan halaman resmi Pendaftaran Peserta Didik Baru SMK Global Cendekia. Untuk melakukan Pendaftaran silahkan Klik Daftar PPDB 
    dan jika sudah mendaftar silahkan Klik Login agar dapat mencetak Bukti Pendaftaran dan meng-Upload Bukti Pembayaran. Untuk informasi lebih lanjut 
    bisa menghubungi panitia PPDB pada link yang terdapat di bagian bawah halaman ini. Pembayaran dapat dilakukan secara langsung di bagian Kasir SMK Global Cendekia Jl. Raya Bekasi K.23 No.37
     Kel. Cakung Barat, Kec. Cakung - Jakarta Timur atau <b style="color: yellow;">melalui Transfer ke BNI Syariah dengan No. Rekening : 1181638040 atas nama SMK Global Cendekia</b>. 
    </p>
 
    </div>

    
    
    
                <div class="col-md-4   text-center justify-content-center ">
                
                    <img class=" img-thumbnail rounded-circle border-0 bg-light" style="width: 100px; margin-bottom:-100px;" src="asset/img/logo-500px.png">

                <form class=" border p-1 rounded mt-5 border-radius-3   shadow-lg p-3 mb-5 bg-light rounded  " method="POST" action="proses_login_siswa_baru1.php">
    <div class="mb-3 mt-5" >
        <label name="nama" class="form-label"> <i class="fas fa-user-circle"></i>
</i> Nama</label>
        <input type="text"  name="nama" class="form-control">
    </div>
    <div class="mb-3">
        <label name="nik" class="form-label"> <i class="fas fa-lock-open"></i></i> NIK</label>
        <input type="text" name="nik" class="form-control">
    </div>
    </br>
    <div>
    <button type="submit" style="width: 95%;" class="btn btn-primary rounded-pill mb-3">Masuk</button>
    </div>
    <div>
    <a href=" daftar_siswa_baru.php">
    <button type="button" style="width: 45%;" class="btn btn-success rounded-pill mb-5">Daftar</button>
    </a></div>
    
</form>
<h4 style="color: white;">Untuk Informasi PPDB lebih lanjut hubungi :</h4>
<div class="row bg-light m-1 p-3 rounded mb-5 shadow-lg   " >
      
      <div class="col">
          <img class="rounded-circle" style="width: 70%;  " src="asset/img/retno1.jpg">
          </br>
      Retnowati, S.Pd.</br>
     
      <a href="https://wa.me/+6281807760903?text=Saya ingin informasi tentang PPDB SMK Global Cendekia">
    <buttontype="button" style="width: 75%;" class="btn btn-success rounded-pill mb-2"><b style="color: white;">Chat</b></buttontype=>
    </a>
    
     
      </div>
      <div class="col">
      <img class="rounded-circle" style="width: 70%;" src="asset/img/sunardi.jpg">
  </br>
     Drs.Sunardi </br>
     <a href="https://wa.me/+6281294419160?text=Saya ingin informasi tentang PPDB SMK Global Cendekia">
    <buttontype="button" style="width: 75%;" class="btn btn-success rounded-pill mb-2"><b style="color: white">Chat</b></buttontype=>
    </a>
      
      </div>



    </br>
    <div>
    
   </div>
    
  
  
</form>

            </div>
            </div>

            

    </div></div></section>




    


        <?php
        include ("footer_umum.php");
        ?>


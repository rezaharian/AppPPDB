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

   <!-- kontainer -->
<section class="login">
    <div class="container ">
        <div class="row justify-content-center">
     
        <div class="col justify-content-center  mt-5  ">
        <center>
        <img class="mt-5" src="https://globalcendekiasmk.sch.id/wp-content/uploads/2021/03/Logo-Full-1024x410.png" width="270px" height="105px" />
        </center>

            </div>

    
            
            
            <div class="col border  mt-5 ">
          
            <form method="POST" action="proses_login_siswa_baru.php">
  <div class="mb-3">
    <label name="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control">
  </div>
  <div class="mb-3">
    <label name="nik" class="form-label">NIK</label>
    <input type="text" name="nik" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            
            
           
    
        
        </div>
        </div>
    </div>
</section>
</br>
</br>
</br>
</br>
</br>




<?php
include ("footer_umum.php");
?>


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
    <section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div   class="container ">
    <div  class="row justify-content-center">
    
    
                <div class="col-md-4   text-center justify-content-center ">
                </br>
                    <h3 style="color: white;">Silahkan Login :</h3>
                    <img class=" img-thumbnail rounded-circle border-0 bg-light" style="width: 100px; margin-bottom:-100px;" src="asset/img/logo-500px.png">

                <form class=" border p-1 rounded mt-5 border-radius-3   shadow-lg p-3 mb-5 bg-light rounded  " method="POST" action="proses_login_siswa_baru.php">
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
  
</form>
            </div>


    </div></div></section>




    


        <?php
        include ("footer_umum.php");
        ?>


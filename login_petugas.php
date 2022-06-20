<?php
include ("header_umum.php");
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
   <!-- kontainer -->
   <section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div class="container ">
        <div class="row justify-content-center">
        <div class="col-md-4   text-center justify-content-center ">

                <h3 style="color: white;"> Admin Silahkan Login :</h3>
                <div class="kotak_login">
                <img class=" img-thumbnail rounded-circle border-0 bg-light" style="width: 100px; margin-bottom:-100px;" src="asset/img/logo-500px.png">

		
 
		<form  class=" border p-1 rounded mt-5 border-radius-3   shadow-lg p-3 mb-5 bg-light rounded  "  action="cek_login_petugas.php" method="post">
          <div class="mb-3 mt-5">
    <label name="us" class="form-label"><i class="bi bi-person-circle"></i> Username</label>
    <input type="text" name="us" class="form-control">
  </div>
  <div class="mb-3">
    <label name="pw" class="form-label"><i class="bi bi-key-fill"></i>Password</label>
    <input type="text" name="pw" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		
	</div>
 

            </div>
   <section></section>
</section>


<?php
include ("footer_umum.php");
?>

<?php
include ("header_siswa.php");
?>
<?php
ob_start();
session_start();
if(!isset($_SESSION['nik'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");

}
    include "koneksi.php";
?>


                
<?php 
                session_start();
            
                // cek apakah yang mengakses halaman ini sudah login
                if($_SESSION['lv']==""){
                    header("location:index.php?pesan=gagal");
                }
            
                
                ?>


<section id="welcome">
<div class="container justify-content-center ">
<div class="row justify-content-center ">
<h4 > STATUS PENDAFTAR DENGAN :</h4>
<div class="col  justify-content-center border pb-4 mb-3 border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded  ">

    
    <?php
        $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
        $peg    =mysqli_fetch_array($tampilPeg);
    ?>
    <table class="table  " >
       
        <tr >
            <td width="150">NIK</td>
            <td>: <?=$peg['nik']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?=$peg['nama']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?=$peg['alamat_siswa']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?=$peg['tempat_lahir']?>, <?=$peg['tanggal_lahir']?></td>
        </tr>

        <tr>
       
        </tr>
     
       





        <tr height="20">
            
        </tr>
      
    </table>
    <h3  > " <?=$peg['upload_ijazah']?>" </h3>


</div>
<!-- <div class="col justify-content-center "> -->
<!-- kotakan gambar -->
<div id="carouselExampleSlidesOnly" class="carousel slide border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded  " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://globalcendekiasmk.sch.id/wp-content/uploads/2021/03/jurusan-TKR-1024x575.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SELAMAT DATANG DI APLIKASI PPDB SMK GC</h5>
        <p>silahkan lengkapi data dan upload berkas pendukung lainya</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://globalcendekiasmk.sch.id/wp-content/uploads/2021/03/jurusan-AK-1024x627.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SELAMAT DATANG DI APLIKASI PPDB SMK GC</h5>
        <p>silahkan lengkapi data dan upload berkas pendukung lainya</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://globalcendekiasmk.sch.id/wp-content/uploads/2021/03/jurusan-TKJ-1024x683.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SELAMAT DATANG DI APLIKASI PPDB SMK GC</h5>
        <p>silahkan lengkapi data dan upload berkas pendukung lainya</p>
      </div>
    </div>
  </div>
</div>
<!-- end -->
</div>
</div>
</div>
</section>
</br>
</br>
</br>



<?php
include ("footer_umum.php");
?>


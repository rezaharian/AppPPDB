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
    <section>
    <div class="container justify-content-center">
    <div class="row  ">
    <div class="col border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded">

        <h5 >Silahkan Upload File : </h5>
        <form action="proses_upload_berkas.php" method="post" enctype="multipart/form-data">
        <table class="table table-light " border="0" cellpadding="6" >
            <tr>
            <td>Akte:</td>
            <td><input type="file" name="akte" /></td>
            </tr>
            </br>
            <tr>
            <td>Ijazah</td>
            <td><input type="file" name="ijazah" /> </td>
            </tr>
            <tr>
            <td>KK</td>
            <td><input type="file" name="kk" />  <td>
            </tr>
            <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" /> </td>
            </tr>
            <tr>
            <td><input type="submit" name="upload" value="upload" /></td>
            </tr>
        </table>
        </form> 




    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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
    </div>
    </div></div></section>



    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
        <?php
    include ("footer_umum.php");
    ?>

<?php
include ("header_siswa.php");
?>







<section id="welcome">
<div class="container " >
<div class="row justify-content-center ">
<div class="col  border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded  ">
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
    <h4 style="margin-left: 100px;"> Berikut data Anda :</h4>
    <?php
        $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
        $peg    =mysqli_fetch_array($tampilPeg);
    ?>
    <table class="table table-light" >
       
        <tr >
            <td width="90">NIK</td>
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
            <td>Jenis Kelamin</td>
            <td>: <?=$peg['j_k']?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: <?=$peg['agama']?></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>: <?=$peg['no_hp_siswa']?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?=$peg['email']?></td>
        </tr>
        <tr>
            <td>Tahun Lulus</td>
            <td>: <?=$peg['tahun_lulus']?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>: <?=$peg['asal_sekolah']?></td>
        </tr>
 
        <tr>
            <td>Nama Ayah</td>
            <td>: <?=$peg['nama_ayah']?></td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>: <?=$peg['nama_ibu']?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: <?=$peg['pekerjaan_orang_tua']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?=$peg['alamat_orang_tua']?></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>: <?=$peg['no_hp_orang_tua']?></td>
        </tr>
        <tr>
            <td>Nama Wali</td>
            <td>: <?=$peg['nama_wali']?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: <?=$peg['pekerjaan_wali']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?=$peg['alamat_wali']?></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>: <?=$peg['no_hp_wali']?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?=$peg['jurusan']?></td>
        </tr>
        <tr>
            <td>Easkul</td>
            <td>: <?=$peg['ekskul']?></td>
        </tr>
     
    
        <tr height="80">
            
        </tr>
        <tr>
        <td>
  <a href=" halaman_siswa_edit_siswa.php">
    <button type="button" class="btn btn-primary mb-5">UBAH</button>
    </a></td>
    </tr>
    </table>


</div>
<div class="col">
<!-- kotakan gambar -->


<!-- end -->
</div>
</div>
</div>
</section>



<?php
include ("footer_umum.php");
?>



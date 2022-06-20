
<?php
include ("header_siswa.php");
?>




<?php
session_start();
if(!isset($_SESSION ['nik'])){
header ('location: login.php');
}
?>


<section>




<section id="welcome">
<div class="container  justify-content-center ">
<div class="row justify-content-center border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded">
<div class="col-md-5 mb-5 pr-4">

<b>Panduan :</b> </br>
<p>1. Silahkan lengkapi data anda dengan benar</p>
<p>2. Upload berkas seperti Ijazah, Foto, KK dengan format PDF/JPG</p>
<p>3. Upload Bukti pembayaran pendaftaran dalam bentuk PDF/JPG</p>
<p>4. Tunggu falidasi dari Panitia PPDB 1 x 24 Jam</p>
<p>5. Cetak bukti pendaftaran dan print , lalu bawa bukti pendaftaran untuk daftar ulang </p>

</div>
<div class="col border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded">
<b>Bantuan :</b>
<p>1. Jika ada kendala dalam proses pendaftaran silahkan hubungi kami </p>
<p>2. 098507946038 adalan no telp system PPDB Online</p>
<p>3. 098507946038 adalah no telp /wa panitia PPDb Online atas nama bapak xxxx</p>
<p>4. 080989989  adalah no kepala sekolah smk GC</p>
<p>5. atau bisa langsung datang ke gedung smk global cendekia jakarta</p>


</div>




</div>
</div>
</section>
<section>
<div class="container  justify-content-center  ">
<br/>
  <a href=" halaman_siswa_edit_siswa.php">
    <button type="button" class="btn btn-primary btn-lg mb-2">LENGKAPI DATA SEKARANG</button>
    </a>

  <a href=" upload_berkas.php">
    <button type="button" class="btn btn-primary btn-lg  mb-2">UPLOAD BERKAS SEKARANG</button>
    </a>
    
  <a href=" status_pendaftar.php">
    <button type="button" class="btn btn-primary btn-lg  mb-2"> LIHAT STATUS SAYA </button>
    </a>
  <a href=" cetaksiswa.php">
    <button type="button" class="btn btn-primary btn-lg  mb-2">CETAK BUKTI DAFTAR</button>
    </a>

</div>
</section>
</br>
</br>
</br>
</br>

<?php
include ("footer_umum.php");
?>



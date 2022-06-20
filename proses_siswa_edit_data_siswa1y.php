
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

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $j_k = $_POST['j_k'];
    $agama = $_POST['agama'];
    $no_hp_siswa = $_POST['no_hp_siswa'];
    $email = $_POST['email'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jurusan = $_POST['jurusan'];
    $upload_foto = $_POST['upload_foto'];


    

  
  // update data berdasarkan id_produk yg dikirimkan
  $q = mysqli_query($koneksi,"update data_siswa set nik='$nik', nama='$nama',alamat_siswa='$alamat_siswa', tempat_lahir='$tempat_lahir',
  tanggal_lahir='$tanggal_lahir',j_k='$j_k',agama='$agama',no_hp_siswa=$no_hp_siswa, email='$email',tahun_lulus='$tahun_lulus', asal_sekolah='$asal_sekolah',jurusan='$jurusan',upload_foto='$upload_foto'
   where nik='$nik'");
  

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data siswa berhasil diubah'); window.location.href='halaman_siswa_baru.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data siswa gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}


?>

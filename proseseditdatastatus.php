
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
  $jurusan = $_POST['jurusan'];
  $upload_ijazah = $_POST['upload_ijazah'];


    

  
  // update data berdasarkan id_produk yg dikirimkan
  
   $q = mysqli_query($koneksi,"update data_siswa set nik='$nik', nama='$nama',alamat_siswa='$alamat_siswa', tempat_lahir='$tempat_lahir',
  tanggal_lahir='$tanggal_lahir',j_k='$j_k',agama='$agama',jurusan='$jurusan',upload_ijazah='$upload_ijazah' where nik='$nik'");
  

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data siswa berhasil diubah'); window.location.href='status_siswa.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data siswa gagal diubah'); window.location.href='status_siswa.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}


?>

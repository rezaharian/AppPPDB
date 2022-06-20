
<!--  -->

<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $us = $_POST['us'];
  $pw = $_POST['pw'];
  $lv = $_POST['lv'];

  
  // update data berdasarkan id_produk yg dikirimkan
  
   $q = mysqli_query($koneksi,"update petugas set id='$id', us='$us',pw='$pw', lv='$lv' where id='$id'");



  

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data siswa berhasil diubah'); window.location.href='admin_data_petugas.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data siswa gagal diubah'); window.location.href='tabel_petugas.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>

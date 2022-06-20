--  -->

<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
 
    $id = $_POST['id'];
    $us = $_POST['us'];
    $pw = $_POST['pw'];
    $lv = $_POST['lv'];
 
  
    


  // id_produk bernilai '' karena kita set auto increment
  $q = mysqli_query($koneksi,"insert into petugas values('$id','$us','$pw','$lv')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data siswa berhasil ditambahkan'); window.location.href='admin_data_petugas.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data siswa gagal ditambahkan'); window.location.href='admin_data_petugas.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id_bukti'])) {
  $id = $_GET['id_bukti'];

  // perintah hapus data berdasarkan id yang dikirimkan

  $q = mysqli_query($koneksi,"delete from bukti where id_bukti='$id'");


  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='tampil1.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data gagal dihapus'); window.location.href='tampil1.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}

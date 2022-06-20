

<?php

require_once '../koneksi.php';

if (isset($_POST['submit'])) {
  $a = $_POST['id_bukti'];
  $b = $_POST['nik'];
  $c = $_POST['ket'];
 

  
  // update data berdasarkan id_produk yg dikirimkan
  
   $q = mysqli_query($koneksi,"update bukti set id_bukti='$a', nik='$b',ket='$c' where id_bukti='$a'");



  

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data siswa berhasil diubah'); window.location.href='tampil.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data siswa gagal diubah'); window.location.href='tampil.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>


<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $a = $_POST['id_bayar'];
    $b = $_POST['nik'];
    $c = $_POST['tgl_bayar'];
    $d = $_POST['jenis_bayar'];
    $e = $_POST['nominal_bayar'];
  
  // update data berdasarkan id_produk yg dikirimkan
  
   $q = mysqli_query($koneksi," update pembayaran set id_bayar='$a', nik='$b', tgl_bayar='$c', jenis_bayar='$d', nominal_bayar='$e' where id_bayar='$a'");



  

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data siswa berhasil diubah'); window.location.href='pembayaran_petugas.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data siswa gagal diubah'); window.location.href='pembayaran_petugas.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>

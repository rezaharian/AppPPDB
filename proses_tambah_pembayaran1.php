
<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  foreach ($_POST['jenis_bayar'] as $d)
 
    $a = $_POST['id_bayar'];
    $b = $_POST['nik'];
    $c = $_POST['tgl_bayar'];
    $e = $_POST['nominal_bayar'];
 
  
    


  // id_produk bernilai '' karena kita set auto increment
  $q = mysqli_query($koneksi,"insert into pembayaran values('$a','$b','$c','$d','$e')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data siswa berhasil ditambahkan'); window.location.href='pembayaran_petugas.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data siswa gagal ditambahkan -- NIK TIDAK TERDAFTAR '); window.location.href='pembayaran_petugas.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>

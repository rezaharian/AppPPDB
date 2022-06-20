--  -->

<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
 
    $nik = $_POST['nik'];
    $nm = $_POST['nama'];
    $as = $_POST['alamat_siswa'];
    $ttl = $_POST['tempat_lahir'];
    $tgl = $_POST['tanggal_lahir'];
    $jk = $_POST['j_k'];
    $ag = $_POST['agama'];
    $nhs = $_POST['no_hp_siswa'];
    $eml = $_POST['email'];
    $thl = $_POST['tahun_lulus'];
    $als = $_POST['asal_sekolah'];
    $na = $_POST['nama_ayah'];
    $ni = $_POST['nama_ibu'];
    $pot = $_POST['pekerjaan_orang_tua'];
    $aor = $_POST['alamat_orang_tua'];
    $nhot = $_POST['no_hp_orang_tua'];
    $nw = $_POST['nama_wali'];
    $pw = $_POST['pekerjaan_wali'];
    $aw = $_POST['alamat_wali'];
    $nhw = $_POST['no_hp_wali'];
    $j = $_POST['jurusan'];
    $ek = $_POST['ekskul'];
    $ui = $_POST['upload_ijazah'];
    $uf = $_POST['upload_foto'];
    $idp = $_POST['id_pendaftar'];
 
  
    


  // id_produk bernilai '' karena kita set auto increment
  $q = mysqli_query($koneksi,"insert into data_siswa values('$nik','$nm','$as','$ttl','$tgl','$jk','$ag','$nhs','$eml','$thl','$als','$na','$ni','$pot','$pot','$aor',
  '$nhot','$nw','$aw','$nhw','$j','$ek','$ui','$uf','$idp')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data siswa berhasil ditambahkan'); window.location.href='admin_data_pendaftar.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data siswa gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
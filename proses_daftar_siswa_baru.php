
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
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_orang_tua = $_POST['pekerjaan_orang_tua'];
    $alamat_orang_tua = $_POST['alamat_orang_tua'];
    $no_hp_orang_tua = $_POST['no_hp_orang_tua'];
    $nama_wali = $_POST['nama_wali'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $alamat_wali = $_POST['alamat_wali'];
    $no_hp_wali = $_POST['no_hp_wali'];
    $jurusan = $_POST['jurusan'];
    $ekskul = $_POST['ekskul'];
    $upload_ijazah = $_POST['upload_ijazah'];
    $upload_foto = $_POST['upload_foto'];
    $id_pendaftar = $_POST['id_pendaftar'];
 
  
    


  // id_produk bernilai '' karena kita set auto increment
  $q = mysqli_query($koneksi,"insert into data_siswa values('$nik','$nama','$alamat_siswa','$tempat_lahir','$tanggal_lahir','$j_k'
  ,'$agama','$no_hp_siswa','$email','$tahun_lulus','$asal_sekolah','$nama_ayah','$nama_ibu','$pekerjaan_orang_tua','$alamat_orang_tua'
  ,'$no_hp_orang_tua','$nama_wali','$pekerjaan_wali','$alamat_wali','$no_hp_wali','$jurusan','$ekskul','$upload_ijazah','$upload_foto','$id_pendaftar')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Berhasil ! silahkan Login'); window.location.href='login_siswa_baru.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data siswa gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
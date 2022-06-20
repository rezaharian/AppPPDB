<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from data_siswa where nik='$nik' and nama='$nama'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nik'] = $nik;
	$_SESSION['status'] = "login";
	header("location:halaman_siswa_baru.php");
}else{
	header("location:pwsl.php?pesan=gagal");
	
}
?>
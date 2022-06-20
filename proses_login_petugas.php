<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$us = $_POST['us'];
$pw = $_POST['pw'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from data_siswa where nik='$nik' and nama='$nama'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nik'] = $nik;
	$_SESSION['status'] = "login";
	header("location:halaman_siswa_baru.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>
<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$us = $_POST['us'];
$pw = $_POST['pw'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from petugas where us='$us' and pw='$pw'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['lv']=="admin"){
 
		// buat session login dan username
		$_SESSION['us'] = $us;
		$_SESSION['lv'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['lv']=="petugas"){
		// buat session login dan username
		$_SESSION['us'] = $us;
		$_SESSION['lv'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_petugas.php");
	}else if($data['lv']=="guru"){
		// buat session login dan username
		$_SESSION['us'] = $us;
		$_SESSION['lv'] = "guru";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_guru.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['lv']=="kepala"){
		// buat session login dan username
		$_SESSION['us'] = $us;
		$_SESSION['lv'] = "kepala";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman_kepala.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>
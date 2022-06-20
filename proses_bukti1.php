<?php 
include 'koneksi.php';
$a = $_POST['nik'];
$b = $_POST['ket'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','pdf');
$filename = $_FILES['bukti']['name'];
$ukuran = $_FILES['bukti']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 66044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['bukti']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "insert INTO bukti VALUES(NULL,'$a','$b','$xx')");
		header("location:tampil1.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}
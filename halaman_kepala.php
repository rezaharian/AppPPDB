<!DOCTYPE html>
<html>
<head>
	<title>kepala</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['lv']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman kepala</h1>
 
	<p>Halo <b><?php echo $_SESSION['us']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['lv']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
</body>
</html>
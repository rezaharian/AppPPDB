<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Data Data Bukti Transfer</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<a href="index.php" class="btn btn-info btn-sm">Tambah Data</a>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr>
				<th width="10%">nik</th>
				<th width="20%">ket</th>
				<th width="40%">bukti</th>
				<th width="10%">Opsi</th>
			</tr>
			<?php 
			$data = mysqli_query($koneksi,"select * from bukti");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['nik']; ?></td>
					<td><?php echo $d['ket']; ?></td>
					<td><img src="../gambar/<?php echo $d['bukti'] ?>" width="50%"></td>
                    <td>
                    <?php 
            echo "<a href='edit_bukti.php?id_bukti=".$d['id_bukti']."'>Ubah</a>"; 
            echo " | ";
            ?>
            <a href="hapus_bukti.php?id_bukti=<?=$d['id_bukti']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
                    </td>
				</tr>
				<?php
			}
 
			?>
		</table>
	</div>
</body>
</html>
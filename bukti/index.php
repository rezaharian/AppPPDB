<!DOCTYPE html>
<html>
<head>
	<title>ddd</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Data Bukti</h2>
		<form action="proses_bukti.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nik :</label>
				<input type="number" class="form-control" placeholder="Masukkan Nik" name="nik" required="required">
			</div>
			<div class="form-group">
				<label>Keterangan :</label>
				<input type="text" class="form-control" placeholder="Masukkan Keterangan" name="ket" required="required">
			</div>
			<div class="form-group">
				<label>Bukti :</label>
				<input type="file" name="bukti" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif | .pdf</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>
 
</body>
</html>
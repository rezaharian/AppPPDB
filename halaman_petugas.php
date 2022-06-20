<?php
	include ("header_petugas.php");
	?>

				
				<?php 
				session_start();
			
				// cek apakah yang mengakses halaman ini sudah login
				if($_SESSION['lv']==""){
					header("location:index.php?pesan=gagal");
				}
			
				?>

				<section  id="table" class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
				<div class="container justify-content-center ">
				<div class="row mt-5 justify-content-center">
				<div style="border-radius: 20px;" class="col bg-light justify-content-center ">


			<h5 class="mt-2" style="background-color: greenyellow; text-align:center; border-radius: 20px; padding: 10px" > Halo <b><?php echo $_SESSION['us']; ?></b> </br>Anda telah login sebagai <b><?php echo $_SESSION['lv']; ?></b>.
			</br> <b>Berikut Rekapan Data PPDB</b>
			</h5>


			<?php

			// menghubungkan dengan koneksi database
			include 'koneksi.php';
			
			// mengambil data barang
			$jmm = mysqli_query($koneksi,"select * from data_siswa");
			$jmn = mysqli_query($koneksi,"select * from bukti");
			$jmo = mysqli_query($koneksi,"select * from pembayaran");

			
			// menghitung data barang
			$jumlahsiswa = mysqli_num_rows($jmm);
			$jumlahbukti = mysqli_num_rows($jmn);
			$jumlahpembayaran = mysqli_num_rows($jmo);
		
			?>
					<!-- tulisan -->

				
				
				<table class="table">
	<thead>
		<tr >
		<th scope="col">No</th>
		<th scope="col">Data</th>
		<th scope="col">Jumlah</th>
		<th scope="col"></th>
		
		</tr>
	</thead>
	<tbody>
	
		<tr>
		<th scope="row">1</th>
		<td>Pendaftar</td>
		<td><b><h2 style="background-color: greenyellow; text-align:center;"><?php echo $jumlahsiswa; ?></h2></td>
		<td> <a href="pendaftar_petugas.php"><button type="button" class="btn btn-primary">Lihat Data</button></a></td>
		</tr>
		<tr>
		<th scope="row">2</th>
		<td>Bukti Transfer</td>
		<td> <b><h2 style="background-color: greenyellow; text-align:center;"><?php echo $jumlahbukti; ?></h2></b></td>
		<td> <a href="berkas_petugas.php"><button type="button" class="btn btn-primary">Lihat Data</button></a></td>
		</tr>
		<tr>
		<th scope="row">3</th>
		<td>Pembayaran</td>
		<td> <b><h2 style="background-color: greenyellow; text-align:center;"><?php echo $jumlahpembayaran; ?></h2></b></td>
		<td> <a href="pembayaran_petugas.php"><button type="button" class="btn btn-primary">Lihat Data</button></a></td>

		</tr>
		<td> <a href="terupload"><button type="button" class="btn btn-primary">Lihat Data</button></a></td>


	</tbody>
	</table>

			
			

				</div></div></div>
				
				</br>
				</br>
				</br>
				</br>
			
				</section>
				

				
			



				<?php
	include ("footer_umum.php");
	?>

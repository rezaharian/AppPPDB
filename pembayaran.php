
    
                
                <?php 
                session_start();
            
                // cek apakah yang mengakses halaman ini sudah login
                if($_SESSION['lv']==""){
                    header("location:index.php?pesan=gagal");
                }
            
                
                ?>

    <section id="tabel">
    <div class="container">
    <div class="row">
    
  

    <?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from pembayaran ORDER BY id_bayar DESC");
?>



<form action="" method="post">
    <table class="table">

    <thead>
    <tr>
                <th> NO. </th>
                <th>ID Pembayaran </th>
                <th>NIK</th>
                <th>Tgl </th>
                <th>Jenis Pembayaran</th>
                <th>Nominal</th>
                <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["id_bayar"];?></td>
                    <td><?php echo $data["nik"];?></td>
                    <td><?php echo $data["tgl_bayar"];?></td>
                    <td><?php echo $data["jenis_bayar"];?></td>
                    <td><?php echo $data["nominal_bayar"];?></td>
                    <td>
            <?php 
            // echo "<a href='edit_petugas.php?id=".$data['id']."'>Ubah</a>"; 
        
            ?>
            <a href="edit_pembayaran.php?id_bayar=<?=$data['id_bayar']; ?>" ><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="hapus_pembayaran.php?id_bayar=<?=$data['id_bayar']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
            </td>
           </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
        </tbody>
    </table>
</form>
</div>
<a href="tambah_pembayaran.php"><button type="button" class="btn btn-primary">Tambah Pembayaran</button></a>
</div>
</section>
<section>
<div class="container">
<div class="row mt-5">
<div class="col">

<?php

// menghubungkan dengan koneksi database
include 'koneksi.php';
 
// mengambil data barang
$jml = mysqli_query($koneksi,"select * from pembayaran");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($jml);
?>
 
<h3> Jumlah Data : <b><?php echo $jumlah_barang; ?></b></h3>

</div></div></div>
</section>
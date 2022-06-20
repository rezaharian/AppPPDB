<?php
include('header_petugas.php');
?>
    
    <section class="apa pb-5" style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div class="container">
    <div class="row bg-light m-3 p-4 rounded">
    
                
    <?php 
                session_start();
            
                // cek apakah yang mengakses halaman ini sudah login
                if($_SESSION['lv']==""){
                    header("location:index.php?pesan=gagal");
                }
            
                
                ?>
  

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
            <a href="hapus_pembayaran1.php?id_bayar=<?=$data['id_bayar']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
            </td>
           </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
        </tbody>
    </table>
</form>

<a href="tambah_pembayaran.php"><button type="button" class="btn btn-primary">Tambah Pembayaran</button></a>

</br>
</br>

<?php

// menghubungkan dengan koneksi database
include 'koneksi.php';
 
// mengambil data barang
$jml = mysqli_query($koneksi,"select * from pembayaran");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($jml);
?>
 </br>
<h3 class="mb-5"> Jumlah Data : <b><?php echo $jumlah_barang; ?></b></h3>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

</div>
</section>
<?php
include("footer_umum.php");
?>
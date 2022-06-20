
     <?php
include ("header_admin.php");
     ?>
      <?php 
                    session_start();
                
                    // cek apakah yang mengakses halaman ini sudah login
                    if($_SESSION['lv']==""){
                        header("location:login_petugas.php?pesan=gagal");
                    }
                
                    ?>
    <section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >

    <section id="tabel">
    <div class="container  ">
    <h4 style="color:white;">Data Pembayaran PPDB:</h4>

    <div style="border-radius: 10px;" class="row bg-light ">
    <div class="col">
    
  

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


<?php

// menghubungkan dengan koneksi database
include 'koneksi.php';
 
// mengambil data barang
$jml = mysqli_query($koneksi,"select * from pembayaran");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($jml);
?>
 </br>
 </br>
 </br>
<h3> Jumlah Data : <b><?php echo $jumlah_barang; ?></b></h3>

</div>
</div>
</br>
</br>
</br>
</br>
</div>
</section>
</section>

<?php
include('footer_umum.php');
?>
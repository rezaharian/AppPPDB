
    
    <section id="tabel">
    <div class="container">
    <div class="row">
    
  
                
    

    <?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from petugas ORDER BY id DESC");
?>



<form action="" method="post">
    <table class="table">

    <thead>
    <tr>
                <th> NO. </th>
                <th>ID </th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
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
                    <td><?php echo $data["id"];?></td>
                    <td><?php echo $data["us"];?></td>
                    <td><?php echo $data["pw"];?></td>
                    <td><?php echo $data["lv"];?></td>
                    <td>
            <?php 
            // echo "<a href='edit_petugas.php?id=".$data['id']."'>Ubah</a>"; 
        
            ?>
            <a href="edit_petugas.php?id=<?=$data['id']; ?>" ><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="hapus_petugas.php?id=<?=$data['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><button type="button" class="btn btn-danger">Hapus</button></a>
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
<a href="tambah_petugas.php"><button type="button" class="btn btn-primary">Tambah Petugas</button></a>
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
$jml = mysqli_query($koneksi,"select * from petugas");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($jml);
?>
 
<h3> Jumlah Data : <b><?php echo $jumlah_barang; ?></b></h3>

</div></div></div>
</section>
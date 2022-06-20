<?php 
                    // cek apakah yang mengakses halaman ini sudah login
                    if($_SESSION['lv']==""){
                        header("location:login_petugas.php?pesan=gagal");
                    }
                
                    ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
                



    <section id="tabel">
    <div class="container">
    <div class="row">
    
  

    <?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from data_siswa ORDER BY nik DESC");
?>
<form action="" method="post">
    <table class="table" width="5000px">

    <thead>
    <tr>
                <th width="100px"> NO. </th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>No Hp Siswa</th>
                <th>Email</th>
                <th>Tahun Lulus</th>
                <th>Asal Sekolah</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Nama Wali</th>
                <th>Pekerjaan Wali</th>
                <th>Alamat Wali</th>
                <th>No Hp</th>
                <th>Jurusan</th>
                <th>ekskul</th>
                <th>Status</th>
                <th>Foto</th>
                <th>ID Pendaftar</th>
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
                    <td><?php echo $data["nik"];?></td>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["alamat_siswa"];?></td>
                    <td><?php echo $data["tempat_lahir"];?></td>
                    <td><?php echo $data["tanggal_lahir"];?></td>
                    <td><?php echo $data["j_k"];?></td>
                    <td><?php echo $data["agama"];?></td>
                    <td><?php echo $data["no_hp_siswa"];?></td>
                    <td><?php echo $data["email"];?></td>
                    <td><?php echo $data["tahun_lulus"];?></td>
                    <td><?php echo $data["asal_sekolah"];?></td>
                    <td><?php echo $data["nama_ayah"];?></td>
                    <td><?php echo $data["nama_ibu"];?></td>
                    <td><?php echo $data["pekerjaan_orang_tua"];?></td>
                    <td><?php echo $data["alamat_orang_tua"];?></td>
                    <td><?php echo $data["no_hp_orang_tua"];?></td>
                    <td><?php echo $data["nama_wali"];?></td>
                    <td><?php echo $data["pekerjaan_wali"];?></td>
                    <td><?php echo $data["alamat_wali"];?></td>
                    <td><?php echo $data["no_hp_wali"];?></td>
                    <td><?php echo $data["jurusan"];?></td>
                    <td><?php echo $data["ekskul"];?></td>
                    <td><?php echo $data["upload_ijazah"];?></td>
                    <td><?php echo $data["upload_foto"];?></td>
                    <td><?php echo $data["id_pendaftar"];?></td>
                    <td>
            <?php 
            echo "<a href='edit_data_siswa_p.php?nik=".$data['nik']."'>Ubah</a>"; 
            echo " | ";
            ?>
            <a href="hapus_data_siswa_p.php?nik=<?=$data['nik']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
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

<a href="tambah_data_siswa_p.php"><button type="button" class="btn btn-primary" style="margin-top: 30px; margin-bottom: 30px;">Tambah Siswa</button></a>

</div>



</section>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
  </body>


</html>



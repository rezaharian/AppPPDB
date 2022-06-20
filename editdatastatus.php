
        <?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['nik'])) {
    $id = $_GET['nik'];

    // ambil data berdasarkan id_produk
    $q =mysqli_query($koneksi,"select * from data_siswa where nik='$id'");



    foreach ($q as $peg) :
    
    ?>
    <?php
include("header_admin.php");
    ?>



    <section >
    <div class="container justify-content-center ">
    <div class="row  justify-content-center">
   
    <h4  class="mt-2 text-center">Silahkan Edit</h4>

    <div  style="background-color: lawngreen; border-radius:40px;" class="col-md-6 justify-content-center">

<table class="table table-striped  mt-4  " >
    <form  action="proseseditdatastatus.php" method="post">
        <tr >
            <td width="90">NIK</td>
            <td><input type="text"   name="nik" value="<?= $peg['nik'] ?>"></td> 
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $peg['nama'] ?>"></td> 

        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat_siswa" value="<?= $peg['alamat_siswa'] ?>"></td> 
        </tr>
        <tr>
            <td>TTL</td>
            <td><input type="text" name="tempat_lahir" value="<?= $peg['tempat_lahir'] ?>"><br/><br/>
            <input type="date" name="tanggal_lahir" value="<?= $peg['tanggal_lahir'] ?>"></td> 
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="j_k" value="<?= $peg['j_k'] ?>"></td> 
        </tr>
        <tr>
            <td>Agama</td>
            <td><input type="text" name="agama" value="<?= $peg['agama'] ?>"></td> 
        </tr>
        <tr>
            <td>Pilihan Jurusan</td>
            <td><input type="text" name="jurusan" value="<?= $peg['jurusan'] ?>"></td> 
        </tr>
        <tr>
        <td>Status</td>
        <td>
        <select type="text" name="upload_ijazah" value="<?= $peg['upload_ijazah'] ?>">
        <option >DI TERIMA</option>
        <option selected="selected">DALAM PROSES</option>

        </select>
        </td>
        </tr>
        
        <td>
        <input type="submit" name="submit" value="Ubah Data">
        </td>
        <tr height="80">
        
            </form>
        </tr>
        
    </table>
    
    </div></div></div></section>
<div class="mb-5">
</div>
    <?php
        endforeach;     
       include("footer_umum.php"); 
}

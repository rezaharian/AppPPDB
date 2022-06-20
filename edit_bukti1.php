
        <?php

require_once 'koneksi.php';
include ('header_siswa.php');

// cek id
if (isset($_GET['id_bukti'])) {
    $id = $_GET['id_bukti'];

    // ambil data berdasarkan id_produk
    $q =mysqli_query($koneksi,"select * from bukti where id_bukti='$id'");



    foreach ($q as $peg) :
    
    ?>
    <section>
    
    
<div class="container mt-5">
<div class="row">
<div class="col">
<table class="table table-light " border="0" cellpadding="8" style="">
    <form action="proses_edit_bukti1.php" method="post">
        <tr >
            <td width="90"></td>
            <td><input type="hidden"  name="id_bukti" value="<?= $peg['id_bukti'] ?>"></td> 
        </tr>
        <tr>
            <td>nik</td>
            <td><input type="text" readonly name="nik" value="<?= $peg['nik'] ?>"></td> 

        </tr>
        <tr>
           <td>
           <label>Keterangan :</label><td> <select name="ket" id="">
                <option value="<?= $peg['id_bukti'] ?>" > <?= $peg['ket'] ?></option>
                <option value="Bukti Pembayaran Seragam Sekolah">Bukti Pembayaran Seragam Sekolah</option>
                <option value="Bukti Pembayaran kegiatan Masa Pengenalan Lingkungan Sekolah">Bukti Pembayaran kegiatan Masa Pengenalan Lingkungan Sekolah</option>
                <option value="Bukti Pembayaran Pemeliharaan Sarana Prasarana">Bukti Pembayaran Pemeliharaan Sarana Prasarana</option>
                <option value="Bukti Pembayarn Lain-lain">Bukti Pembayarn Lain-lain</option>
                </select>
                </td>
           </td>
        </tr>
        <tr>
            <td>Bukti</td>
            <td><img src="gambar/<?php echo $peg['bukti'] ?>" width="50%"></td>
        </tr>
       
    
        <td>
        <input type="submit" name="submit" value="Ubah Data">
        </td>
        <tr height="80">
        
            </form>
        </tr>
        
    </table>
    </div>
    </div>
    </div>

    </section>
    <?php
    include ('footer_umum.php');
    ?>

    <?php
        endforeach;     
        
}
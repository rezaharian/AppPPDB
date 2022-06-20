
        <?php

require_once '../koneksi.php';

// cek id
if (isset($_GET['id_bukti'])) {
    $id = $_GET['id_bukti'];

    // ambil data berdasarkan id_produk
    $q =mysqli_query($koneksi,"select * from bukti where id_bukti='$id'");



    foreach ($q as $peg) :
    
    ?>

<table class="table table-light " border="0" cellpadding="8" style="margin-left: 100px;">
    <form action="proses_edit_bukti.php" method="post">
        <tr >
            <td width="90"></td>
            <td><input type="hidden"  name="id_bukti" value="<?= $peg['id_bukti'] ?>"></td> 
        </tr>
        <tr>
            <td>nik</td>
            <td><input type="text" name="nik" value="<?= $peg['nik'] ?>"></td> 

        </tr>
        <tr>
            <td>ket</td>
            <td><input type="text" name="ket" value="<?= $peg['ket'] ?>"></td> 
        </tr>
        <tr>
            <td>Bukti</td>
            <td><input type="text" readonly name="bukti" value="<?= $peg['bukti'] ?>"></td> 
        </tr>
       
    
        <td>
        <input type="submit" name="submit" value="Ubah Data">
        </td>
        <tr height="80">
        
            </form>
        </tr>
        
    </table>

    <?php
        endforeach;     
        
}
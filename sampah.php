


<?php
include("koneksi.php");
?>
<div style="color:black;" class="row bg-light p-4 m-1 rounded shadow-lg justify-content-center">
            <?php
                $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa ");
                $peg    =mysqli_fetch_array($tampilPeg);
            ?>
            


  

<?php

$nilai = ($peg['upload_ijazah']);

if ($nilai == (($peg['upload_ijazah'])=='DI TERIMA')) {
    echo '<p style="color:green">di terima</p>';
} elseif($nilai == (($peg['upload_ijazah'])=='BERKAS BELUM LENGKAP')) {
    echo '<p style="color:red">di tonjok</p>';
} elseif($nilai == (($peg['upload_ijazah'])=='DALAM PROSES')) {
    echo 
} elseif($nilai == (($peg['upload_ijazah'])=='PEMBAYARAN BELUM 50%')) {
}


?>